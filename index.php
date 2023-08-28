<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is logged in, redirect to dashbaord
if (isset($_SESSION['loggedin'])) {
    header('Location: dashboard.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php include('connect.php'); ?>
    <link rel="stylesheet" href="local/formStyles.css">
    <link rel="stylesheet" href="local/styles.css">

    <title>Charting Login</title>
</head>
<body>
    <body style="background-image: linear-gradient(to bottom right, #143058, #061126); height: 100vh; background-repeat: no-repeat; overflow: hidden;">
        
<div class="login-container">
    <div class="login-content">

        <div class="horizontal-group around">
            <img src="../assets/catalyst-logo-blue.png" alt="Catalyst Logo">
            <h1>Login</h1>
        </div>

        <form method="post" action="auth.php" name="Sign in">
            <div class="flex-form">
            <div class="horizontal-group">
                <input type="text" name="username-medical" placeholder="Username" id="login-username" required />
            </div>
            <div class="horizontal-group">
                <input type="password" name="password-medical" placeholder="Password" id="login-password" required/>
            </div>
            <button type="submit" name="login" value="login" class="login-submit glance-button">Log In</button>
            </div>
        </form>

    </div>
</div>