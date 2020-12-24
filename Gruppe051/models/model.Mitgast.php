<?php
class Mitgast extends DB{

//Variablenliste
public $id;
public $c_ts;
public $m_ts;
public static $settings=array();
public static $access = true;
public $Vorname;
public $Nachname;
public $_Reservierung;
public $ts;

public $dataMapping=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

public static $dataScheme=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

//Konstanten
const SQL_INSERT='INSERT INTO Mitgast (_Reservierung, `Vorname` , `Nachname` ) VALUES (?, ?, ?)';
const SQL_UPDATE='UPDATE Mitgast SET _Reservierung=?, `Vorname` =?, `Nachname` =? where id=?';
const SQL_SELECT_PK='SELECT Mitgast.`c_ts` as `c_ts`, Mitgast.`m_ts` as `m_ts`, Mitgast.`id` as `id`, Mitgast._Reservierung as _Reservierung, `Mitgast`.`Vorname` as `Vorname`, `Mitgast`.`Nachname` as `Nachname` from Mitgast where Mitgast.`id` = ?';
const SQL_SELECT_ALL='SELECT Mitgast.`c_ts` as `c_ts`, Mitgast.`m_ts` as `m_ts`, Mitgast.`id` as `id`, Mitgast._Reservierung as _Reservierung, `Mitgast`.`Vorname` as `Vorname`, `Mitgast`.`Nachname` as `Nachname` from Mitgast';
const SQL_SELECT_IGNORE_DERIVED='SELECT DISTINCT Mitgast.`c_ts` as `c_ts`, Mitgast.`m_ts` as `m_ts`, Mitgast.`id` as `id`, Mitgast._Reservierung as _Reservierung, `Mitgast`.`Vorname` as `Vorname`, `Mitgast`.`Nachname` as `Nachname` from Mitgast';
const SQL_DELETE='DELETE FROM Mitgast WHERE id=?';
const SQL_PRIMARY='id';

const SQL_SELECT_Reservierung='select Mitgast.id as id, Mitgast.Vorname as Vorname, Mitgast.Nachname as Nachname from Mitgast where Mitgast._Reservierung = ?';
}

Mitgast::$dataScheme=db::buildScheme("Mitgast");
$fp = fopen("models/json/Mitgast_complete.json", "w");
fwrite($fp, json_encode(Mitgast::$dataScheme,JSON_UNESCAPED_UNICODE));
fclose($fp);
Mitgast::$settings=db::loadSettings("Mitgast");
$fp = fopen("models/json/Mitgast_settings_complete.json", "w");
fwrite($fp, json_encode(Mitgast::$settings,JSON_UNESCAPED_UNICODE));
fclose($fp);
