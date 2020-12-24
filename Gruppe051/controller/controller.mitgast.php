<?php
Core::$title = "Mitgast";
$Mitgast = new Mitgast();
Core::setView("Mitgast", "view2", "new");
if (count($_POST) > 0) {
    $Mitgast->loadFormData();
    $result = $Mitgast->create();
    Core::addMessage("Erfolgreich eingetragen");
    // $artikel->loadDBData($id); // loadDBData l�dt den Datenstz mit der ID ins Objekt
    $msg= $Mitgast->Vorname." ".$Mitgast->Nachname. " wurde erfolgreich angelegt";
    core::redirect("mitgast",["message"=>$msg]); 
    //core::redirect("Speisen");
    }

   Reservierung::$settings["identifier"]="Datum";
$_Reservierung = Reservierung::findAll(Reservierung::SQL_SELECT_IGNORE_DERIVED);
Core::publish($_Reservierung, "_Reservierung");

    Core::publish($Mitgast, "Mitgast");
