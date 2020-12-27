<?php

if(isset($_GET['id'])){
$result=Position::delete(filter_input(INPUT_GET, "id"));
if($result){
Core::redirect("Position", ["message"=>"Löschvorgang erfolgreich"]);
}else{
Core::addError("Der Datensatz konnte nicht gelöscht werden");
}
}else{
Core::addError("Der Datensatz konnte nicht gelöscht werden");
}
core::redirect("Positionsliste");