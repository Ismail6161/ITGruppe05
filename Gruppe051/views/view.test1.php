<?php $artikelliste = Core::import("artikelliste");
/* @var $artikel Artikel */
?>
        <?php $artikel = new Speise; ?>

        <table data-role="table" id="tbl_artikel" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
            <thead>
                <tr>
                  
                    <th><?= $artikel->renderHeader("Bezeichnung"); ?></th> 
                    <th><?= $artikel->renderHeader("Einzelpreis"); ?></th> 
                    <th><?= $artikel->renderHeader("Bild"); ?></th> 
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artikelliste as $artikel) { ?>
                    <tr>
                       
                        <td><?= $artikel->render("Bezeichnung"); ?></td>
                        <th><?= $artikel->render("Einzelpreis"); ?></th> 
                        <td><?= $artikel->render("Bild"); ?></td>
                       
                    <?php } ?>
                </tr>
            </tbody>