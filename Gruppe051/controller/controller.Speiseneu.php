<?php

Core::$title = "Neue Speise";
$Speise = new Speise;
if (count($_POST) > 0) {
    Core::setView("Speise", "view1", "detail"); //artikelansicht
    $Speise->loadFormData();
    $id = $Speise->create();
    if($_FILES['Bild']['name']!=""){
         $Speise->updateFile("Bild");
    }
    // $artikel->loadDBData($id); // loadDBData lädt den Datenstz mit der ID ins Objekt
    $msg="Speise (".$Speise->Speisenummer.") ".$Speise->Bezeichnung. " wurde erfolgreich angelegt";
    core::redirect("Speisen",["message"=>$msg]); // Hier erfolgt break und Umleitung
   // Core::publiirect("artikesh($artikelliste, "artikelliste");
    $Speise->loadDBData($id); // loadDBData lädt den Datenstz mit der ID ins Objekt
} else {
    Core::setView("Speiseneu", "view1", "new");
}
Core::publish($Speise, "Speise");
