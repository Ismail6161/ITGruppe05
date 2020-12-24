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
	Kundennummer: {
		string: true,
		maxlength: 50
	},
	EMail: {
		string: true,
		maxlength: 50
	},
	_User_uid: {
		string: true
	},
	_User_uid_identifier: {
		string: true,
		maxlength: 50
	}
}
});
