Haben Sie Gäste? Falls ja, geben Sie bitte die benötigten Daten an.
<?php $Mitgast = Core::import("Mitgast");
?>

<div data-role="ui-bar ui-bar-a">
<h3>Ich habe keine Gäste
<div class="tooltip_hs">
<a href="?task=Speisen<?=$icon?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-<?=$icon?> ui-btn-icon-notext ui-corner-all ui-btn-inline">WEITER</a>
<span style="font-size: 15px" class="tooltiptext">Zur Speisekarte<?=$hover?></span>
</div>
<div data-role="ui-bar ui-bar-a">
<h1>Mitgastanmeldung
</div>
    
<form id="form_Mitgast" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php


$Mitgast->renderLabel("Vorname");$Mitgast->render("Vorname");
$Mitgast->renderLabel("Nachname");$Mitgast->render("Nachname");
$Mitgast->renderLabel("_Reservierung");$Mitgast->render("_Reservierung");

?>

<label for="speichern"></label><button type="submit" name="speichern" id="speichern" value="1" >Gast eintragen</button>
<label><a href="?task=Speisen" for="speichern"></label><button type="submit" name="speichern" id="speichern" value="1" >weiter zur Speisekarte</button>
</div>
</form>
