<?php
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if(isset($_POST["submit"])){
    //test input
    if(empty($_POST["name"])){
        $nameErr = "name is required";
    }else{
        $name = testInput($_POST["name"]);
        if(!preg_match("/^[a-zA-Z ]*$/", $name)){
            $nameErr = "Only letters and white space allowe";
        }
    }
    if(empty($_POST["email"])){
        $emailErr = "email is required";
    }else{
        $email = testInput($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "not a valid email";
        }
    }
    if(empty($_POST["website"])){
        $website = "";
    }else{
        $website = testInput($_POST["website"]);
        if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)){
            $websiteErr = "not a valid url";
        }
    }
    if(empty($_POST["comment"])){
        $comment = "";
    }else{
        $comment = testInput($_POST["comment"]);
    }
    if(empty($_POST["gender"])){
        $genderErr = "gender is required";
    }else{
        $gender = testInput($_POST["gender"]);
    }
}
function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?= $name ?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?= $email ?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?= $website ?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?= $comment ?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female" <?php if(isset($gender) && $gender == 'female') echo 'checked' ?>>Female
  <input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender == 'male') echo 'checked' ?>>Male
  <input type="radio" name="gender" value="other" <?php if(isset($gender) && $gender == 'other') echo 'checked' ?>>Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</body>
</html>