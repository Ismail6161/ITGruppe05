<?php
Core::checkAccessLevel(1);
if (isset($_GET["id"])) {
unlink("../Gruppe051/speicherstände/model_start/".$_GET["id"]);
}
require "controller.speicherstande_overview.php";
