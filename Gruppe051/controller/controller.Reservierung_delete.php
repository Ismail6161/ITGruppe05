<?php
Core::checkAccessLevel(1);
if(isset($_GET['id'])){
$result=Reservierung::delete(filter_input(INPUT_GET, "id"));
if($result){
Core::redirect("Reservierungsliste", ["message"=>"Stornierung erfolgreich"]);
}else{
Core::addError("Stornierung nicht mehr möglich");
}
}else{
Core::addError("Stornierung nicht mehr möglich");
}
core::redirect("Reservierungsliste");
