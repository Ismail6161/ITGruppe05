<?php
Core::setView("Reservierung_B", "view1", "list");
Core::$title = "Bestellung ändern";
$Reservierung = new Position;
$Reservierung->loadDBData($_GET['id']);
if (count($_POST) > 0) {
    $Reservierung->loadFormData();
    
    
    if($result){
        Core::addMessage("Daten erfolgreich gespeichert");
    }else{
        Core::addError("Es ist ein Fehler beim Speichern aufgetreten");
    }
}
Core::publish($Reservierung, "Reservierung");