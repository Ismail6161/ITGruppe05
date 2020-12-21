<?php $Reservierung = Core::import("Reservierung");

?>
        <?php $Kunde = new Reservierung; ?>

        <table data-role="table" id="tbl_Reservierung" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
            <thead>
                <tr>
                    <th><?= $Kunde->renderHeader("Datum"); ?></th>   
                    <th><?= $Kunde->renderHeader("Uhrzeit"); ?></th> 
                    <th><?= $Kunde->renderHeader("Tischvergabe"); ?></th> 
                    <th><?= $Kunde->renderHeader("Coronaadaten_Vorname"); ?></th> 
                    <th><?= $Kunde->renderHeader("Coronaadaten_Nachname"); ?></th> 
                    <th><?= $Kunde->renderHeader("Coronaadaten_Wohnort"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronaadaten_Plz"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronaadaten_Staße"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronaadaten_HNr"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronaadaten_Telefonnummer"); ?></th>
                    <th><?= $Kunde->renderHeader("_Kunde"); ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Reservierung as $Kunde) { ?>
                    <tr>
                        <td><?= $Kunde->render("Datum"); ?></td>
                        <td><?= $Kunde->render("Uhrzeit"); ?></td>
                        <th><?= $Kunde->render("Tischvergabe"); ?></th> 
                        <td><?= $Kunde->render("Coronaadaten_Vorname"); ?></td>
                        <td><?= $Kunde->render("Coronaadaten_Nachname"); ?></td>
                        <td><?= $Kunde->render("Coronaadaten_Wohnort"); ?></td>
                        <td><?= $Kunde->render("Coronaadaten_Plz"); ?></td>
                        <td><?= $Kunde->render("Coronaadaten_Staße"); ?></td>
                        <td><?= $Kunde->render("Coronaadaten_HNr"); ?></td>
                        <td><?= $Kunde->render("Coronaadaten_Telefonnummer"); ?></td>
                        <td><a href="?task=home&id=<?=$_Kunde->id?>"><?= $Kunde->render("_Kunde"); ?></a></td>
                        
                    <?php } ?>
                </tr>
            </tbody>
