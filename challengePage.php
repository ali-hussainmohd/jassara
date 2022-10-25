<?php session_start();
include 'tamplate.php';
Admin_header();
admin_nav(); ?>

<body>
    <div class="container">
        <div class="row  h-75 d-inline-block pt-5 mb-5 mx-0 px-0"> </div> <!-- ***** ajust the space ***** -->

        <div class="alert" style="background-color: #18a4bc; color:white; width: 20%;" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
            </svg>

            <?php
            if (!empty($_SESSION['username'])) {
                $UserName = $_SESSION['username'];
                echo "<h5 style=display:inline> Hello, " . $UserName . "</h5>";
            }
            ?>

        </div>
        <section class=" col" style="float: right;">
            <a style="color: White;" href="challenges.php"> <button type="button" class="btn btn-primary btn-lg btn-block " style="background-color: #18a4bc;">Join New Challenges</button></a>
            <br>
        </section>
        <section class="col" style="float: right;">

        <h2 style="text-align:center;">Previous Challenges</h2>

        <?php 
                    require 'function.php';
                    $con = connection();
                    $uni_id = $_SESSION['uni_id'];
                    $sql = "select * from challenge 
                    right join previous_challenge
                    on challenge.challenge_num = previous_challenge.challenge_num
                     where 	uni_id = '$uni_id'  ";
                    $result = mysqli_query($con, $sql);
                    $count = mysqli_num_rows($result);
        
                    if ($count == 0) {
                        echo
                        '<div class="alert alert-danger" role="alert">
                                No Challenges
                            </div>
                            ';
                    } else {

                       
                        $index = 0;
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            echo '  
                                <div class="container col">
                                <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                  <div class="ms-2 me-auto">
                                    <div class="fw-bold"><h4>'.$row['challenge_name'].'</h4></div>
                                    Level: '.$row['challenge_level'].'
                                    <br>
                                    Start Date: '.$row['challenge_date'].' 
                                    <br>
                                    Deadline : '.$row['Deadline'].'
                                  </div>
                                  <span class="badge bg-info rounded-pill" style="color:white;font-size:20px">
                                  '.$row['challenge_num'].'
                                  </span>
                                  
                                </li>
                                <br>
                              </ol>
                              </div>
                           ';
                        }
                    }
        
        ?>
        
        </section>
        <a style="color: White;" href="studentPage.php"><button class="btn btn-info ">Back</button></a>


    </div>



    </div> <!-- ***** Menu End ***** -->


    <?php footer(); ?>