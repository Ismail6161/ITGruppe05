<?php
Core::setView("Reservierung_detail", "view1", "edit");
Core::$title = "Reservierdaten ändern";
$Reservierungdetail = new Reservierung;
$Reservierungdetail->loadDBData($_GET['id']);
if (count($_POST) > 0) {
    $Reservierungdetail->loadFormData();
    $result=$Reservierungdetail->update();
    
    if($result){
        Core::addMessage("Daten erfolgreich gespeichert");
    }else{
        Core::addError("Es ist ein Fehler beim Speichern aufgetreten");
    }
}

Core::publish($Reservierungdetail, "Reservierungdetail");

