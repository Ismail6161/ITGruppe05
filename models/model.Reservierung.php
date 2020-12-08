<?php
class Reservierung extends DB{

//Variablenliste
public $id;
public $c_ts;
public $m_ts;
public static $settings=array();
public $Datum;
public $Uhrzeit;
public $Tischvergabe;
public $Gesamtbetrag;
public $Coronaadaten_Vorname;
public $Coronaadaten_Nachname;
public $Coronaadaten_Wohnort;
public $Coronaadaten_Plz;
public $Coronaadaten_Straße;
public $Coronaadaten_HNr;
public $Coronaadaten_Telefonnummer;
public $_Kunde;
public $ts;

public $dataMapping=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

public static $dataScheme=array(); // damit ein eigenes statisches Array entsteht. Sonst ist es DB::$dataScheme

//Konstanten
const SQL_INSERT='INSERT INTO Reservierung (_Kunde, `Datum` , `Uhrzeit` , `Tischvergabe` , `Coronaadaten_Vorname` , `Coronaadaten_Nachname` , `Coronaadaten_Wohnort` , `Coronaadaten_Plz` , `Coronaadaten_Straße` , `Coronaadaten_HNr` , `Coronaadaten_Telefonnummer` ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
const SQL_UPDATE='UPDATE Reservierung SET _Kunde=?, `Datum` =?, `Uhrzeit` =?, `Tischvergabe` =?, `Coronaadaten_Vorname` =?, `Coronaadaten_Nachname` =?, `Coronaadaten_Wohnort` =?, `Coronaadaten_Plz` =?, `Coronaadaten_Straße` =?, `Coronaadaten_HNr` =?, `Coronaadaten_Telefonnummer` =? where id=?';
const SQL_SELECT_PK='SELECT Reservierung.`c_ts` as `c_ts`, Reservierung.`m_ts` as `m_ts`, Reservierung.`id` as `id`, Reservierung._Kunde as _Kunde, `Reservierung`.`Datum` as `Datum`, `Reservierung`.`Uhrzeit` as `Uhrzeit`, `Reservierung`.`Tischvergabe` as `Tischvergabe`, `Reservierung`.`Coronaadaten_Vorname` as `Coronaadaten_Vorname`, `Reservierung`.`Coronaadaten_Nachname` as `Coronaadaten_Nachname`, `Reservierung`.`Coronaadaten_Wohnort` as `Coronaadaten_Wohnort`, `Reservierung`.`Coronaadaten_Plz` as `Coronaadaten_Plz`, `Reservierung`.`Coronaadaten_Straße` as `Coronaadaten_Straße`, `Reservierung`.`Coronaadaten_HNr` as `Coronaadaten_HNr`, `Reservierung`.`Coronaadaten_Telefonnummer` as `Coronaadaten_Telefonnummer` from Reservierung where Reservierung.`id` = ?';
const SQL_SELECT_ALL='SELECT Reservierung.`c_ts` as `c_ts`, Reservierung.`m_ts` as `m_ts`, Reservierung.`id` as `id`, Reservierung._Kunde as _Kunde, `Reservierung`.`Datum` as `Datum`, `Reservierung`.`Uhrzeit` as `Uhrzeit`, `Reservierung`.`Tischvergabe` as `Tischvergabe`, `Reservierung`.`Coronaadaten_Vorname` as `Coronaadaten_Vorname`, `Reservierung`.`Coronaadaten_Nachname` as `Coronaadaten_Nachname`, `Reservierung`.`Coronaadaten_Wohnort` as `Coronaadaten_Wohnort`, `Reservierung`.`Coronaadaten_Plz` as `Coronaadaten_Plz`, `Reservierung`.`Coronaadaten_Straße` as `Coronaadaten_Straße`, `Reservierung`.`Coronaadaten_HNr` as `Coronaadaten_HNr`, `Reservierung`.`Coronaadaten_Telefonnummer` as `Coronaadaten_Telefonnummer` from Reservierung';
const SQL_SELECT_IGNORE_DERIVED='SELECT DISTINCT Reservierung.`c_ts` as `c_ts`, Reservierung.`m_ts` as `m_ts`, Reservierung.`id` as `id`, Reservierung._Kunde as _Kunde, `Reservierung`.`Datum` as `Datum`, `Reservierung`.`Uhrzeit` as `Uhrzeit`, `Reservierung`.`Tischvergabe` as `Tischvergabe`, `Reservierung`.`Coronaadaten_Vorname` as `Coronaadaten_Vorname`, `Reservierung`.`Coronaadaten_Nachname` as `Coronaadaten_Nachname`, `Reservierung`.`Coronaadaten_Wohnort` as `Coronaadaten_Wohnort`, `Reservierung`.`Coronaadaten_Plz` as `Coronaadaten_Plz`, `Reservierung`.`Coronaadaten_Straße` as `Coronaadaten_Straße`, `Reservierung`.`Coronaadaten_HNr` as `Coronaadaten_HNr`, `Reservierung`.`Coronaadaten_Telefonnummer` as `Coronaadaten_Telefonnummer` from Reservierung';
const SQL_DELETE='DELETE FROM Reservierung WHERE id=?';
const SQL_PRIMARY='id';

const SQL_SELECT_Kunde='select Reservierung.id as id, Reservierung.Datum as Datum, Reservierung.Uhrzeit as Uhrzeit, Reservierung.Tischvergabe as Tischvergabe, Reservierung.Coronaadaten_Vorname as Coronaadaten_Vorname, Reservierung.Coronaadaten_Nachname as Coronaadaten_Nachname, Reservierung.Coronaadaten_Wohnort as Coronaadaten_Wohnort, Reservierung.Coronaadaten_Plz as Coronaadaten_Plz, Reservierung.Coronaadaten_Straße as Coronaadaten_Straße, Reservierung.Coronaadaten_HNr as Coronaadaten_HNr, Reservierung.Coronaadaten_Telefonnummer as Coronaadaten_Telefonnummer from Reservierung where Reservierung._Kunde = ?';
const SQL_SELECT_Position_a='select Reservierung.id as id, Reservierung.Datum as Datum, Reservierung.Uhrzeit as Uhrzeit, Reservierung.Tischvergabe as Tischvergabe, Reservierung.Coronaadaten_Vorname as Coronaadaten_Vorname, Reservierung.Coronaadaten_Nachname as Coronaadaten_Nachname, Reservierung.Coronaadaten_Wohnort as Coronaadaten_Wohnort, Reservierung.Coronaadaten_Plz as Coronaadaten_Plz, Reservierung.Coronaadaten_Straße as Coronaadaten_Straße, Reservierung.Coronaadaten_HNr as Coronaadaten_HNr, Reservierung.Coronaadaten_Telefonnummer as Coronaadaten_Telefonnummer from Reservierung where Reservierung.id = ?';
const SQL_SELECT_Mitgast_b='select Reservierung.id as id, Reservierung.Datum as Datum, Reservierung.Uhrzeit as Uhrzeit, Reservierung.Tischvergabe as Tischvergabe, Reservierung.Coronaadaten_Vorname as Coronaadaten_Vorname, Reservierung.Coronaadaten_Nachname as Coronaadaten_Nachname, Reservierung.Coronaadaten_Wohnort as Coronaadaten_Wohnort, Reservierung.Coronaadaten_Plz as Coronaadaten_Plz, Reservierung.Coronaadaten_Straße as Coronaadaten_Straße, Reservierung.Coronaadaten_HNr as Coronaadaten_HNr, Reservierung.Coronaadaten_Telefonnummer as Coronaadaten_Telefonnummer from Reservierung where Reservierung.id = ?';
}

Reservierung::$dataScheme=db::buildScheme("Reservierung");
$fp = fopen("models/json/Reservierung_complete.json", "w");
fwrite($fp, json_encode(Reservierung::$dataScheme,JSON_UNESCAPED_UNICODE));
fclose($fp);
Reservierung::$settings=db::loadSettings("Reservierung");
$fp = fopen("models/json/Reservierung_settings_complete.json", "w");
fwrite($fp, json_encode(Reservierung::$settings,JSON_UNESCAPED_UNICODE));
fclose($fp);
