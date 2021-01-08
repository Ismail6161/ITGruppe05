<?php


$Kunde = Core::$view->Kunde;
if ($_GET['task'] == "login" or $_GET['task'] == "user_register"){
$task_source = $_GET['task'];
$task = "home";
}else{
$task_source = "Kunde_new";
$task = "Kunde";
}

?>
<a href="?task=<?=$task?>" class="ui-btn ui-icon-back ui-btn-icon-notext ui-corner-all" align="right">No text</a>

<form id="form_Kunde" method="post" action="?task=Kunde_new&task_source=<?=$task_source?>" data-ajax="false" enctype="<?=$Kunde::$enctype?>">
<div class="ui-field-contain">
<?php
$Kunde = Core::$view->Kunde;
$Kunde->renderLabel("id");
$Kunde->render("id");
$Kunde->renderLabel("c_ts");
$Kunde->render("c_ts");
$Kunde->renderLabel("m_ts");
$Kunde->render("m_ts");
$Kunde->renderLabel("Kundennummer");
$Kunde->render("Kundennummer");
$Kunde->renderLabel("EMail");
$Kunde->render("EMail");
$Kunde->renderLabel("_User_uid");
$Kunde->render("_User_uid");
?>
<label for="update">speichern:</label><button type="submit" onclick="BezHinweis()" name="update" id="update" value="1" >speichern</button>
</div>
</form>
<script>
</script>
