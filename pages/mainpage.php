<!DOCTYPE html>
<html lang="en">
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
    <?php include '../connect.php';?>
    <?php include 'navigation.php';?>
    <div id="container">
        <div id="menu">
        </div><!--#menu-->
        <div id="content">
            <div id="header">
                <div id="logo"></div>
                <div id="slogan"></div>
            </div><!--#header-->
            <div class="call-to-action">
            </div><!--.call-to-action-->
            <div class="row">
               <?php 
                $sql_list_subject = "SELECT name FROM subject LIMIT 5";
                $result = mysqli_query($conn,$sql_list_subject);
                while($row = mysqli_fetch_assoc($result)){
                    echo '<div class="col-md-3 subject-list">
                            <a class="subject-a" href="#">'. $row['name'] . '
                            </a>
                        </div>';
                }
                mysqli_close($conn);
                ?>
            </div>
        </div><!--#content-->
        <div id="footer">
            <p>nhattx.learnphp.tinhvan.com - Test Footer site</p>
        </div><!--#footer-->
 
    </div><!--#container-->
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


</body>
</html>