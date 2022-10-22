<?php
include 'tamplate.php';
ini_set('display_errors', '0');

Admin_header();
admin_nav();
manageChallengeTableHeader();

require 'function.php';
$con = connection();
$sql = "SELECT * FROM result";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
mysqli_close($con);

?>


<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <h2 style="text-align: center;">Results</h2>
    <br>
    <table class="table table-bordered col mb-5" id="table-list">
        <thead>
            <tr>
                <th style="text-align: center;">Student Name</th>
                <th style="text-align: center;">Challenge Number</th>
                <th style="text-align: center;">Challenge Name</th>
                <th style="text-align: center;">Points</th>
                <th style="text-align: center;" colspan="2">Modify</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $index = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo
                '<tr style="text-align:center;">
                    <td class ="ChallengeNum">' . $row['stname'] . '</td>
                    <td>' . $row['challenge_num'] . '</td>
                    <td>' . $row['challenge_name'] . '</td>
                    <td>' . $row['point'] . '</td>
                    <td> 
                    <form action="" method="POST">
                            <abbr title="Delete Challenge">
                                 <button class="btn btn-danger" value="' . $row['challenge_num'] . '" name="Delete_button" onclick="confirm("Are you sure ?")">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                        </svg>
                                </button>
                                </abbr>
                        </form>
                    </td>

                    <td>
                    <form action="ModifyResults.php" Method="POST">
                    <abbr title="Modify Challenge">
                    <input value="' . $row['stname'] . '" hidden name="STNAME">
                            <button class="btn btn-warning" value="' . $row['challenge_num'] . '" id="M_btn" name="Modify_btn" data-target="#ModifyModal" data-toggle="modal" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                     <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>
                             </button>
                    </abbr>
                    </form>

                    </td>

                </tr>';
                $index++;
            }



            try {

                if (isset($_POST['Delete_button'])) {
                    // delete challenge 
                    $ChallengeNumber = $_POST['Delete_button'];


                    $sql = "DELETE FROM result WHERE challenge_num = ?;";

                    $con = connection();
                    $stm = $con->prepare($sql);
                    $stm->bind_param('s', $ChallengeNumber);
                    $stm->execute();

                    mysqli_close($con);

                    echo '<script language="javascript">';
                    echo 'alert(Challenge Number ' . $ChallengeNumber . ' Deleted successfully)';
                    echo '</script>';
                }
            } catch (Exception $s) {
                echo '<script language="javascript">';
                echo 'alert("' . $s->getMessage() . '")';
                echo '</script>';
            }

            mysqli_close($con);

            ?>
        </tbody>

    </table>

    <br>
    <br>


    <?php
    if (!empty($_SESSION['userRole'])) {

        if ($_SESSION['userRole'] == "Faculty") {
            echo
            '
            <button type="button col" class="btn btn-info">
                <a style="color:White;" href="faculty.php">Back</a>
            </button>
            ';
        }
    } else {
        echo
        '
            <button type="button col" class="btn btn-info">
                <a style="color:White;" href="admin.php">Back</a>
            </button>
    
            ';
    }
    ?>


    <?php

    footer();
    ?>
</div>