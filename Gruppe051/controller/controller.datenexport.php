<?php
Core::checkAccessLevel(1);
require "includes/config.php";
$dest = "../Gruppe051/speicherstände/model_start";
//löscht alle existenten Export-Jsons 
array_map("unlink", glob("$dest/*.json"));
//try daher, da es sein könnte, dass die DB bisher noch nicht existiert hat.
try {
//man braucht eine direkte Verbindung
$dbh = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
$sql = "SHOW TABLES";
$tabellen = $dbh->query($sql);
foreach ($tabellen as $tabelle) {
$tabelleName = $tabelle[0];
$sql = "select * from `" . $tabelleName . "`";
$sth = $dbh->prepare($sql);
$sth->execute();
//bewirkt, dass nur ein assoziatives Array erzeugt wird und nicht sowohl als auch, was es zum Schluss schwieriger zum Auslesen macht.
$result = $sth->fetchAll(PDO::FETCH_CLASS);
$jsonresult = json_encode($result,JSON_UNESCAPED_UNICODE);
$handle = fopen("$dest/$tabelleName" . ".json", "w");
fwrite($handle, $jsonresult);
fclose($handle);
}
} catch (PDOException $e) {
echo "Da die Datenbank bisher nicht existiert hat, konnten keine Daten exportiert werden.";
}
if(isset($_POST["file_name"])){
if($_POST["file_name"]==""){
$zipname= "Stand";
}else{
$zipname= $_POST["file_name"];
}
}
$zip = new ZipArchive();
$date = new DateTime();
$timestamp= $date->getTimestamp();
$datum = date("d.m.Y_H-i-s", $timestamp);
$zipname_gesamt=$zipname."_".$datum.".zip";
$ret = $zip->open($zipname_gesamt, ZipArchive::CREATE | ZipArchive::OVERWRITE);
if ($ret !== TRUE) {
printf("Failed with code %d", $ret);
} else {
$directory = realpath("../Gruppe051/speicherstände/model_start");
$options = array("remove_path" => $directory);
$zip->addPattern("/\.(?:json)$/", $directory, $options);
$zip->close();
}
rename($zipname_gesamt, "../Gruppe051/speicherstände/model_start/".$zipname_gesamt);
//löscht alle existenten Export-Jsons 
array_map("unlink", glob("../Gruppe051/speicherstände/model_start/*.json"));
require "controller.speicherstande_overview.php";
