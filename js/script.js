function toggleForm(e) {
	var registerForm = document.querySelector("#register"),
			loginForm = document.querySelector("#login");
	if (e=="register") {
		registerForm.style.display = "block";
		loginForm.style.display = "none";
	} else if (e="login") {
		registerForm.style.display = "none";
		loginForm.style.display = "block";
	}