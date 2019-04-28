function checkPassword() {
	let pass = $("#password").val();
	let retype = $("#retype-password").val();

	if (pass != retype) {
		$("#password-alert").removeClass("d-none");
	} else {
		$("#password-alert").addClass("d-none");
	}
}