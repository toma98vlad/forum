<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>

<?php
session_start();

if(isset($_SESSION['user_logged'])) {
    header('Location: ../index.php');
}
?>

<div class="login_wrapper">
    <div class="login_title">
        Sign in to proceed
    </div>
    <div class="login_container">
        <form action="../../app/controller/user_actions/login.php" method="POST">
            <input class="login_field" type="text" name="username_login" placeholder="Username" autocomplete="off" autofocus><br>
            <input class="login_field" type="password" name="password_login" placeholder="Password" autocomplete="off"><br>
            <input class="login_button" type="submit" name="submit_login" value="Sign in">
        </form>
    </div>
</div>

</body>
</html>