


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
    $_cookie_value "";
    ?>
    <h1>Guess the number</h1>
    <p>Guess a number between 1 and 10</p>

    <form action="index.php" method="post">
        <input placeholder="Name" type="text" name="name">
        <input placeholder="Guess" type="text" name="guess">
        <input type="submit" value="Guess">
    </form>
    <?php

    if( ! isset($_cookie["guess-target"])) {
        
        $target = rand(1, 10);
        echo "<br>";
        echo "cookie is not set!";
        echo "<br>";
        echo "target is $target";
        setcookie("guess-target", $target);


    }else{

        echo "Cookie is set!";
        echo "<br>";
        echo "Value is: " . $_COOKIE["guess-target"];
        echo "<br>";
        echo "value is: " . $_COOKIE["user-name"];
        echo "<br>";
        echo "<a href='index.php?clear=1'>remove cookies</a>";
    }

    ?>

</body>
</html>