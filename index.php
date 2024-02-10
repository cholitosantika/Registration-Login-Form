<?php 
session_start();

if (!empty($_SESSION['email'])) {
    header("location:home.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <div class="container">
        <header>
            <h1>Welcome!!</h1>
        </header> 
        <button class="link-login" onclick="window.location.href='login.php';">
            <h2>Login</h2>
        </button>
        <br />
        <button class="link-register" onclick="window.location.href='registration.php';">
            <h2>Registration</h2>
        </button>

    </div>
  </body>
</html>
