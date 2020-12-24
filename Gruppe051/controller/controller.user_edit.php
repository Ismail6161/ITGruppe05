<?php
Core::setView("user", "view1", "edit");
Core::$title = "Profildaten ändern";
$user = new user;
if (count($_POST) > 0) {
    $user->loadFormData();
    $result=$user->updatePassword();
    if($result){
        Core::redirect("home",["message"=>"Daten erfolgreich gespeichert"]);
    }else{
        Core::addError("Es ist ein Fehler beim Speichern aufgetreten");
    }
}else{
    


Core::publish(Core::$user, "user");
$gruppe=new GruppeT();
$gruppe->loadDBData(Core::$user->Gruppe);
if(class_exists($gruppe->literal)&& $gruppe->literal!="user" && $gruppe->literal!="User"){

    $enumerationen = $user->enumerationen();
    foreach ($enumerationen as $key => $enum) {
        Core::publish($enum, $key);
    }
    
     Core::setView($gruppe->literal."_edit", "view2", "edit");
     
     $roleProfile=new $gruppe->literal();
     $roleProfile->loadDBData(Core::$user->roleid);
     Core::publish($roleProfile, $gruppe->literal);
     $roleProfile::renderScript("edit","form_".$gruppe->literal);
}
/*
$gruppe_list = gruppet::findAll();
Core::publish($gruppe_list, 'gruppe');
 * */
 
User::renderScript("edit","form_user");
}