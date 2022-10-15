<?php
include 'tamplate.php';
Admin_header();
admin_nav();
manageChallengeTableHeader();

require 'function.php';
$con = connection();
$sql = "SELECT * FROM challenge";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);

?>


<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
    <h2 style="text-align: center;">Challenges</h2>
    <br>
    <table class="table table-bordered col mb-5" id="table-list">
        <thead>
            <tr>
                <th style="text-align: center;">Challenge Number</th>
                <th style="text-align: center;">Challenge Name</th>
                <th style="text-align: center;">Challenge Level</th>
                <th style="text-align: center;">Points</th>
                <th style="text-align: center;">Challenge Date</th>
                <th style="text-align: center;">Deadline</th>
                <th style="text-align: center;" colspan="2">Modify</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $index = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo
                '<tr style="text-align:center;">
                    <td class ="ChallengeNum">' . $row['challenge_num'] . '</td>
                    <td>' . $row['challenge_name'] . '</td>
                    <td>' . $row['challenge_level'] . '</td>
                    <td>' . $row['Points'] . '</td>
                    <td>' . $row['challenge_date'] . '</td>
                    <td>' . $row['Deadline'] . '</td>
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
                    <form action="ChallangeModify.php" Method="POST">
                    <abbr title="Modify Challenge">
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
                    $sql = "DELETE FROM challenge WHERE challenge_num = ?;";

                    $stm = $con->prepare($sql);
                    $stm->bind_param('s', $ChallengeNumber);
                    $stm->execute();

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

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
        Add New Challenge
    </button>

    <button type="button col" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
        <a style="color:White;" href="challenges.php">Go</a>
    </button>

    
    <button type="button col" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
        <a style="color:White;" href="admin.php">Back</a>
    </button>




    <!-- Add New CHallenges Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Challenges</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Challenge Number</label>
                            <input type="number" class="form-control" name="Challenge_num" aria-describedby="emailHelp" placeholder="Enter Challenge number">
                        </div>

                        <div class="form-group">
                            <label for="ChallemgeName">Challenge Name</label>
                            <input type="text" class="form-control" placeholder="Challenge Name" name="Ch_n">
                        </div>

                        <div class="form-group">
                            <label for="ch_level">Challenge Level</label>
                            <input type="text" class="form-control" id="ch_level" placeholder="Challenge level" name="Challenge_Level">
                        </div>


                        <div class="form-group">
                            <label for="ch_level">Challenge Points</label>
                            <input type="number" class="form-control" id="ch_level" placeholder="Challenge Points" name="Challenge_Poitns">
                        </div>


                        <div class="form-group">
                            <label for="ch_level">Challenge Date</label>
                            <input type="date" class="form-control" id="ch_level" placeholder="Challenge date" name="Challenge_date">
                        </div>


                        <div class="form-group">
                            <label for="ch_level">Challenge Deadline</label>
                            <input type="date" class="form-control" id="ch_level" placeholder="Challenge deadline" name="Challenge_Deadline">
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>

                        <?php
                        ini_set('display_errors', '0');

                        if ($_SERVER['REQUEST_METHOD'] == "POST") {
                            if (isset($_POST['Challenge_num'])) {


                                $challengeNum = $_POST['Challenge_num'];
                                $challengeName = $_POST['Ch_n'];
                                $challengeLevel = $_POST['Challenge_Level'];
                                $challengePoints = $_POST['Challenge_Poitns'];
                                $challengeDate  = date("Y-m-d", strtotime($_POST['Challenge_date']));
                                $challengeDeadLine = date("Y-m-d", strtotime($_POST['Challenge_Deadline']));

                                $con = connection();
                                $sql = "INSERT INTO challenge(challenge_num, challenge_name, challenge_level, challenge_date, Deadline, Points) VALUES 
                                (?,?,?,?,?,?)";

                                $stm = $con->prepare($sql);
                                $stm->bind_param('ssssss', $challengeNum, $challengeName, $challengeLevel, $challengeDate, $challengeDeadLine, $challengePoints);
                                $stm->execute();
                            }
                        }

                        ?>
                    </form>
                </div>



            </div>
        </div>
    </div>
    <!-- ******** END ADD NEW CHALLENGE MODEL ********* -->








</div>
<br>

<?php

footer();
?>