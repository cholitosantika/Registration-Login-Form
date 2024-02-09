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
        <header>
            <h1>Login</h1>
        </header>

        <!-- Form Section -->
        <form id="register" action="" method="post">
            <input name="submitted" id="submitted" type="hidden" value="login" />

            <div class="form-group">
                <label id="username-label" for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Enter your Usename" required />
            </div>
            <br />
            <div class="form-group">
                <label id="password-label" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your Password" required />
            </div>
            <br />
            <div class="form-group">
                <button type="submit" id="submit" class="submit-login"> <h2>Login</h2>
                </button>
            </div>
        </form>
        <br />
        <p>Don't have an account yet? <a href="registration.php">Create one</a></p>
    </div>
</body>
</html>

