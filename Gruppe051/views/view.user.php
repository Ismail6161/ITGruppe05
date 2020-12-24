<?php $user = Core::import("user");
    /* @var $user user */ ?>
<form id="form_user" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$user->renderLabel("id");$user->render("id"); // wird standardmäßig immer ausgeblendet
$user->renderLabel("Kennung");$user->render("Kennung");
$user->renderLabel("Passwort");$user->render("Passwort");
$user->renderLabel("Gruppe");$user->render("Gruppe");
$user->renderLabel("roleid");$user->render("roleid");
$user->renderLabel("c_ts");$user->render("c_ts");
$user->renderLabel("m_ts");$user->render("m_ts");
?>
<label for="speichern">speichern:</label><button data-ajax="false" type="submit" name="speichern" id="speichern" value="1" >speichern</button>
</div>
</form>