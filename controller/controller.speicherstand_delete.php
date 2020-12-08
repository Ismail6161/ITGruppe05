<?php
Core::checkAccessLevel(1);
if (isset($_GET["id"])) {
unlink("../ITGruppe05/speicherstände/model_start/".$_GET["id"]);
}
require "controller.speicherstande_overview.php";
