<?php
include 'tamplate.php';
login_header();
login_nav();
?>


<br>
<br>
<br>
<br>
<br>
<div class="container">
    <h2 style="text-align: center;">Modify Result of Ranks</h2>
    <br>


    <form method="POST" action="">
        <div class="form-group">
            <?php
            ini_set('display_errors', '0');


            require 'function.php';

            try {
                if (isset($_POST['Modify_btn']) && isset($_POST['STNAME'])) {
                    $chellangeNum = $_POST['Modify_btn'];
                    $stname = $_POST['STNAME'];
                    $con = connection();
                    $sql = "SELECT * FROM result where challenge_num =" . $chellangeNum . " AND stname like'" . $stname . "';";
                    $result = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($result);



                    mysqli_close($con);
                }
            } catch (Exception $s) {
                echo '<script language="javascript">';
                echo 'alert("' . $s->getMessage() . '")';
                echo '</script>';
            }
            ?>
            <label for="sname">Student Name</label>
            <?php
            if ($count > 0) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            }

            echo
            '<input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Student Name" name="Sname"
            value="' . $row['stname'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="ChallengeName">Challenge Number</label>
            <?php
            echo
            '<input type="text" class="form-control" id="" placeholder="Challenge Name" name="S_cNumber" 
            value="' . $row['challenge_num'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="level">Challenge Name</label>
            <?php
            echo
            '<input type="text" class="form-control" placeholder="Challenge Name" name="S_cName" 
            value="' . $row['challenge_name'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="[Date]">Points</label>
            <?php
            echo
            '
            <input type="number" class="form-control" placeholder="Challenge Level" name="Spoint"
            value="' . $row['point'] . '">
            ';
            ?>
        </div>

        <div class="form-group">

        </div>




        <button type="submit" class="btn btn-info" name="saveButton">Save Changes</button>
        <button class="btn btn-secondary">
            <a href="ManageRanking.php" style="color: white;">
                Back
            </a>
        </button>

        <?php

        try {

            $con = connection();
            if (isset($_POST['ChallengeNumber'])) {
                // delete challenge 
                $Sname = $_POST['Sname'];
                $sql = "UPDATE result SET stname=?,challenge_num=?, point=?,challenge_name=? WHERE challenge_num=? and stname =? ;";

                $stm = $con->prepare($sql);
                $stm->bind_param(
                    'ssssss',
                    $Sname,
                    $_POST['S_cNumber'],
                    $_POST['S_cName'],
                    $_POST['Spoint'],
                    $_POST['S_cNumber'],
                    $Sname
                );
                $stm->execute();
                if (isset($_POST['saveButton'])) {
                    echo '<script language="javascript">';
                    echo 'alert(Challenge Number ' . $ChallengeNumber . ' Updated successfully)';
                    echo '</script>';
                }



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