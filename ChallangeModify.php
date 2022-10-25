<?php
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
    <h2 style="text-align: center;">Modify Challenge</h2>
    <br>


    <form method="POST" action="">
        <div class="form-group">
            <?php
            ini_set('display_errors', '0');


            require 'function.php';

            try {
                if (isset($_POST['Modify_btn'])) {
                    $chellangeNum = $_POST['Modify_btn'];

                    $con = connection();
                    $sql = "SELECT * FROM challenge where challenge_num =" . $chellangeNum . "";
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
            <label for="Challenge">Challenge Number</label>
            <?php
            if ($count > 0) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            }

            echo
            '<input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Challenge Number" name="ChallengeNumber"
            value="' . $row['challenge_num'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="ChallengeName">Challenge Name</label>
            <?php
            echo
            '<input type="text" class="form-control" id="" placeholder="Challenge Name" name="ChallengeName" 
            value="' . $row['challenge_name'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="level">Challenge Level</label>
            <?php
            echo
            '<input type="text" class="form-control" placeholder="Challenge Level" name="ChallengeLevel" 
            value="' . $row['challenge_level'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="Date">Challenge Date</label>
            <?php
            echo
            '
            <input type="date" class="form-control" placeholder="Challenge Level" name="ChallengeDate"
            value="' . $row['challenge_date'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="Date">Challenge Deadline</label>
            <?php

            echo
            '
            <input type="date" class="form-control" placeholder="Challenge Level" name="ChallengeDeadline" 
            value="' . $row['Deadline'] . '">
            ';
            ?>
        </div>

        <div class="form-group">
            <label for="Date">Challenge Points</label>
            <?php

            echo
            '
            <input type="number" class="form-control" placeholder="Challenge Level" name="Points" 
            value="' . $row['Points'] . '">
            ';
            ?>
        </div>




        <button type="submit" class="btn btn-info" name="saveButton">Save Changes</button>
        <button class="btn btn-secondary"> 
            <a href="ManageChallenges.php" style="color: white;">
                Back
            </a>
        </button>

        <?php

        try {
            echo '<script language="javascript">';
            echo 'alert(Challenge Number ' . $ChallengeNumber . ' Updated successfully)';
            echo '</script>';

            $con = connection();
            if (isset($_POST['ChallengeNumber'])) {
                // delete challenge 
                $ChallengeNumber = $_POST['ChallengeNumber'];
                $sql = "UPDATE challenge SET challenge_num=?,challenge_name=?,challenge_level=?,challenge_date=?,Deadline=?,Points=? WHERE challenge_num=?;";

                $stm = $con->prepare($sql);
                $stm->bind_param(
                    'sssssss',
                    $ChallengeNumber,
                    $_POST['ChallengeName'],
                    $_POST['ChallengeLevel'],
                    $_POST['ChallengeDate'],
                    $_POST['ChallengeDeadline'],
                    $_POST['Points'],
                    $ChallengeNumber
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