<?php $Reservierung = Core::import("Reservierung");

?>
        <?php $Kunde = new Reservierung; ?>

        <table data-role="table" id="tbl_Reservierung" data-filter="true" data-input="#filterTable-input" class="ui-responsive">
<form>
<input id="filterTable-input" data-type="search">
</form>
            <thead>
                <tr>
                    <th><?= $Kunde->renderHeader("Datum"); ?></th>   
                    <th><?= $Kunde->renderHeader("Uhrzeit"); ?></th> 
                                      
                    <th><?= $Kunde->renderHeader("Coronadaten_Vorname"); ?></th> 
                    <th><?= $Kunde->renderHeader("Coronadaten_Nachname"); ?></th> 
                    <th><?= $Kunde->renderHeader("Coronadaten_Wohnort"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronadaten_Plz"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronadaten_Staße"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronadaten_HNr"); ?></th>
                    <th><?= $Kunde->renderHeader("Coronadaten_Telefonnummer"); ?></th>
                    <th><?= $Kunde->renderHeader("_Kunde"); ?></th>
                    <th><?= $Kunde->renderHeader("Tischvergabe"); ?></th>
                   
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($Reservierung as $Kunde) { ?>
                    <tr>
                        <td><a href="?task=Reservierungstisch&id=<?=$Kunde->id?>"><?= $Kunde->render("Datum"); ?></a></td>
                        <td><a href="?task=Reservierung_B&id=<?=$Kunde->id?>"><?= $Kunde->render("Uhrzeit"); ?></td>
                       
                        <td><?= $Kunde->render("Coronadaten_Vorname"); ?></td>
                        <td><?= $Kunde->render("Coronadaten_Nachname"); ?></td>
                        <td><?= $Kunde->render("Coronadaten_Wohnort"); ?></td>
                        <td><?= $Kunde->render("Coronadaten_Plz"); ?></td>
                        <td><?= $Kunde->render("Coronadaten_Staße"); ?></td>
                        <td><?= $Kunde->render("Coronadaten_HNr"); ?></td>
                        <td><?= $Kunde->render("Coronadaten_Telefonnummer"); ?></td>
                        <td><a href="?task=Kundenliste<?=$_Kunde->id?>"><?= $Kunde->render("_Kunde"); ?></a></td>
                        <td><?= $Kunde->render("Tischvergabe"); ?></td>
                        <td>
                        <a href="?task=Reservierung_detail&id=<?=$Kunde->id?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-pencil ui-btn-icon-notext ui-corner-all ui-btn-inline">edit</a>
                        <a href="?task=Reservierung_delete&id=<?=$Kunde->id?>" data-ajax="false" data-role="button"  class="ui-btn ui-icon-delete ui-btn-icon-notext ui-corner-all ui-btn-inline" onclick="return confirm("Soll der Datensatz mit der ID: <?=$Klasse->id." wirklich gelöscht werden?"?>")">delete</a>
                        </td>
                            <?php } ?>
                </tr>
            </tbody>
