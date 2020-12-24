<?php
Core::setView("Position_detail", "view1", "edit");
Core::$title = "Artikeldaten ändern";
$artikel = new Position;
if (count($_POST) > 0) {
    $artikel->loadFormData();
    $result=$artikel->update();
    if ($_FILES['bild']['name'] != "") {
        $artikel->updateFile("bild");
    }
    if($result){
        Core::addMessage("Daten erfolgreich gespeichert");
    }else{
        Core::addError("Es ist ein Fehler beim Speichern aufgetreten");
    }
}
$artikel->loadDBData($_GET['id']); // loadDBData lädt den Datenstz mit der ID ins Objekt


Speise::$settings["identifier"]="Bezeichnung";
$_Speise = Speise::findAll(Speise::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_Speise, "_Speise");


Reservierung::$settings["identifier"]="Datum";
$_Reservierung = Reservierung::findAll(Reservierung::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_Reservierung, "_Reservierung");

Core::publish($artikel, "artikel");