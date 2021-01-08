<?php $Speisekarte = Core::import("Speisekarte");

?>
        <?php $Speise = new Speise; ?>
<div data-role="ui-bar ui-bar-a">
<form>
<input id="filterTable-input" data-type="search">
</form>
<h3>Bestellung abgeben
<div class="tooltip_hs">
<a href="?task=Bestellung<?=$icon?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-<?=$icon?> ui-btn-icon-notext ui-corner-all ui-btn-inline">HIER</a>
<span style="font-size: 15px" class="tooltiptext">Bestellung hier abgeben <?=$hover?></span>
</div>

<div data-role="ui-bar ui-bar-a">
<h1>Speisekarte
</div>
        <table data-role="table" id="tbl_Speise" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
            <thead>
                <tr>
                    <th><?= $Speise->renderHeader("Speisenummer"); ?></th>   
                    <th><?= $Speise->renderHeader("Bezeichnung"); ?></th> 
                    <th><?= $Speise->renderHeader("Bild"); ?></th> 
                    <th><?= $Speise->renderHeader("Einzelpreis"); ?></th> 
                    <th><?= $Speise->renderHeader("Beschreibung"); ?></th> 
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Speisekarte as $klasse) { ?>
                    <tr>
                        <td><?= $klasse->render("Speisenummer"); ?></td>
                        <td><?= $klasse->render("Bezeichnung"); ?></a></td>
                        <th><?= $klasse->render("Bild"); ?></th> 
                        <td><?= $klasse->render("Einzelpreis"); ?></td>
                        <td><?= $klasse->render("Beschreibung"); ?></td>
                        
                    <?php } ?>
                </tr>
            </tbody>