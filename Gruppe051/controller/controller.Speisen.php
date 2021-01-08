<?php
Core::$title = "Speisekarte";
$Speisekarte= Speise::findAll();
Core::publish($Speisekarte, "Speisekarte");

Core::setView("Speisen", "view2", "list");
Core::$title = "Speisekarte";
$Speise = new Speise;
if(count($_POST)){
    $suchbegriff= filter_input(INPUT_POST, "search");
    $Speisekarte= Speise::search($suchbegriff);
}else{
    $Speisekarte= Speise::findAll();
}
Core::publish($Speisekarte, "Speisekarte");
