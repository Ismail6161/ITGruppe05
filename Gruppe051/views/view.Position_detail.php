<?php $artikel = Core::import("artikel");
    /* @var $artikel Artikel */ ?>
<form id="form_artikel" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$artikel->renderLabel("Anzahl");$artikel->render("Anzahl"); // wird standardmäßig immer ausgeblendet
$artikel->renderLabel("_Speise");$artikel->render("_Speise");
$artikel->renderLabel("_Reservierung");$artikel->render("_Reservierung");

?>
<label for="update">speichern:</label><button type="submit" name="update" id="update" value="1" >update</button>
</div>
</form>