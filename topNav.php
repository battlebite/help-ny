<div id="shadowOverlay">
</div>
<?php include 'login.php' ?>
<nav id="topNav" class="navbar bg-primary">
  <a class="navbar-brand" href="home.php">Help NY</a>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="color:white" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="" href="checklist.php">Checklist</a>
      </li>
      <li class="nav-item">
        <a href="statistics.php">Statistics</a>
      </li>
      <li id="navLogin" class="nav-item">
        Login
      </li>
    </ul>
  </div>
</nav>

<script>
  $('#navLogin').click(function() {
    // Make login show and shadow the screen
    var shadow = $('#shadowOverlay');
    var login = $('.login-container');
    shadow.css("display", "block");
    login.css("display", "block");
    console.log("Login function called");

});
  $('#shadowOverlay').click(function() {
    // Make login go away
    var shadow = $('#shadowOverlay');
    var login = $('.login-container');
    shadow.css("display", "none");
    login.css("display", "none");
  });
</script>