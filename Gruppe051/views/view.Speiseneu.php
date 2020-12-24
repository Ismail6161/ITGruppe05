<?php
$Speise = Core::import("Speise");

?>
<form id="form_Speise" method="post" action="" data-ajax="false">
    <div class="ui-field-contain">
            
<?php
//id
$Speise->renderLabel("Speisenummer");$Speise->render("Speisenummer");
$Speise->renderLabel("Bezeichnung");$Speise->render("Bezeichnung");
$Speise->renderLabel("Einzelpreis");$Speise->render("Einzelpreis");
$Speise->renderLabel("Bild");$Speise->render("Bild");
$Speise->renderLabel("Beschreibung");$Speise->render("Beschreibung");
$Speise->renderLabel("c_ts");$Speise->render("c_ts");
$Speise->renderLabel("m_ts");$Speise->render("m_ts");
?>
<label for="speichern"></label><button type="submit" name="speichern" id="speichern" value="1" >Speichern</button>
            
            
           
    </div>
</form>
