<?php
if(isset($_POST["logout"])){
    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
        //header("Refresh:0");
    }
}elseif(isset($_POST["submit"])){
    $username = "trantuyen";
    $password = "iloveyou";
    if($_POST["username"] == $username && $_POST["password"] == $password){
        $_SESSION["username"] = $username;
        //header("Refresh:0");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php if(!isset($_SESSION["username"])): ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="username" placeholder="name">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="login">
    </form>
    <?php endif; ?>
    <?php if(isset($_SESSION["username"])): ?>
    <?= "welcome: ".$_SESSION["username"]; ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="submit" name="logout" value="logout">
    </form>
    <?php endif; ?>
</body>
</html>