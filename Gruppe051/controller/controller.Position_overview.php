<?php
Core::checkAccessLevel(1);
Core::$title="Übersicht: Position";
Core::setView("Position_overview", "view1", "list");
Core::setViewScheme("view1", "list", "Position");
$Position_list=[];
$Position=new Position();
Position::$activeViewport="list";
if(count($_POST)>0 && $_GET['task']!="favoriten"){
$Position_list=$Position->search(filter_input(INPUT_POST, "search"));
}else{
$Position_list=Position::findAll();
}
Core::publish($Position_list, "Position_list");
Core::publish($Position, "Position");
//Enumerationen
