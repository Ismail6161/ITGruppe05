<?php
class Reservierung extends DB{

//Variablenliste
public $id;
public $c_ts;
public $m_ts;
public static $settings=array();
public static $access = true;
public $Datum;
public $Uhrzeit;
public $Tischvergabe;
public $Gesamtbetrag;
public $Coronadaten_Vorname;
public $Coronadaten_Nachname;
public $Coronadaten_Wohnort;
public $Coronadaten_Plz;
public $Coronadaten_Straße;
public $Coronadaten_HNr;
public $Coronadaten_Telefonnummer;
public $_Kunde;
public $ts;

public $dataMapping=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

public static $dataScheme=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

//Konstanten
const SQL_INSERT='INSERT INTO Reservierung (_Kunde, `Datum` , `Uhrzeit` , `Tischvergabe` , `Coronadaten_Vorname` , `Coronadaten_Nachname` , `Coronadaten_Wohnort` , `Coronadaten_Plz` , `Coronadaten_Straße` , `Coronadaten_HNr` , `Coronadaten_Telefonnummer` ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
const SQL_UPDATE='UPDATE Reservierung SET _Kunde=?, `Datum` =?, `Uhrzeit` =?, `Tischvergabe` =?, `Coronadaten_Vorname` =?, `Coronadaten_Nachname` =?, `Coronadaten_Wohnort` =?, `Coronadaten_Plz` =?, `Coronadaten_Straße` =?, `Coronadaten_HNr` =?, `Coronadaten_Telefonnummer` =? where id=?';
const SQL_SELECT_PK='SELECT Reservierung.`c_ts` as `c_ts`, Reservierung.`m_ts` as `m_ts`, Reservierung.`id` as `id`, Reservierung._Kunde as _Kunde, `Reservierung`.`Datum` as `Datum`, `Reservierung`.`Uhrzeit` as `Uhrzeit`, `Reservierung`.`Tischvergabe` as `Tischvergabe`, `Reservierung`.`Coronadaten_Vorname` as `Coronadaten_Vorname`, `Reservierung`.`Coronadaten_Nachname` as `Coronadaten_Nachname`, `Reservierung`.`Coronadaten_Wohnort` as `Coronadaten_Wohnort`, `Reservierung`.`Coronadaten_Plz` as `Coronadaten_Plz`, `Reservierung`.`Coronadaten_Straße` as `Coronadaten_Straße`, `Reservierung`.`Coronadaten_HNr` as `Coronadaten_HNr`, `Reservierung`.`Coronadaten_Telefonnummer` as `Coronadaten_Telefonnummer` from Reservierung where Reservierung.`id` = ?';
const SQL_SELECT_ALL='SELECT Reservierung.`c_ts` as `c_ts`, Reservierung.`m_ts` as `m_ts`, Reservierung.`id` as `id`, Reservierung._Kunde as _Kunde, `Reservierung`.`Datum` as `Datum`, `Reservierung`.`Uhrzeit` as `Uhrzeit`, `Reservierung`.`Tischvergabe` as `Tischvergabe`, `Reservierung`.`Coronadaten_Vorname` as `Coronadaten_Vorname`, `Reservierung`.`Coronadaten_Nachname` as `Coronadaten_Nachname`, `Reservierung`.`Coronadaten_Wohnort` as `Coronadaten_Wohnort`, `Reservierung`.`Coronadaten_Plz` as `Coronadaten_Plz`, `Reservierung`.`Coronadaten_Straße` as `Coronadaten_Straße`, `Reservierung`.`Coronadaten_HNr` as `Coronadaten_HNr`, `Reservierung`.`Coronadaten_Telefonnummer` as `Coronadaten_Telefonnummer` from Reservierung';
const SQL_SELECT_IGNORE_DERIVED='SELECT DISTINCT Reservierung.`c_ts` as `c_ts`, Reservierung.`m_ts` as `m_ts`, Reservierung.`id` as `id`, Reservierung._Kunde as _Kunde, `Reservierung`.`Datum` as `Datum`, `Reservierung`.`Uhrzeit` as `Uhrzeit`, `Reservierung`.`Tischvergabe` as `Tischvergabe`, `Reservierung`.`Coronadaten_Vorname` as `Coronadaten_Vorname`, `Reservierung`.`Coronadaten_Nachname` as `Coronadaten_Nachname`, `Reservierung`.`Coronadaten_Wohnort` as `Coronadaten_Wohnort`, `Reservierung`.`Coronadaten_Plz` as `Coronadaten_Plz`, `Reservierung`.`Coronadaten_Straße` as `Coronadaten_Straße`, `Reservierung`.`Coronadaten_HNr` as `Coronadaten_HNr`, `Reservierung`.`Coronadaten_Telefonnummer` as `Coronadaten_Telefonnummer` from Reservierung';
const SQL_DELETE='DELETE FROM Reservierung WHERE id=?';
const SQL_PRIMARY='id';

const SQL_SELECT_Kunde='select Reservierung.id as id, Reservierung.Datum as Datum, Reservierung.Uhrzeit as Uhrzeit, Reservierung.Tischvergabe as Tischvergabe, Reservierung.Coronadaten_Vorname as Coronadaten_Vorname, Reservierung.Coronadaten_Nachname as Coronadaten_Nachname, Reservierung.Coronadaten_Wohnort as Coronadaten_Wohnort, Reservierung.Coronadaten_Plz as Coronadaten_Plz, Reservierung.Coronadaten_Straße as Coronadaten_Straße, Reservierung.Coronadaten_HNr as Coronadaten_HNr, Reservierung.Coronadaten_Telefonnummer as Coronadaten_Telefonnummer from Reservierung where Reservierung._Kunde = ?';
const SQL_SELECT_Position_a='select Reservierung.id as id, Reservierung.Datum as Datum, Reservierung.Uhrzeit as Uhrzeit, Reservierung.Tischvergabe as Tischvergabe, Reservierung.Coronadaten_Vorname as Coronadaten_Vorname, Reservierung.Coronadaten_Nachname as Coronadaten_Nachname, Reservierung.Coronadaten_Wohnort as Coronadaten_Wohnort, Reservierung.Coronadaten_Plz as Coronadaten_Plz, Reservierung.Coronadaten_Straße as Coronadaten_Straße, Reservierung.Coronadaten_HNr as Coronadaten_HNr, Reservierung.Coronadaten_Telefonnummer as Coronadaten_Telefonnummer from Reservierung where Reservierung.id = ?';
const SQL_SELECT_Mitgast_b='select Reservierung.id as id, Reservierung.Datum as Datum, Reservierung.Uhrzeit as Uhrzeit, Reservierung.Tischvergabe as Tischvergabe, Reservierung.Coronadaten_Vorname as Coronadaten_Vorname, Reservierung.Coronadaten_Nachname as Coronadaten_Nachname, Reservierung.Coronadaten_Wohnort as Coronadaten_Wohnort, Reservierung.Coronadaten_Plz as Coronadaten_Plz, Reservierung.Coronadaten_Straße as Coronadaten_Straße, Reservierung.Coronadaten_HNr as Coronadaten_HNr, Reservierung.Coronadaten_Telefonnummer as Coronadaten_Telefonnummer from Reservierung where Reservierung.id = ?';
}

Reservierung::$dataScheme=db::buildScheme("Reservierung");
$fp = fopen("models/json/Reservierung_complete.json", "w");
fwrite($fp, json_encode(Reservierung::$dataScheme,JSON_UNESCAPED_UNICODE));
fclose($fp);
Reservierung::$settings=db::loadSettings("Reservierung");
$fp = fopen("models/json/Reservierung_settings_complete.json", "w");
fwrite($fp, json_encode(Reservierung::$settings,JSON_UNESCAPED_UNICODE));
fclose($fp);
