<?php

echo "Hello World";

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
    echo "value is: " . $_COOKIE[$cookie_value];
    echo "<br>";
    echo "<a href='cookiegame.php?clear=1'>remove cookies</a>";
}

?>