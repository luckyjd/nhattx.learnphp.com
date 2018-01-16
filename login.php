<!DOCTYPE html>
<html>
    <head>
    <?php header("Access-Control-Allow-Origin: *"); ?>
        <title></title>
        <meta http-equiv="Content-Type" content="text/plain; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    </head>
    <body>
        <form method="post" action="">
            <table border="0" cellpadding="10" cellspacing="0">
                <tr>
                    <td>Username</td>
                    <td><input type="text" id="username" name="username" value=""/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" id="password" name="password" value=""/></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type='hidden' id='secret_key' value='mysecretkey'>
                        <button type="button" onclick="loadDoc()">Login</button>
                        <input type="reset" name="submit" value="Clear"/>
                    </td>
                </tr>
            </table>
        </form>
        <div id="showerror">BBBBBB</div>
        <script language="javascript">
            function loadDoc() {
                $('#showerror').html('');
 
                var username = $('#username').val();
                var password = $('#password').val();

                // Kiểm tra dữ liệu có null hay không
                if ($.trim(username) == ''){
                    alert('Please enter your username.');
                    return false;
                }

                if ($.trim(password) == ''){
                    alert('Please enter your password');
                    return false;
                }
                
                str_send = "";
                str_send += "username=" + username + "&" + "password=" + password;
                str_send += "&" + "secret_key=" + $('#secret_key').val();
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {
                   document.getElementById("showerror").innerHTML = this.responseText;
                  }
                };
                xhttp.open("POST", "http://simple.sso.tinhvan.com/login.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send(str_send);
              }
        </script>
    </body>
</html>