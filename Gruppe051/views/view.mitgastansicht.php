<?php $Mitgast = Core::import("mitgast");

?>
        <?php $Kunde = new Mitgast; ?>

        <table data-role="table" id="tbl_Mitgast" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
<form>
<input id="filterTable-input" data-type="search">
</form>
            <thead>
                <tr>
                    
                                      
                    <th><?= $Kunde->renderHeader("Vorname"); ?></th> 
                    <th><?= $Kunde->renderHeader("Nachname"); ?></th> 
                    <th><?= $Kunde->renderHeader("_Reservierung"); ?></th> 
                     <th><?= $Kunde->renderHeader("Coronadaten_Vorname"); ?></th> 
                    
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Mitgast as $Kunde) { ?>
                    <tr>
                        
                        
                        <td><?= $Kunde->render("Vorname"); ?></td>
                         <td><?= $Kunde->render("Nachname"); ?></td>
                        <td><a href="?task=Reservierungsliste<?=$_Kunde->id?>"><?= $Kunde->render("_Reservierung"); ?></td>
                       
                       
                    <?php } ?>
                </tr>
            </tbody>


