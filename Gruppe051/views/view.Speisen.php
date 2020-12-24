<?php $Speisekarte = Core::import("Speisekarte");

?>
        <?php $Speise = new Speise; ?>
<div data-role="ui-bar ui-bar-a">
<h1>Bestellung abgeben
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
                <?php foreach ($Speisekarte as $Speise) { ?>
                    <tr>
                        <td><?= $Speise->render("Speisenummer"); ?></td>
                        <td><?= $Speise->render("Bezeichnung"); ?></a></td>
                        <th><?= $Speise->render("Bild"); ?></th> 
                        <td><?= $Speise->render("Einzelpreis"); ?></td>
                        <td><?= $Speise->render("Beschreibung"); ?></td>
                        
                    <?php } ?>
                </tr>
            </tbody>