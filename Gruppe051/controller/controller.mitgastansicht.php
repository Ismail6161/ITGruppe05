<?php
Core::$title = "Mitgast";
$Mitgast= Mitgast::findAll();
Core::publish($Mitgast, "mitgast");


Core::setView("mitgastansicht", "view2", "list");
Core::setView("suche", "view1", "list");
Core::$title = "Mitgast";
$Kunde = new Mitgast;
    $Kunde->loadFormData();
if(count($_POST)){
    
    $suchbegriff= filter_input(INPUT_POST, "search");
    $Mitgast= Mitgast::search($suchbegriff);
}else{
    $Mitgast= Mitgast::findAll();

}
Core::publish($Mitgast, "mitgast");

