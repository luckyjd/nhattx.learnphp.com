<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>HOME LEARNPHP</h1>
        <?php 
        //include('connect.php');
        if (!empty($_SESSION["username"]) &&
                !empty($_SESSION["token"]) &&
                !empty($_SESSION["timeout"]) &&
                $_SESSION["timeout"] > time()){
                    echo "SESSION TIMEOUT : ". $_SESSION["timeout"] . "<br>";
                    echo "TOKEN : " . $_SESSION["token"] . "<br>";
                    echo "Xin chào " . $_SESSION['username'] . ". Bạn đã đăng nhập thành công.";
            } else {
                echo 'Bạn chưa đăng nhập';
            }
        ?>
    </body>
</html>