<?php include '../connect.php';?>
<nav class="navbar-style navbar navbar-expand-md navbar-dark bg-dark fixed-top ">

       <a class="navbar-brand" href=#>
        <img class="site-logo image-style-none" itemprop="logo" typeof="foaf:Image" src="../element/edx-logo-header.png" alt="edX Home Page"> EDX
        </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="http://nhattx.learnphp.tinhvan.com/pages/mainpage.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Course</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                   <?php 
                        $sql_list_subject = "SELECT name FROM subject";
                        $result = mysqli_query($conn,$sql_list_subject);
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<a class="dropdown-item" href="#">' . $row['name'] .'</a>';
                        }
                        //mysqli_close($conn);
                    ?>
                </div>
            </li>
        </ul>

        <form class="form-search form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
            <button onclick="location.href = 'http://nhattx.learnphp.tinhvan.com/pages/login.php';" type="button" class="btn btn-default btn-xs">Login</button>
            <button onclick="location.href = 'http://nhattx.learnphp.tinhvan.com/pages/regis.php';" type="button" class="btn btn-primary btn-xs">Register</button>
          </ul>
    </div>
</nav>
