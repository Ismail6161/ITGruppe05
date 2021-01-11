<?php

Core::$title = "Neue Speise";
$Speise = new Speise;
if (count($_POST) > 0) {
    Core::setView("Speise", "view1", "detail"); 
    $Speise->loadFormData();
    $id = $Speise->create();
    if($_FILES['Bild']['name']!=""){
         $Speise->updateFile("Bild");
    }
    
    $msg="Speise (".$Speise->Speisenummer.") ".$Speise->Bezeichnung. " wurde erfolgreich angelegt";
    core::redirect("Speisen",["message"=>$msg]); 
   
    $Speise->loadDBData($id); 
} else {
    Core::setView("Speiseneu", "view1", "new");
}
Core::publish($Speise, "Speise");
