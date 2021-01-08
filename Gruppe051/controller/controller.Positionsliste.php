<?php
Core::checkAccessLevel(1);
Core::$title="Übersicht ihrer Bestellungen";
Core::setView("Positionsliste", "view1", "list");
Core::setViewScheme("view1", "list", "Position");
$Position_list=[];
$Position=new Position();
Position::$activeViewport="list";
$Position_list=Position::findAll();

Core::publish($Position_list, "Position_list");
Core::publish($Position, "Position");

