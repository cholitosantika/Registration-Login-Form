# Registration Login Form PHP
## 1. Project Summary
A registration and login form created using PHP, HTML, CSS and JSON database.  In this project, users will register using email, username and password which will be stored in the JSON database.  After registering, the user will log in using the registered email and password which will then be redirected to the login home page.

## 2. User Demo
In this project, 1 account has been created to log in.

Username : user1

E-mail : user1@example.com

password : password

## 3. Project Features
### a. Style (CSS)
The page display style in this project is set using CSS which is stored in the style.css file.

### b. Databese (JSON)
The database used is a JSON database with the name data.json.  data.json stores user information in the form of email, username and encrypted password.

### c. Config (PHP)
Config is a php file that stores functions used in the Registration Login Form project in the form of php functions.

### d. Index (PHP+HTML)
![index display](/img/index.png)
Index is the initial display when running a PHP program.  On the Index page, users will be given two buttons that direct to the registration page or login page.

### e. Registration Page (PHP+HTML)
![registration display](/img/registration.png)
From the index page, new users will be directed to the registration page where the new user will create a new account using email and password.  On this page the user will fill in 3 forms consisting of: email, username and password.  After registering, the information that has been entered will be saved in the data.json database.

### f. Login Page (PHP+HTML)
![login display](/img/login.png)
The login page can be accessed via the index page or redirected from the registration page after successful registration.  On this page the user will enter the email and password used in registration and then after pressing login they will be directed to the login home page.

### g. Home Login Page (PHP+HTML)
![home login display](/img/loginhome.png)
After logging in, the user will be redirected to the Home Login Page.  This page can only be accessed if you are logged in.  This page contains user information in the form of username and email. There is a log out button that after clicked users will logout and must login again.
