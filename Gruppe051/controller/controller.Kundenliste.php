<?php
Core::$title = "Kundenliste";
$Kundenliste= Kunde::findAll();
Core::publish($Kundenliste, "Kundenliste");

Core::setView("Kundenliste", "view2", "list");

Core::$title = "Kundenliste";
$Kunde = new Kunde;
    $Kunde->loadFormData();
if(count($_POST)){
    
    
    $Kundenliste= Kunde::search($suchbegriff);
}else{
    $Kundenliste= Kunde::findAll();

}
Core::publish($Kundenliste, "Kundenliste");
