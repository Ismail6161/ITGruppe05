$("#form_Kunde").validate({
rules: {
	id: {
	},
	c_ts: {
		string: true
	},
	m_ts: {
		string: true
	},
	identifier: {
		string: true,
		maxlength: 50
	},
	Datum: {
		string: true
	},
	Uhrzeit: {
		float: true,
		float: true
	},
	Tischvergabe: {
		integer: true,
		digits: true
	},
	Gesamtbetrag: {
		currency: true
	},
	Coronaadaten: {
	},
	_Kunde: {
		string: true,
		required: true
	},
	Coronaadaten_Vorname: {
		string: true,
		maxlength: 50
	},
	Coronaadaten_Nachname: {
		string: true,
		maxlength: 50
	},
	Coronaadaten_Wohnort: {
		string: true,
		maxlength: 50
	},
	Coronaadaten_Plz: {
		integer: true,
		digits: true
	},
	Coronaadaten_Straße: {
		string: true,
		maxlength: 50
	},
	Coronaadaten_HNr: {
		integer: true,
		digits: true
	},
	Coronaadaten_Telefonnummer: {
		integer: true,
		digits: true
	},
	_Kunde_identifier: {
		string: true,
		maxlength: 50
	}
}
});
