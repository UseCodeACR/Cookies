<?php

if ( isset($_GET["clear"])) {
    if( isset($_COOKIE["guess-target"])) {
        setcookie("guess-target", "", time() - 100);
        setcookie("user-name", "", time() - 100);
        header("Location: http//localhost/projects/cookies/index.php");
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
    
    <?php

    if( ! isset($_cookie["guess-target"])) {
        
        echo "Welcome to the guessing game!";
        echo "<br>";
        echo "cookie if not set!";

        $seconds_in_one_day = 60 * 60 * 24;
        setcookie("guess-target", "13", time() + $seconds_in_one_day);
        setcookie("user-name", "John", time() + $seconds_in_one_day);

    }else{

        echo "Cookie is set!";
        echo "<br>";
        echo "Value is: " . $_COOKIE["guess-target"];
        echo "<br>";
        echo "value is: " . $_COOKIE["user-name"];
        echo "<br>";
        echo "<a href='index.php?clear=true'>Clear cookies</a>";
    }


</body>
</html>