<?php
$artikel = Core::import("artikel");
/* @var $artikel Artikel */
?>
<form id="form_artikel" method="post" action="" data-ajax="false">
    <div class="ui-field-contain">
            
<?php

$artikel->renderLabel("Bezeichnung");$artikel->render("Bezeichnung");
$artikel->renderLabel("Einzelpreis");$artikel->render("Einzelpreis");
$artikel->renderLabel("Bild");$artikel->render("Bild");

?>
<label for="speichern"></label><button type="submit" name="speichern" id="speichern" value="1" >Speichern</button>
            
            
           
    </div>
</form>

