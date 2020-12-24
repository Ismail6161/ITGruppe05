<?php
$Position = Core::$view->Position;
?>
<a href="?task=Positionsliste" class="ui-btn ui-icon-back ui-btn-icon-notext ui-corner-all" align="right">No text</a>

<form id="form_Position" method="post" action="?task=Bestellung" data-ajax="false" enctype="<?=$Position::$enctype?>">
<div class="ui-field-contain">
<?php
$Position = Core::$view->Position;
$Position->renderLabel("Anzahl");
$Position->render("Anzahl");
$Position->renderLabel("_Speise");
$Position->render("_Speise");
$Position->renderLabel("_Reservierung");
$Position->render("_Reservierung");

?>
<label for="update">Speichern:</label><button type="submit" onclick="BezHinweis()" name="update" id="update" value="1" >Zur Bestellung hinzufügen</button>
</div>
</form>
<script>
</script>
