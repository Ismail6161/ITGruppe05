<?php
Core::setView("Position_detail", "view1", "edit");
Core::$title = "Bestellung ändern";
$Bestellungdetail = new Position;
$Bestellungdetail->loadDBData($_GET['id']);
if (count($_POST) > 0) {
    $Bestellungdetail->loadFormData();
    $result=$Bestellungdetail->update();
    
    if($result){
        Core::addMessage("Daten erfolgreich gespeichert");
    }else{
        Core::addError("Es ist ein Fehler beim Speichern aufgetreten");
    }
}
 // loadDBData lädt den Datenstz mit der ID ins Objekt


Speise::$settings["identifier"]="Bezeichnung";
$_Speise = Speise::findAll(Speise::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_Speise, "_Speise");


Reservierung::$settings["identifier"]="Datum";
$_Reservierung = Reservierung::findAll(Reservierung::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_Reservierung, "_Reservierung");

Core::publish($Bestellungdetail, "Bestellungdetail");