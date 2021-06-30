<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="design.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['name'])) {
        $name = stripslashes($_REQUEST['name']);    // removes backslashes
        $name = mysqli_real_escape_string($con, $name);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE name='$name'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['name'] = $name;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Name/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" autofocus="true"/>
        <input type="email" class="login-input" name="email" placeholder="Email"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="registration.php">New Registration</a></p>
  </form>
<?php
    }
?>
</body>
</html>