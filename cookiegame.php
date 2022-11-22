<?php

if(isset($_GET["clear"])){
    if(isset($_COOKIE["user"])){
        setcookie("user", "", time() - 10);
        setcookie("userguess", "", time() - 10);
        header("Location: cookiegame.php");
        die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>


    <h1>Guess the number</h1>
    <form action="cookiegame.php" method="post">
        <input placeholder="Name" type="text" name="name">
        <input placeholder="Guess" type="text" name="guess">
        <input type="submit" value="Guess" >
    </form>

    <?php

    $cookie_name = "user";
    $cookie_value = $_POST["name"];
    $cookie_name_guess = "userguess";
    $cookie_value_guess = $_POST["guess"];
    $target_value_name = "targetvalue";
    $target_value = rand(1, 10);

    if( ! isset($_COOKIE[$cookie_name_guess])) {
        echo "Cookie is not set!";
        echo "<br>";
        echo "target is $target_value";
        setcookie($cookie_name, $cookie_value);
        setcookie($cookie_name_guess, $cookie_value_guess);
        setcookie($target_value_name, $target_value);
    }else{
        echo "Cookie is set!";
        echo "<br>";
        echo "Value is: " . $_COOKIE[$cookie_name_guess];
        echo "<br>";
        echo "Target is: " . $_COOKIE[$target_value_name];
        echo "<br>";
        echo "<a href='cookiegame.php?clear=1'>remove cookies</a>";
    }

    if( $_COOKIE[$cookie_name_guess] == $_COOKIE[$target_value_name]) {
        echo "You guessed it right!";
    }else{
        echo "You guessed it wrong!";
    }

    //
    ?>
    
</body>
</html>

