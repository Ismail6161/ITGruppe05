<?php $Kundenliste = Core::import("Kundenliste");

?>
        <?php $Kunde = new Kunde; ?>

        <table data-role="table" id="tbl_Reservierung" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
            <thead>
                <tr>
                    <th><?= $Kunde->renderHeader("Kundennummer"); ?></th>  
                    <th><?= $Kunde->renderHeader("EMail"); ?></th>   
                
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Kundenliste as $Kunde) { ?>
                    <tr>
                        <td><?= $Kunde->render("Kundennummer"); ?></td>
                        <td><?= $Kunde->render("EMail"); ?></td>
                       
                        
                    <?php } ?>
                </tr>
            </tbody>


