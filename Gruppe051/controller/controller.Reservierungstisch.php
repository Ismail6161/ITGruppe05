<?php
Core::setView("Reservierungstisch", "view1", "edit");
Core::$title = "Artikeldaten ändern";
$Bestellung = new Reservierung;
$Bestellung->loadDBData($_GET['id']);
if (count($_POST) > 0) {
    $Bestellung->loadFormData();
    $result=$Bestellung->update();
    
    if($result){
        Core::addMessage("Daten erfolgreich gespeichert");
    }else{
        Core::addError("Es ist ein Fehler beim Speichern aufgetreten");
    }
}
 



Core::publish($Bestellung, "Bestellung");