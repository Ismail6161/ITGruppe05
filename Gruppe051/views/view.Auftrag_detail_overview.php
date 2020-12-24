<?php
$Reservierung_list=Core::$view->Reservierung_list;
$Reservierung=Core::$view->Reservierung;
$Position=Core::$view->Position;
?>
<div data-role="ui-bar ui-bar-a">
<p><h3>Beziehungsübersicht zur Klasse: Auftrag <a href="#popup_Auftrag" data-rel="popup" data-transition="pop" class="my-tooltip-btn ui-btn ui-alt-icon ui-nodisc-icon ui-btn-inline ui-icon-info ui-btn-icon-notext" title="Erfahre mehr">Erfahre mehr</a></h3></p>
<div data-role="popup" id="popup_Auftrag" class="ui-content" data-theme="a" style="max-width:800px;">
<h3>Informationen zu dieser Beziehung ():</h3><br>
Position (1..*) ---- (1..1) Auftrag <br><br>
<h4>Bedeutet für diese Seite der Beziehung:</h4>
<p>Das Objekt in dieser Detailansicht (aus der Klasse: Position) muss genau eine Verbindung zu einem Objekt der Partnerklasse (Auftrag) haben (1..1).</p><br>
<h4>Bedeutet für die Partner-Seite der Beziehung:</h4>
<p>Es ist zu beachten, dass das Partnerobjekt mindestens eine Verbindung zu einem Objekt dieser Klasse benötigt (1..*).</p>
<h4>Die Information zur Partner-Seite sollte vor allem dann beachtet werden:</h4>
<ul><li>wenn eine Verbindung gelöscht wird</li>
<li>wenn ein Objekt gelöscht wird</li></ul>
... durch einen solchen Vorgang könnte nämlich eine erfüllte Muss-Beziehung, auf Seite des Partnerobjekts auf einmal nicht mehr erfüllt sein!
</div>
</div>
<div class="ui-field-contain">
<?php foreach($Reservierung_list as $klasse){
$partner=true;
$klasse->renderLabel("Datum", "detail");
$klasse->render("Datum", "detail");
$klasse->renderLabel("Uhrzeit", "detail");
$klasse->render("Uhrzeit", "detail");


}
if($partner!==true){
echo"Aktuell liegt keine Verbindung zu einem Objekt der Partnerklasse vor.";
}
?>
</div>
