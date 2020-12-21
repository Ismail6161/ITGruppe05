Nach der Reservierung gelangen Sie direkt zur Speisekarte.
<?php $Reservierung = Core::import("Reservierung");
?>
<form id="form_Reservierung" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Reservierung->renderLabel("Datum");$Reservierung->render("Datum");
$Reservierung->renderLabel("Uhrzeit");$Reservierung->render("Uhrzeit");
$Reservierung->renderLabel("Coronaadaten_Vorname");$Reservierung->render("Coronaadaten_Vorname");
$Reservierung->renderLabel("Coronaadaten_Nachname");$Reservierung->render("Coronaadaten_Nachname");
$Reservierung->renderLabel("Coronaadaten_Wohnort");$Reservierung->render("Coronaadaten_Wohnort");
$Reservierung->renderLabel("Coronaadaten_Plz");$Reservierung->render("Coronaadaten_Plz");
$Reservierung->renderLabel("Coronaadaten_Straße");$Reservierung->render("Coronaadaten_Straße");
$Reservierung->renderLabel("Coronaadaten_HNr");$Reservierung->render("Coronaadaten_HNr");
$Reservierung->renderLabel("Coronaadaten_Telefonnummer");$Reservierung->render("Coronaadaten_Telefonnummer");
?>

<label for="speichern"></label><button type="submit" name="speichern" id="speichern" value="1" >Reservieren</button>
</div>
</form>