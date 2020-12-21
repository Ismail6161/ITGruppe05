<?php $Speisekarte = Core::import("Speisekarte");

?>
        <?php $Speise = new Speise; ?>

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
                        <td><a href="?task=Positionansicht&id=<?=$Speise->id?>"><?= $Speise->render("Bezeichnung"); ?></a></td>
                        <th><?= $Speise->render("Bild"); ?></th> 
                        <td><?= $Speise->render("Einzelpreis"); ?></td>
                        <td><?= $Speise->render("Beschreibung"); ?></td>
                        
                    <?php } ?>
                </tr>
            </tbody>