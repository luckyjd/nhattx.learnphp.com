<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="">

        <title>Nhattx1</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <?php include 'navigation.php';?>
        <?php
            $secret_key = "mysecretkey";
            $render_html = "<form action='http://simple.sso.tinhvan.com/login.php' method='POST'>
                    <table cellpadding='0' cellspacing='0' border='1'>
                        <tr>
                            <td>
                                Username :
                            </td>
                            <td>
                                <input type='text' name='username' />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password :
                            </td>
                            <td>
                                <input type='password' name='password' />
                            </td>
                        </tr>
                    </table>
                    <input type='hidden' name='url_handle' value='http://nhattx.learnphp.tinhvan.com/pages/login.php'>
                    <input type='hidden' name='secret_key' value='mysecretkey'>
                    <input type='submit' value='Login' />
                    <a href='../regis.php' title='Regis'>Registration</a>
                </form>";
            if (!empty($_SESSION["username"]) &&
                !empty($_SESSION["token"]) &&
                !empty($_SESSION["timeout"]) &&
                $_SESSION["timeout"] > time()){
                    header("Location: http://nhattx.learnphp.tinhvan.com/pages/mainpage.php");
                    exit();
            }

            if (isset($_POST['username']) &&
               isset($_POST['token']) &&
               isset($_POST['error']) &&
               isset($_POST['expire']) &&
               isset($_POST['secret_key']) &&
               $_POST['secret_key'] == $secret_key){
            
                if ($_POST['error'] == "pass"){
                        $_SESSION["username"] = $_POST['username'];
                        $_SESSION["token"] = $_POST['token'];
                        $_SESSION["timeout"] = time() + $_POST['expire'];
                        echo $_POST['username'] . "login success";
                        echo "Go to <a href='.mainpage.php'>Home page </a>";
                } else {
                    echo $_POST['error'] . '<br>';    
                    echo $render_html;
                }
            } else {
    
                echo $render_html;
            } 

        ?>
        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    </body>
</html>