<?php

$user = new User;
if (Core::$user->id==""){
    Core::redirect("login", ["message"=>"Herzlich Willkommen"]);
}else {
    Core::$title = "Home";
    require 'controller.favoriten_overview.php';
    require 'controller.protokoll_overview.php';
}