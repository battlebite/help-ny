function toggleForm(e) {
	$registerForm = $(#register),
	$loginForm = $(#login);
	if (e=="register") {
		registerForm.css("display", "block");
		loginForm.css("display", "none");
	} else if (e="login") {
		registerForm.style.display = "none";
		loginForm.style.display = "block";
	}
}
