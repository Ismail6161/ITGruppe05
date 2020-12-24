$("#loginform").validate({
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
		string: true
	},
	Passwort: {
		string: true,
		minlength: 4,
		maxlength: 12
	},
	Gruppe: {
	},
	Kennung: {
		string: true,
		maxlength: 50
	},
	roleid: {
		string: true
	},
	Gruppe_literal: {
		string: true
	}
}
});
