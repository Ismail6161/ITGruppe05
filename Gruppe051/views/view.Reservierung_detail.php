<?php $Reservierungdetail = Core::import("Reservierungdetail");
    ?>
<a href="?task=Reservierungsliste" class="ui-btn ui-icon-back ui-btn-icon-notext ui-corner-all" align="right">No text</a>

<form id="form_Reservierungdetail" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Reservierungdetail->renderLabel("Datum");$Reservierungdetail->render("Datum"); 
$Reservierungdetail->renderLabel("Uhrzeit");$Reservierungdetail->render("Uhrzeit");
$Reservierungdetail->renderLabel("Coronadaten_Vorname");$Reservierungdetail->render("Coronadaten_Vorname");
$Reservierungdetail->renderLabel("Coronadaten_Nachname");$Reservierungdetail->render("Coronadaten_Nachname");
$Reservierungdetail->renderLabel("Coronadaten_Wohnort");$Reservierungdetail->render("Coronadaten_Wohnort");
$Reservierungdetail->renderLabel("Coronadaten_Plz");$Reservierungdetail->render("Coronadaten_Plz");
$Reservierungdetail->renderLabel("Coronadaten_Straße");$Reservierungdetail->render("Coronadaten_Straße");
$Reservierungdetail->renderLabel("Coronadaten_HNr");$Reservierungdetail->render("Coronadaten_HNr");
$Reservierungdetail->renderLabel("Coronadaten_Telefonnummer");$Reservierungdetail->render("Coronadaten_Telefonnummer");

?>
<label for="update">speichern:</label><button type="submit" name="update" id="update" value="1" >update</button>
</div>
</form>
