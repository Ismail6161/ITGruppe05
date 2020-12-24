<?php
$Kunde = Core::$view->Kunde;
$Kunde_list = Core::$view->Kunde_list ;
if (isset($_GET['task_source'])){
$task_source = $_GET['task_source'];
}else{
$task_source = "Kunde";
}
if ($_GET['task'] == "user_edit"){
$task_source = "user_edit";
}
if ($task_source!="user_edit"){
$Favoriten=new Favoriten();
$icon=$Favoriten->find_task("Kunde_edit",$_SESSION['uid']);
if ($icon =="plus"){
$hover = "hinzufügen";
}else{
$hover = "entfernen";
}
?>
<a href="?task=<?=$task_source?>&id=<?=$Kunde->id?>" data-ajax="false" class="ui-btn ui-icon-back ui-btn-icon-notext ui-corner-all" align="right">No text</a>
<div class="tooltip_hs">
<a href="?task=favoriten&db_task=Kunde_edit&icon=<?=$icon?>&id=<?=$Kunde->id?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-<?=$icon?> ui-btn-icon-notext ui-corner-all ui-btn-inline">show</a>
<span style="font-size: 15px" class="tooltiptext">Favorit <?=$hover?></span>
</div>
<?php
}
?>
<form id="form_Kunde" method="post" action="?task=Kunde_edit&id=<?=$Kunde->id?>&task_source=<?=$task_source?>" data-ajax="false" enctype="<?=$Kunde::$enctype?>">
<div class="ui-field-contain">
<?php
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
<label for="update">speichern:</label><button type="submit" name="update" id="update" value="1" >update</button>
</div>
</form>
