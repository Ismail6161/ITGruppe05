<?php
Core::checkAccessLevel(1);
if (isset($_GET["id"])) {
require "includes/config.php";
$x =0;
$datenimport_fehler =array();
$anwendung_datenexport = "../ITGruppe05/speicherstände/model_start";
$jsonfiles = array();
$zip = new ZipArchive;
$path = $anwendung_datenexport . "/" . $_GET["id"];
if ($zip->open($path) === TRUE) {
$zip->extractTo($anwendung_datenexport);
$zip->close();
} else {
echo "Fehler";
}
if (is_dir($anwendung_datenexport)) {
// öffnen des Verzeichnisses
if ($handle = opendir($anwendung_datenexport)) {
// einlesen der Verzeichnisses
while (($jsonfile = readdir($handle)) !== false) {
$ext = pathinfo($jsonfile, PATHINFO_EXTENSION);
if ($ext == "json") {
array_push($jsonfiles, $jsonfile);
}
}
closedir($handle);
}
}
$enumerationen=array();
$klassen=array();
$dbh = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
$sql = "SHOW TABLES";
$tabellen = $dbh->query($sql);
foreach ($tabellen as $tabelle) {
$tabelleName = $tabelle[0];
$sql = "select id,c_ts,m_ts,literal,sort from `" . $tabelleName . "`";
if (!isset($value)){
$sql2 = $sql2 . "null,";
}else {
$sql2 = $sql2 . "'$value',";
}
$sql2 = "SHOW COLUMNS FROM`" . $tabelleName . "`";
$sth = $dbh->prepare($sql);
$sth2 = $dbh->prepare($sql2);
$sth->execute();
$sth2->execute();
//bewirkt, dass nur ein assoziatives Array erzeugt wird und nicht sowohl als auch, was es zum Schluss schwieriger zum Auslesen macht.
$result = $sth->fetchAll(PDO::FETCH_CLASS);
$result2 = $sth2->fetchAll(PDO::FETCH_CLASS);
if(count($result)>0){
array_push($enumerationen,$tabelleName);
}else{ 
foreach($result2 as $klasse){
$klassen[strtolower($tabelleName)][$klasse->Field]="";
}
$sql = "DELETE FROM `" . $tabelleName . "`";
$sth3 = $dbh->prepare($sql);
$sth3->execute();
}
}
foreach ($jsonfiles as $jsonfile) {
$jsoninhalt = file_get_contents("$anwendung_datenexport/$jsonfile");
$zeilen = json_decode($jsoninhalt, true);
$jsonname = pathinfo($jsonfile, PATHINFO_FILENAME);
$ist_enumeration=0;
foreach ($enumerationen as $enumeration) {
if($jsonname==$enumeration){
$ist_enumeration=1;
}
}
//sorgt dafür dass nur Klassen eingefügt werden, Enumerationen etc. befinden sich bereits in der Datenbank
$sql_delete = "DELETE FROM `" . $jsonname . "`";
$sth_delete = $dbh->prepare($sql_delete);
$sth_delete->execute();
foreach ($zeilen as $zeile) {
$sql = "insert ignore into `" . $jsonname . "` (";
$sql1 = null;
$sql2 = null;
foreach ($zeile as $feld => $value) {
if (isset($klassen[$jsonname][$feld]) or $ist_enumeration == 1) {
$sql1 = $sql1 . "`$feld`,";
if (!isset($value)){
$sql2 = $sql2 . "null,";
}else {
$sql2 = $sql2 . "'$value',";
}
}else{
if (isset($datenimport_fehler[$jsonname])) {
foreach ($datenimport_fehler as $item) {
foreach ($item['attribut'] as $msg){
if ($msg == $feld) {
$vorhanden = true;
break;
} else {
$vorhanden = false;
}
}
}
if (!$vorhanden) {
$datenimport_fehler[$jsonname]["klasse"] = $jsonname;
$datenimport_fehler[$jsonname]['attribut'][$x] = $feld;
$x++;
}
}else{
$datenimport_fehler[$jsonname]["klasse"] = $jsonname;
$datenimport_fehler[$jsonname]['attribut'][$x] = $feld;
$x++;
}
}
}
$sql1 = substr($sql1, 0, -1);
$sql2 = substr($sql2, 0, -1);
$sql = $sql . $sql1 . ") values (" . $sql2 . ");";
$import = $dbh->prepare($sql);
$import->execute();
}
unlink($anwendung_datenexport."/".$jsonfile);
}
}
foreach ($datenimport_fehler as $fehler){
foreach ($fehler['attribut'] as $msg){
Core::addError("Das Feld ".$msg." in der Klasse ".$fehler['klasse']." ist nicht mehr  vorhanden");
}
}
require "controller.speicherstande_overview.php";
