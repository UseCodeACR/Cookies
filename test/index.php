<?php

if(isset($_GET["clear"])){
    if(isset($_COOKIE["guess-target"])){
        setcookie("guess-target", "", time() - 100);
        setcookie("user-name", "", time() - 100);
        header("Location: cookiegame.php");
        die();
    }
}