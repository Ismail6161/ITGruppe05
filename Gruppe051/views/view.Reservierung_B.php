<?php $Reservierung = Core::import("Reservierung");

?>
        <?php $Kunde = new Position; ?>

        <table data-role="table" id="tbl_Reservierung" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
<form>
<input id="filterTable-input" data-type="search">
</form>
            <thead>
                <tr>
                    <th><?= $Kunde->renderHeader("Anzahl"); ?></th>   
                    
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Reservierung as $Kunde) { ?>
                    <tr>
                   
                       
                        <td><?= $Kunde->render("Anzahl"); ?></td>
                        
                            <?php } ?>
                </tr>
            </tbody>
