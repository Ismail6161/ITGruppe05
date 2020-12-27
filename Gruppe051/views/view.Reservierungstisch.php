<?php $Bestellung = Core::import("Bestellung");
    ?>
<form id="form_Bestellung" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Bestellung->renderLabel("Datum");$Bestellung->render("Datum"); 
$Bestellung->renderLabel("Uhrzeit");$Bestellung->render("Uhrzeit"); 
$Bestellung->renderLabel("Coronadaten_Vorname");$Bestellung->render("Coronadaten_Vorname"); 
$Bestellung->renderLabel("Coronadaten_Nachname");$Bestellung->render("Coronadaten_Nachname");
$Bestellung->renderLabel("Tischvergabe");$Bestellung->render("Tischvergabe"); 
?>
<label for="update">speichern:</label><button type="submit" name="update" id="update" value="1" >update</button>
</div>
</form>