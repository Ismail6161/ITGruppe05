<?php
session_start();
//  ****** System Dateien einbinden *******
require("includes/system.core.php");
require("includes/system.db.php");
require("includes/system.help.php");
require("includes/system.view.php");
require("includes/config.php");
require("includes/getSnippet/system.getSnippet.php");
require("includes/system.snippet.php");
//  ***** Anwendungsklassen einbinden *****
require("models/model.Kunde.php");
require("models/model.Position.php");
require("models/model.Speise.php");
require("models/model.Reservierung.php");
require("models/model.Mitgast.php");
require("models/model.GruppeT.php");
require("models/model.user.php");
require("models/model.favoriten.php");
// ****** Initialisierung  *******
$core=new Core($hostname,$username,$password,$database); // Bei der Instanzierung wird die (statische) DB-Verbnindung automatisch aufgebaut. 
Core::init(); // sicher den Task auslesen
// ************ Nachfolgende Variablen aus Config ***********
Core::$title=$title;
Core::$defaultTask=$defaultTask;
Core::$debugMode=$debugmode;
Core::$debugPrint=$debugprint;
Core::$debugConsole=$debugconsole;
if(Core::$debugMode==1 || Core::$debugConsole==1){
error_reporting(E_ALL & ~E_NOTICE);
}else {
error_reporting(0);
}
// sorgt dafür, dass PHP-Fehlermeldungen erst am Schluss angezeigt werden.
xdebug_start_error_collection();
require('system.taskmap.php');
Core::controller(); // lädt abhängig vom Task den korrekten Controller
