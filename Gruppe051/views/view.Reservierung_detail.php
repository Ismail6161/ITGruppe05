<?php $Bestellung = Core::import("Bestellung");
    ?>
<a href="?task=Reservierungsliste" class="ui-btn ui-icon-back ui-btn-icon-notext ui-corner-all" align="right">No text</a>

<form id="form_Bestellung" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Bestellung->renderLabel("Datum");$Bestellung->render("Datum"); // wird standardmäßig immer ausgeblendet
$Bestellung->renderLabel("Uhrzeit");$Bestellung->render("Uhrzeit");
$Bestellung->renderLabel("Coronadaten_Vorname");$Bestellung->render("Coronadaten_Vorname");
$Bestellung->renderLabel("Coronadaten_Nachname");$Bestellung->render("Coronadaten_Nachname");
$Bestellung->renderLabel("Coronadaten_Wohnort");$Bestellung->render("Coronadaten_Wohnort");
$Bestellung->renderLabel("Coronadaten_Plz");$Bestellung->render("Coronadaten_Plz");
$Bestellung->renderLabel("Coronadaten_Straße");$Bestellung->render("Coronadaten_Straße");
$Bestellung->renderLabel("Coronadaten_HNr");$Bestellung->render("Coronadaten_HNr");
$Bestellung->renderLabel("Coronadaten_Telefonnummer");$Bestellung->render("Coronadaten_Telefonnummer");

?>
<label for="update">speichern:</label><button type="submit" name="update" id="update" value="1" >update</button>
</div>
</form>
