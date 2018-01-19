<?php
    function show_detail($id) {
        include '../connect.php';
        $sql = "SELECT * from course where id='{$id}'";
        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
?>
    <div class="pg-all-content">
        <div class="pg-content">
            <div class="col-md-8 pg-head-left-content ">
                <div class="img-des col-md-5">
                    <img style="border-radius: 8px;" src="../element/course2.png" alt="<?php echo $row['name']; ?>">
                </div>
                <div class="course-des col-md-7"><?php echo $row['name']; ?></div>

            </div>
            <div class="col-md-4 pg-head-right-content ">
                <button class="btn btn-success btn-enroll">Enroll Now</button>
            </div>
        </div>
        <div class="pg-content">
            <div class="pg-main-left-content col-md-8"></div>
            <div class="pg-main-right-content col-md-4"></div>
        </div>
    </div>
    <?php
            }
        } else { echo "This course is not exist anymore"; }
        mysqli_close($conn);
    }
?>
