<?php $Speise = Core::import("Speise");
  ?>
<form id="form_Speise" method="post" action="" data-ajax="false" enctype="multipart/form-data"> 
<div class="ui-field-contain">
<?php
$Speise->renderLabel("Bezeichnung");$Speise->render("Bezeichnung");
$Speise->renderLabel("Einzelpreis");$Speise->render("Einzelpreis");

?>

</div>
</form>


