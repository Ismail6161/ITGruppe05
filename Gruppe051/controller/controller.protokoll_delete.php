<?php
Core::checkAccessLevel(1);
if(isset($_GET['id'])){
    $db = Core::$pdo;
    $SQL = "DELETE FROM Aktivitätenprotokoll WHERE id=? AND User_uid=?";
    $stmt = $db->prepare($SQL);
    $result = $stmt->execute([$_GET['id'],$_SESSION['uid']]);
    if($result){
        Core::redirect("home", ["message"=>"Löschvorgang erfolgreich"]);
    }else{
        Core::addError("Der Datensatz konnte nicht gelöscht werden");
    }
}elseif(isset($_GET['all'])){
    $db = Core::$pdo;
    $SQL = "DELETE FROM Aktivitätenprotokoll WHERE User_uid=?";
    $stmt = $db->prepare($SQL);
    $result = $stmt->execute([$_SESSION['uid']]);
    if($result){
        Core::redirect("home", ["message"=>"Löschvorgang erfolgreich"]);
    }else{
        Core::addError("Der Datensatz konnte nicht gelöscht werden");
    }
}
else{
    Core::addError("Der Datensatz konnte nicht gelöscht werden");
}
