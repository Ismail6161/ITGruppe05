<?php

Core::$title="Neu: Bestellung";
Core::setView("Bestellung", "view1", "new");
Core::setViewScheme("view1", "new", "Bestellung");
$Position=new Position();
Position::$activeViewport="new";
Position::renderScript("new","form_Position");

if(count($_POST)>0){
$a= $Position->loadFormData();
if($a===true){
if($Position->create()!="0"){
Core::addMessage("Bestellposition wurde erfolgreich hinzugefügt.");


$Position=new Position();
Core::$view->path["view1"]="views/view.Bestellung.php";
}else{
Core::addError("Der Datenbankeintrag war nicht erfolgreich"); 
}
}else{
Core::addError("Die Eingegebenen Daten waren nicht korrekt");
}
}



Speise::$settings["identifier"]="Bezeichnung";
$_Speise = Speise::findAll(Speise::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_Speise, "_Speise");


Reservierung::$settings["identifier"]="Datum";
$_Reservierung = Reservierung::findAll(Reservierung::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_Reservierung, "_Reservierung");


Core::publish($Position, "Position");
