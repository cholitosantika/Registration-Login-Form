<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
</head>
<body>
    <div class="container">
        <h1>Registration</h1>

        <!-- Form Section -->
        <form id="register" action="" method="post">
          <input name="submitted" id="submitted" type="hidden" value="registration" >
          
            <div class="form-group">
                <label id="username-label" for="username">Username</label>
                <input type="username" name="username" id="username" placeholder="Enter your Usename" required />
            </div>

            <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your Email" required />
            </div>

            <div class="form-group">
                <label id="password-label" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your Password" required />
            </div>

            <div class="form-group">
                <button type="submit" id="submit" class="submit-button"> Register
                </button>
            </div>
        </form>
    </div>
</body>
</html>
