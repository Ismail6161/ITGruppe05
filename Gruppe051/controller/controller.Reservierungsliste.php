<?php
Core::checkAccessLevel(1);
Core::$title = "Reservierungen";
$Reservierung= Reservierung::findAll();
Core::publish($Reservierung, "Reservierung");


Core::setView("Reservierungsliste", "view2", "list");

Core::$title = "Reservierungen";
$Kunde = new Reservierung;
    $Kunde->loadFormData();
if(count($_POST)){
    
    $suchbegriff= filter_input(INPUT_POST, "search");
    $Reservierung= Reservierung::search($suchbegriff);
}else{
    $Reservierung= Reservierung::findAll();

}
Core::publish($Reservierung, "Reservierung");