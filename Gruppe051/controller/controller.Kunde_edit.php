<?php
Core::checkAccessLevel(1);
Core::$title="Edit: Kunde";
$id=$_GET["id"];
Core::setView("Kunde_edit", "view1", "edit");
Core::setViewScheme("view1", "edit", "Kunde");
$Kunde=new Kunde();
Kunde::$activeViewport="edit";
$Kunde_list = Kunde::findAll();
Core::publish($Kunde_list, "Kunde_list");
Kunde::renderScript("edit","form_Kunde");
$Kunde->loadDBData($id);
if(count($_POST)>0){
$a= $Kunde->loadFormData();
if($a===true){
if($Kunde->update()!="0"){
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
default:;
$ordner="files/";;
};
$pfad = $Kunde_field["sysParent"] . "_path"; // path wird nirgends ausgelesen sondern jetzt einfach mal so definiert
$Kunde->updateFile($filekey, ["pathDB" => $pfad, "path"=>$ordner]);
break;
default:
}
}
}
core::redirect("Kunde_detail&id=$id");
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
$_User_uid = User::findAll();
Core::publish($_User_uid, "_User_uid");
Core::publish($Kunde, "Kunde");
//Enumerationen
