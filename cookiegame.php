<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $cookie_name = "user";
    $cookie_value = rand(1, 10);
    setcookie($cookie_name, $cookie_value, time() - 1000); // 86400 = 1 day


    ?>
</body>
</html>