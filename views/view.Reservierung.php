Nach der Reservierung gelangen Sie direkt zur Speisekarte.
<?php $Reservierung = Core::import("Reservierung");
?>
<form id="form_Reservierung" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Reservierung->renderLabel("Datum");$Reservierung->render("Datum");
$Reservierung->renderLabel("Uhrzeit");$Reservierung->render("Uhrzeit");
$Reservierung->renderLabel("Coronadaten_Vorname");$Reservierung->render("Coronadaten_Vorname");
$Reservierung->renderLabel("Coronadaten_Nachname");$Reservierung->render("Coronadaten_Nachname");
$Reservierung->renderLabel("Coronadaten_Wohnort");$Reservierung->render("Coronadaten_Wohnort");
$Reservierung->renderLabel("Coronadaten_Plz");$Reservierung->render("Coronadaten_Plz");
$Reservierung->renderLabel("Coronadaten_Stra�e");$Reservierung->render("Coronadaten_Stra�e");
$Reservierung->renderLabel("Coronadaten_HNr");$Reservierung->render("Coronadaten_HNr");
$Reservierung->renderLabel("Coronadaten_Telefonnummer");$Reservierung->render("Coronadaten_Telefonnummer");
?>

<label for="speichern"></label><button type="submit" name="speichern" id="speichern" value="1" >Reservieren</button>
</div>
</form>