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
	created_id: {
		string: true
	},
	modified_id: {
		string: true
	},
	owner_id: {
		string: true
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
