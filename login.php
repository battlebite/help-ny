<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/help-ny.css">
    <script type="text/javascript" src="js/login.js"></script>
    <title>Login/Register</title>
  </head>
  <body>
    <div class="modal-dialog">

      <!-- Login -->
			<div id="login" class="loginmodal-container">
        <form>
  				<h1>Login to Your Account</h1><br>
  				<input type="text" name="user" placeholder="Username">
  				<input type="password" name="pass" placeholder="Password">
  				<input type="submit" name="login" class="login loginmodal-submit" value="Login">
			  </form>
        <button onclick='toggleForm("register")'>Register</button> - <button>Forgot Password</button>
			</div>

      <!-- Register -->
      <div id="register" class="loginmodal-container">
        <form>
          <h1>Register</h1><br>
          <input type="text" name="user" placeholder="Username">
          <input type="password" name="pass" placeholder="Password">
          <input type="text" name="email" placeholder="Email">
          <input type="text" name="highschool" placeholder="High School You Currently attend">
          <input type="submit" name="login" class="login loginmodal-submit" value="Register">
        </form>
        <button onclick='toggleForm("login")'>Have an account? Login</button>
      </div>

      <div class="login-help"></div>
	  </div>

    <!-- Register form -->
    <div class="modal-dialog">
      
    </div>

  </body>
</html>
