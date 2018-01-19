<?php
    function list_course($sql) {
        include '../connect.php';
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
            echo '<div class="col-md-3 course-list">
                    <a class="course-a" href="http://nhattx.learnphp.tinhvan.com/pages/course_detail.php?q=' . $row['id'] . '">'. $row['name'] . '
                    </a>
                </div>';
            }
        } else { echo "No course"; }
        mysqli_close($conn);
    }
?>
