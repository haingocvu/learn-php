<?php
if(isset($_COOKIE["username"])){
    if(isset($_POST["logout"])){
        setcookie("username", "", time() - 5*60, "/");
        //because cookie embeds on user's computer, we must to refresh page to see result.
        header("Refresh:0");
    }else{
        echo "welcome: ".$_COOKIE["username"];
    }
}elseif(isset($_POST["submit"])){
    $username = "trantuyen";
    $password = "iloveyou";
    if($_POST["username"] == $username && $_POST["password"] == $password){
        setcookie("username", $username, time() + 5*60, "/");
        //because cookie embeds on user's computer, we must to refresh page to see result.
        header("Refresh:0");
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
    <?php if(!isset($_COOKIE["username"])): ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="username" placeholder="name">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit" value="login">
    </form>
    <?php endif; ?>
    <?php if(isset($_COOKIE["username"])): ?>
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="submit" name="logout" value="logout">
    </form>
    <?php endif; ?>
</body>
</html>