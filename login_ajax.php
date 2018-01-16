<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php
            $secret_key = "mysecretkey";
            if (!empty($_SESSION["username"]) &&
                !empty($_SESSION["token"]) &&
                !empty($_SESSION["timeout"]) &&
                $_SESSION["timeout"] > time()){
                    header("Location: http://nhattx.learnphp.tinhvan.com/home_learnphp.php");
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
                        echo "Go to <a href='home_learnphp.php'>Home page </a>";
                } else {
                    echo $_POST['error'] . '<br>';    
                    echo "<form action='http://simple.sso.tinhvan.com/login.php' method='POST'>
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
                        <input type='hidden' name='url_handle' value='http://nhattx.learnphp.tinhvan.com/login.php'>
                        <input type='hidden' name='secret_key' value='mysecretkey'>
                        <input type='submit' value='Login' />
                        <a href='regis.php' title='Regis'>Registration on learnphp</a>
                    </form>"; 
                }
            } else {
    
                echo "<form action='http://simple.sso.tinhvan.com/login.php' method='POST'>
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
                    <input type='hidden' name='url_handle' value='http://nhattx.learnphp.tinhvan.com/login.php'>
                    <input type='hidden' name='secret_key' value='mysecretkey'>
                    <input type='submit' value='Login' />
                    <a href='regis.php' title='Regis'>Registration on learnphp</a>
                </form>"; 
            } 

        ?>
    </body>
</html>