function toggleForm(e) {
	var registerForm = $("#register");
	var loginForm = $("#login");
	if (e=="register") {
		registerForm.style.display = "block";
		loginForm.style.display = "none";
	} else if (e=="login") {
		registerForm.style.display = "none";
		loginForm.style.display = "block";
	}
}
