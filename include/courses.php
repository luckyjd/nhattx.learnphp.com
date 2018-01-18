<?php
    function list_course($sql) {
        include '../connect.php';
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
        echo '<div class="col-md-3 course-list">
                <a class="course-a" href="#">'. $row['name'] . '
                </a>
            </div>';
        }
        mysqli_close($conn);
    }
?>