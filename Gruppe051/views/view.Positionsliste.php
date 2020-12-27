<?php
$Position_list=Core::$view->Position_list;
$Position=Core::$view->Position;
$Favoriten=new Favoriten();
$icon=$Favoriten->find_task("Position",$_SESSION['uid']);
if ($icon =="plus"){
$hover = "hinzufügen";
}else{
$hover = "entfernen";
}
?>
<div data-role="ui-bar ui-bar-a">
<h1>Übersicht ihrer Bestellungen
<div class="tooltip_hs">
<a href="?task=favoriten&db_task=Position&icon=<?=$icon?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-<?=$icon?> ui-btn-icon-notext ui-corner-all ui-btn-inline">show</a>
<span style="font-size: 15px" class="tooltiptext">Favorit <?=$hover?></span>
</div>
</h1>
</div>
<form>
<input id="filterTable-input" data-type="search">
</form>
<table data-role="table" id="tbl_Position" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
<thead>
<tr>

<th><?php $Position->renderHeader("Anzahl"); ?></th>
<th><?php $Position->renderHeader("_Speise"); ?></th>
<th><?php $Position->renderHeader("_Reservierung"); ?></th>
<th><?php $Position->renderHeader("Gesamtpreis"); ?></th>
<th></th>
</tr>
</thead>
<tbody>
<?php foreach($Position_list as $klasse){
?>
<tr>

<td><?php $klasse->render("Anzahl"); ?></td>
<td><?php $klasse->render("_Speise"); ?></td>
<td><?php $klasse->render("_Reservierung"); ?></td>
<td><?php $klasse->render("Gesamtpreis"); ?></td>

<td>
<a href="?task=Position_detail&id=<?=$klasse->id?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-pencil ui-btn-icon-notext ui-corner-all ui-btn-inline">edit</a>
<a href="?task=Position_delete&id=<?=$klasse->id?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all ui-btn-inline" onclick="return confirm("Soll der Datensatz mit der ID: <?=$Klasse->id." wirklich gelöscht werden?"?>")">delete</a>
</td>
</tr>
<?php
        }
        ?>
</tbody>
</table>
<a href="?task=Bestellung" class="ui-btn ui-btn-b ui-icon-plus ui-btn-icon-left" data-ajax="false">Neuanlegen</a><br>
<br>
<div data-role="footer">
<h4>Powered by Hochschule Pforzheim</h4>
</div>
