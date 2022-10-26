<?php
session_start();
include 'tamplate.php';
Admin_header();
admin_nav();
?>


<br>
<br>
<br>
<br>
<br>
<div class="container">
    <h2 style="text-align: center;">Modify Students</h2>
    <br>


    <form method="POST" action="">
        <div class="form-group">
            <?php


            require 'function.php';

            $count = 0;
            try {
                if (isset($_POST['Modify_btnn'])) {
                    $SSID = $_POST['Modify_btnn'];
                    $_POST =  array();

                    $con = connection();
                    $sql = "SELECT * FROM student where id =" . $SSID . ";";
                    $result = mysqli_query($con, $sql);
                    if (!empty($result)) {
                        $count = mysqli_num_rows($result);
                    } else
                        $count = 0;
                    mysqli_close($con);
                }
            } catch (Exception $s) {
                echo '<script language="javascript">';
                echo 'alert("' . $s->getMessage() . '")';
                echo '</script>';
            }
            ?>
            <label for="Challenge">Students ID</label>
            <?php
            if ($count > 0)
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            ?>


            <input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="ID" name="StudentID" value="<?php echo $row['id']; ?>">


        </div>

        <div class="form-group">
            <label for="ChallengeName">Full Name</label>
            <input type="text" class="form-control" id="" placeholder="Full Name" name="sfullname" value="<?php echo $row['full_name'] ?>">
        </div>

        <div class="form-group">
            <label for="level">Student Name</label>
            <input type="text" class="form-control" placeholder="Student Name" name="Sname" value="<?php echo $row['stname']; ?>">
        </div>

        <div class="form-group">
            <label for="Date">University ID</label>
            <input type="number" class="form-control" placeholder="Univeristy ID" name="UniversityID" value="<?php echo $row['uni_id']; ?>">
        </div>

        <div class="form-group">
            <label for="Date">Major</label>
            <input type="text" class="form-control" placeholder="Major" name="StudentMajor" value="<?php echo $row['major']; ?>">
        </div>

       

        <div class="form-group">
            <label for="Date">Date of Birth</label>

            <input type="date" class="form-control" placeholder="Date of Birth" name="studentDB" value="<?php echo $row['date_birth']; ?>">
        </div>

        <div class="form-group">
            <label for="Date">University Level</label>
            <input type="text" class="form-control" placeholder="Challenge Level" name="UniversityLevel" value="<?php echo $row['uni_level']; ?>">
        </div>




        <button type="submit" class="btn btn-info" name="ssaveButton">Save Changes</button>
        <button class="btn btn-secondary">
            <a href="ManageUsers.php" style="color: white;">
                Back
            </a>
        </button>

        <?php
        
        try {

            $con = connection();

            if (isset($_POST['ssaveButton'])) {
                
                $sql = "UPDATE student set full_name =?, stname=?, uni_id=?, major=?, date_birth=?, uni_level=? where id =?";
                $stm = $con->prepare($sql);
                $stm->bind_param('sssssss',
                                 $_POST['sfullname'],
                                 $_POST['Sname'],
                                 $_POST['UniversityID'],
                                 $_POST['StudentMajor'],
                                 $_POST['studentDB'],
                                 $_POST['UniversityLevel'],
                                 $_POST['StudentID']);
                $stm->execute();

                echo '<script language="javascript">';
                echo 'alert("' . $_POST['sfullname'] . ' update ")';
                echo '</script>';

                $url = "ManageUsers.php";
                echo '<script language="javascript">window.location.href ="' . $url . '"</script>';

                if ($stm->error) {
                    echo "FAILURE!!! " . $stm->error;
                  }
                  else echo "Updated {$stm->affected_rows} rows";
                exit();
            
            } 
        } catch (Exception $s) {
            echo '<script language="javascript">';
            echo 'alert("' . $s->getMessage() . '")';
            echo '</script>';
        }
        ?>
    </form>






</div>