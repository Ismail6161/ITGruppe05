<?php
class Position extends DB{

//Variablenliste
public $id;
public $c_ts;
public $m_ts;
public static $settings=array();
public static $access = true;
public $Anzahl;
public $Gesamtpreis;
public $_Reservierung;
public $_Speise;
public $ts;

public $dataMapping=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

public static $dataScheme=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

//Konstanten
const SQL_INSERT='INSERT INTO Position (_Reservierung, _Speise, `Anzahl` ) VALUES (?, ?, ?)';
const SQL_UPDATE='UPDATE Position SET _Reservierung=?, _Speise=?, `Anzahl` =? where id=?';
const SQL_SELECT_PK='SELECT Position.`c_ts` as `c_ts`, Position.`m_ts` as `m_ts`, Position.`id` as `id`, Position._Reservierung as _Reservierung, Position._Speise as _Speise, `Position`.`Anzahl` as `Anzahl` from Position where Position.`id` = ?';
const SQL_SELECT_ALL='SELECT Position.`c_ts` as `c_ts`, Position.`m_ts` as `m_ts`, Position.`id` as `id`,Anzahl*Einzelpreis as Gesamtpreis, Position._Reservierung as _Reservierung, Position._Speise as _Speise, `Position`.`Anzahl` as `Anzahl` from Position';
const SQL_SELECT_IGNORE_DERIVED='SELECT DISTINCT Position.`c_ts` as `c_ts`, Position.`m_ts` as `m_ts`, Position.`id` as `id`, Position._Reservierung as _Reservierung, Position._Speise as _Speise, `Position`.`Anzahl` as `Anzahl` from Position';
const SQL_DELETE='DELETE FROM Position WHERE id=?';
const SQL_PRIMARY='id';
const SQL = "SELECT Position.id as id, Position.Anzahl as Anzahl, Speise.Einzelpreis AS Einzelpreis, Anzahl*Einzelpreis as Gesamtpreis From Position INNER JOIN Speise ON Speise.id = Position._speise";
const SQL_SELECT_Reservierung='select Position.id as id, Position.Anzahl as Anzahl from Position where Position._Speise = ?';
const SQL_SELECT_Speise='select Position.id as id, Position.Anzahl as Anzahl, Speise.Einzelpreis as Einzelpreis, Anzahl*Einzelpreis as "Gesamtpreis" from Position where Position._Speise = ?';
}

Position::$dataScheme=db::buildScheme("Position");
$fp = fopen("models/json/Position_complete.json", "w");
fwrite($fp, json_encode(Position::$dataScheme,JSON_UNESCAPED_UNICODE));
fclose($fp);
Position::$settings=db::loadSettings("Position");
$fp = fopen("models/json/Position_settings_complete.json", "w");
fwrite($fp, json_encode(Position::$settings,JSON_UNESCAPED_UNICODE));
fclose($fp);
