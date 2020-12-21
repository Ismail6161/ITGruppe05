$("#form_Position").validate({
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
	Anzahl: {
		integer: true,
		digits: true
	},
	Gesamtpreis: {
		currency: true
	},
	_Reservierung: {
		string: true,
		required: true
	},
	Speise_Bezeichnung: {
		string: true,
		maxlength: 50
	},
	_Speise: {
		string: true,
		required: true
	},
	_Reservierung_identifier: {
		string: true,
		maxlength: 50
	},
	_Speise_identifier: {
		string: true,
		maxlength: 50
	}
}
});
