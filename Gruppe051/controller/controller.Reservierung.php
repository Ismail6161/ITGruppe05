<?php
Core::$title = "Reservierung";
$Reservierung = new Reservierung();
Core::setView("Reservierung", "view2", "new");
if (count($_POST) > 0) {
    $Reservierung->loadFormData();
    $result = $Reservierung->create();
    Core::addMessage("Erfolgreich Reserviert");
    // $artikel->loadDBData($id); // loadDBData l�dt den Datenstz mit der ID ins Objekt
    $msg="Reservierung am (".$Reservierung->Datum.") ".$Reservierung->Uhrzeit. " wurde erfolgreich angelegt";
    core::redirect("mitgast",["message"=>$msg]); // Hier erfolgt break und Umleitung
   // Core::publiirect("artikesh($artikelliste, "artikelliste");
    }
Core::publish($Reservierung, "Reservierung");
