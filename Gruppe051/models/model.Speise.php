<?php
class Speise extends DB{

//Variablenliste
public $id;
public $c_ts;
public $m_ts;
public static $settings=array();
public $Speisenummer;
public $Bezeichnung;
public $Bild;
public $Einzelpreis;
public $Beschreibung;
public $ts;

public $dataMapping=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

public static $dataScheme=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

//Konstanten
const SQL_INSERT='INSERT INTO Speise (`Speisenummer` , `Bezeichnung` , `Bild` , `Einzelpreis` , `Beschreibung` ) VALUES (?, ?, ?, ?, ?)';
const SQL_UPDATE='UPDATE Speise SET `Speisenummer` =?, `Bezeichnung` =?, `Bild` =?, `Einzelpreis` =?, `Beschreibung` =? where id=?';
const SQL_SELECT_PK='SELECT Speise.`c_ts` as `c_ts`, Speise.`m_ts` as `m_ts`, Speise.`id` as `id`, `Speise`.`Speisenummer` as `Speisenummer`, `Speise`.`Bezeichnung` as `Bezeichnung`, `Speise`.`Bild` as `Bild`, `Speise`.`Einzelpreis` as `Einzelpreis`, `Speise`.`Beschreibung` as `Beschreibung` from Speise where Speise.`id` = ?';
const SQL_SELECT_ALL='SELECT Speise.`c_ts` as `c_ts`, Speise.`m_ts` as `m_ts`, Speise.`id` as `id`, `Speise`.`Speisenummer` as `Speisenummer`, `Speise`.`Bezeichnung` as `Bezeichnung`, `Speise`.`Bild` as `Bild`, `Speise`.`Einzelpreis` as `Einzelpreis`, `Speise`.`Beschreibung` as `Beschreibung` from Speise';
const SQL_SELECT_IGNORE_DERIVED='SELECT DISTINCT Speise.`c_ts` as `c_ts`, Speise.`m_ts` as `m_ts`, Speise.`id` as `id`, `Speise`.`Speisenummer` as `Speisenummer`, `Speise`.`Bezeichnung` as `Bezeichnung`, `Speise`.`Bild` as `Bild`, `Speise`.`Einzelpreis` as `Einzelpreis`, `Speise`.`Beschreibung` as `Beschreibung` from Speise';
const SQL_DELETE='DELETE FROM Speise WHERE id=?';
const SQL_PRIMARY='id';

const SQL_SELECT_Position_a='select Speise.id as id, Speise.Speisenummer as Speisenummer, Speise.Bezeichnung as Bezeichnung, Speise.Bild as Bild, Speise.Einzelpreis as Einzelpreis, Speise.Beschreibung as Beschreibung from Speise where Speise.id = ?';
}

Speise::$dataScheme=db::buildScheme("Speise");
$fp = fopen("models/json/Speise_complete.json", "w");
fwrite($fp, json_encode(Speise::$dataScheme,JSON_UNESCAPED_UNICODE));
fclose($fp);
Speise::$settings=db::loadSettings("Speise");
$fp = fopen("models/json/Speise_settings_complete.json", "w");
fwrite($fp, json_encode(Speise::$settings,JSON_UNESCAPED_UNICODE));
fclose($fp);
