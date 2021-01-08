<?php $Bestellungdetail = Core::import("Bestellungdetail");
    ?>
<a href="?task=Positionsliste" class="ui-btn ui-icon-back ui-btn-icon-notext ui-corner-all" align="right">No text</a>

<form id="form_Bestellungdetail" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Bestellungdetail->renderLabel("Anzahl");$Bestellungdetail->render("Anzahl"); 
$Bestellungdetail->renderLabel("_Speise");$Bestellungdetail->render("_Speise");
$Bestellungdetail->renderLabel("_Reservierung");$Bestellungdetail->render("_Reservierung");

?>
<label for="update">speichern:</label><button type="submit" name="update" id="update" value="1" >update</button>
</div>
</form>