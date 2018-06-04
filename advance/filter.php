<?php
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $email = filter_var(filter_var($email, FILTER_SANITIZE_EMAIL), FILTER_VALIDATE_EMAIL);
    if($email){
        echo "valid email";
    }else{
        echo "invalid email";
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
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        <input type="text" name="email" placeholder="enter email">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>