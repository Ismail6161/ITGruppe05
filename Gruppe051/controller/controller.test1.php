<?php

Core::$title = "Artikelliste";
$artikelliste=Speise::findAll();
Core::publish($artikelliste, "artikelliste");

Core::setView("test1", "view2", "list");
Core::setView("suche", "view1", "list");
Core::$title = "Artikelliste";
$artikel = new Speise;
if(count($_POST)){
    $suchbegriff= filter_input(INPUT_POST, "search");
    $artikelliste=Artikel::search($suchbegriff);
}else{
    $artikelliste=Speise::findAll();
}
Core::publish($artikelliste, "artikelliste");