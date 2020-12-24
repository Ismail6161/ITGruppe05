<?php
$filearray=Core::$view->file_array;
$Favoriten=new Favoriten();
$icon=$Favoriten->find_task("speicherstande",$_SESSION['uid']);
if ($icon =="plus"){
$hover = "hinzufügen";
}else{
$hover = "entfernen";
}
?>
<div data-role="ui-bar ui-bar-a">
<h1>Speicherstände
<div class="tooltip_hs">
<a href="?task=favoriten&db_task=speicherstande&icon=<?=$icon?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-<?=$icon?> ui-btn-icon-notext ui-corner-all ui-btn-inline">show</a>
<span style="font-size: 15px" class="tooltiptext">Favorit <?=$hover?></span>
</div>
</h1>
</div>
<form id="form_registrieren" method="post" action="?task=datenexport" data-ajax="false">
<input  name="file_name" id="file_name" placeholder="Filename" value="" />
<button class="ui-btn ui-btn-b ui-icon-plus ui-btn-icon-left" type="submit" name="save" id="update" value="1" >Daten exportieren</button>
<input id="filterTable-input" data-type="search"/>
</form>
<table data-role="table" id="tbl_speicherstande" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
<thead>
<tr>
<th>Name</th>
<th>Datum</th>
<th>Importieren</th>
<th>Umbenennen</th>
<th></th>
<th>Löschen</th>
</tr>
</thead>
<tbody>
<?php 
foreach($filearray as $klasse){   
?>
<tr>
<td><?php echo $klasse[0] ?></td>
<td><?php echo $klasse[1] ?></td>
<td>
<a href="?task=datenimport&id=<?=$klasse[2]?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-recycle ui-btn-icon-notext ui-corner-all ui-btn-inline">show</a>
</td>
<td>
<form id="speicherstand_edit" method="post" action="?task=speicherstand_edit&id=<?=$klasse[2]?>" data-ajax="false">
<input id="file_name_edit" name="file_name_edit" value="" />
</td>
<td>
<button class="ui-btn ui-icon-edit ui-btn-icon-notext ui-corner-all ui-btn-inline" type="submit" name="save" id="update" value="1" >show</button>
</form>
</td>
<td>
<a href="?task=speicherstand_delete&id=<?=$klasse[2]?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all ui-btn-inline">show</a>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
<br>
<div data-role="footer">
<h4>Powered by Hochschule Pforzheim</h4>
</div>
