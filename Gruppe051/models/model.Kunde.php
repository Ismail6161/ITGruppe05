<?php
class Kunde extends DB{

//Variablenliste
public $id;
public $c_ts;
public $m_ts;
public static $settings=array();
public $Kundennummer;
public $EMail;
public $_User_uid;
public $ts;

public $dataMapping=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

public static $dataScheme=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

//Konstanten
const SQL_INSERT='INSERT INTO Kunde (_User_uid, `Kundennummer` , `EMail` ) VALUES (?, ?, ?)';
const SQL_UPDATE='UPDATE Kunde SET _User_uid=?, `Kundennummer` =?, `EMail` =? where id=?';
const SQL_SELECT_PK='SELECT Kunde.`c_ts` as `c_ts`, Kunde.`m_ts` as `m_ts`, Kunde.`id` as `id`, Kunde._User_uid as _User_uid, `Kunde`.`Kundennummer` as `Kundennummer`, `Kunde`.`EMail` as `EMail` from Kunde where Kunde.`id` = ?';
const SQL_SELECT_ALL='SELECT Kunde.`c_ts` as `c_ts`, Kunde.`m_ts` as `m_ts`, Kunde.`id` as `id`, Kunde._User_uid as _User_uid, `Kunde`.`Kundennummer` as `Kundennummer`, `Kunde`.`EMail` as `EMail` from Kunde';
const SQL_SELECT_IGNORE_DERIVED='SELECT DISTINCT Kunde.`c_ts` as `c_ts`, Kunde.`m_ts` as `m_ts`, Kunde.`id` as `id`, Kunde._User_uid as _User_uid, `Kunde`.`Kundennummer` as `Kundennummer`, `Kunde`.`EMail` as `EMail` from Kunde';
const SQL_DELETE='DELETE FROM Kunde WHERE id=?';
const SQL_PRIMARY='id';

const SQL_SELECT_Reservierung_a='select Kunde.id as id, Kunde.Kundennummer as Kundennummer, Kunde.EMail as EMail from Kunde where Kunde.id = ?';
const SQL_SELECT_User_uid='select Kunde.id as id, Kunde.Kundennummer as Kundennummer, Kunde.EMail as EMail from Kunde where Kunde._User_uid=?';
}

Kunde::$dataScheme=db::buildScheme("Kunde");
$fp = fopen("models/json/Kunde_complete.json", "w");
fwrite($fp, json_encode(Kunde::$dataScheme,JSON_UNESCAPED_UNICODE));
fclose($fp);
Kunde::$settings=db::loadSettings("Kunde");
$fp = fopen("models/json/Kunde_settings_complete.json", "w");
fwrite($fp, json_encode(Kunde::$settings,JSON_UNESCAPED_UNICODE));
fclose($fp);
