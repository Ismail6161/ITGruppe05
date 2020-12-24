<?php
Core::checkAccessLevel(1);
Core::$title="Neu: Kunde";
Core::setView("Kunde_new", "view1", "new");
Core::setViewScheme("view1", "new", "Kunde");
$Kunde=new Kunde();
Kunde::$activeViewport="new";
Kunde::renderScript("new","form_Kunde");
if(count($_POST)>0){
$a= $Kunde->loadFormData();
if($a===true){
if($Kunde->create()!="0"){
foreach($_FILES as $filekey => $file){
if($file["name"]!=""){
$Kunde_field =Kunde::$dataScheme[$filekey];
switch ($Kunde_field["type"]){
case "picture":
$Kunde->updateFile($filekey);
break;
case "file": // Hier müsste noch zwischen Bildern und  Dokumenten unterschieden werden
$parentField=Kunde::$dataScheme[$Kunde_field["sysParent"]];
$filetype=$parentField["type"];
switch($filetype){
case "pictureT":
$ordner="images/";
break;
case "fileT":
$ordner="files/";
break;
default:
$ordner="files/";
}
$pfad = $Kunde_field["sysParent"] . "_path"; // path wird nirgends ausgelesen sondern jetzt einfach mal so definiert
$Kunde->updateFile($filekey, ["pathDB" => $pfad, "path"=>$ordner]);
break;
default:
}
}
}
$Kunde=new Kunde();
Core::$view->path["view1"]="views/view.Kunde_new.php";
}else{
Core::addError("Der Datenbankeintrag war nicht erfolgreich"); 
}
}else{
Core::addError("Die Eingegebenen Daten waren nicht korrekt");
}
if (isset($_GET['task_source'])) {
if ($_GET['task_source'] == "login" or $_GET['task_source'] == "user_register") {
core::redirect("login");
}
}
}
$_User_uid = User::findAll(User::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_User_uid, "_User_uid");
Core::publish($Kunde, "Kunde");
//Enumerationen
