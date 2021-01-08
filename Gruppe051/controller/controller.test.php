<?php
Core::$title = "Neuer Artikel";
$artikel = new Speise;
if (count($_POST) > 0) {
    Core::setView("test", "view1", "detail");
    $artikel->loadFormData();
    $id = $artikel->create();
    if($_FILES['Bild']['name']!=""){
         $artikel->updateFile("Bild");
    }
    // $artikel->loadDBData($id); // loadDBData lädt den Datenstz mit der ID ins Objekt
    $msg="Artikel (".$artikel->Artikelnummer.") ".$artikel->Bezeichnung. " wurde erfolgreich angelegt";
    core::redirect("test1",["message"=>$msg]); // Hier erfolgt break und Umleitung
   // Core::publiirect("artikesh($artikelliste, "artikelliste");
    $artikel->loadDBData($id); // loadDBData lädt den Datenstz mit der ID ins Objekt
} else {
    Core::setView("test", "view1", "new");
}
Core::publish($artikel, "artikel");

