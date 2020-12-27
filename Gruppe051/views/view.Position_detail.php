<?php $Bestellung = Core::import("Bestellung");
    ?>
<form id="form_Bestellung" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Bestellung->renderLabel("Anzahl");$Bestellung->render("Anzahl"); // wird standardmäßig immer ausgeblendet
$Bestellung->renderLabel("_Speise");$Bestellung->render("_Speise");
$Bestellung->renderLabel("_Reservierung");$Bestellung->render("_Reservierung");

?>
<label for="update">speichern:</label><button type="submit" name="update" id="update" value="1" >update</button>
</div>
</form>