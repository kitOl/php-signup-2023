<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sign Up 2023</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <h3>Login</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password" autocomplete="off">
        <button>Login</button>
    </form>

    <h3>Signup</h3>
    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_inputs();
        ?>
        <button>Signup</button>
    </form>

    <?php
    check_signup_errors();
    ?>

</body>

</html>