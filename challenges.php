<?php session_start(); 
include 'tamplate.php';
login_header();
login_nav();
 ?>



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

        <div class="alert alert-danger" role="alert">
            No Challenges
        </div>

        <a style="color: White;" href="studentPage.php"><button class="btn btn-info mb-2">Back</button></a>


        <!-- Challenges section -->
        <section class="col" style="float: center;">
            <div class="row mb-5">

                <?php
                // print avl. challenges here 
               /*
        for($index = 1 ; $index < 6; $index++)
        {
            echo '  
            <div class="card-deck">
            <div class="card" style="border-width: 1; border-color:#18a4bc; border: raduis 180px;">
                <div class="card-body">
                    <h5 class="card-title">challenge No. '.$index.'</h5>
                    <p class="card-text">This is Test challmege</p>
                    <p class="card-text"><small class="text-muted">Basic level</small></p>
                </div>
            </div>
           ';
        }*/
                ?>
            </div>



        </section>


    </div>

    </div> <!-- ***** Menu End ***** -->

    <?php footer(); ?>