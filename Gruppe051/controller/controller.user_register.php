<?php

Core::setView("user", "view1", "new");
Core::$title = "Benutzerkonto erstellen";
$user = new user;
if (count($_POST) > 0) {
    $user->loadFormData();
    $already_user = $user->alreadyUser();
    if (!$already_user) {
        if ($user->Gruppe == null) {
            $user->Gruppe = 1;
        }
        $result = $user->create();
        if ($result) {
            $gruppe = new gruppet;
            $gruppe->loadDBData($user->Gruppe);
            $Gruppenname = $gruppe->literal;
            if (class_exists($Gruppenname) && $Gruppenname != "user" && $Gruppenname != "User") {

                $enumerationen = $user->enumerationen();
                foreach ($enumerationen as $key => $enum) {
                    Core::publish($enum, $key);
                }

                $Profil = new $Gruppenname();
                $Profil->_User_uid = $result;
                Core::publish($Profil, $Gruppenname);
                Core::setView($Gruppenname . "_new", "view1", "new");
                $Profil::renderScript("new", "form_$Gruppenname");
                Core::addMessage("Sie müssen erst noch Ihre Profildaten pflegen, bevor Sie Sie sich anmelden können");
            } else {
                Core::redirect("login", ["message" => "Benutzerregistireirung erfolgreich. Sie können sich jetzt anmelden"]);
            }
        } else {
            Core::addError("Es ist ein Fehler beim Speichern aufgetreten");
        }
    }else{
        $user = new user;
        $gruppe = new gruppet;
        $gruppenliste = $gruppe->findAll();
        Core::publish($gruppenliste, "Gruppe");
        Core::publish($user, "user");
        User::renderScript("new", "form_user");
    }
} else {
    $gruppe = new gruppet;
    $gruppenliste = $gruppe->findAll();
    Core::publish($user, "user");
    Core::publish($gruppenliste, "Gruppe");
    User::renderScript("new", "form_user");
}