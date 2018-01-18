<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <?php 
    $secret_key = 'mysecretkey';
    include '../include/navigation.php';?>
    <div class="pg-container">
        <form class="fmt-form" method="post" action="">
            <table border="0" cellpadding="10" cellspacing="0">
                <tr>
                    <td>Username</td>
                    <td><input type="text" id="username" name="username" value="" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" id="password" name="password" value="" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="button" onclick="loadDoc()">Login</button>
                        <input type="reset" name="submit" value="Clear" />
                    </td>
                </tr>
            </table>
        </form>
        <div id="showerror"></div>
    </div>
    <script language="javascript">
        function loadDoc() {
            $('#showerror').html('');

            var username = $('#username').val();
            var password = $('#password').val();

            // Kiểm tra dữ liệu có null hay không
            if ($.trim(username) == '') {
                alert('Please enter your username.');
                return false;
            }

            if ($.trim(password) == '') {
                alert('Please enter your password');
                return false;
            }

            str_send = "";
            str_send += "username=" + username + "&" + "password=" + password;
            str_send += "&" + "secret_key=" + "<?php echo $secret_key ?>";
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var mydata = JSON.parse(this.responseText);
                    if (mydata.status == 1) {
                        redirectPost("http://nhattx.learnphp.tinhvan.com/pages/mainpage.php", mydata);
                    } else { 
                        document.getElementById("showerror").innerHTML = mydata.mess;
                    }
                }
            };
            xhttp.open("POST", "http://simple.sso.tinhvan.com/login.php", true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(str_send);
        }
        function redirectPost(url, data) {
            var form = document.createElement('form');
            document.body.appendChild(form);
            form.method = 'post';
            form.action = url;
            for (var name in data) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = name;
                input.value = data[name];
                form.appendChild(input);
            }
            form.submit();
        }
    </script>
    <!--footer -->
    <?php include '../include/footer.html';?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>

</html>