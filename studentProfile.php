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
        <section class=" col-md-6" style="float: right;padding:20px">
            <!-- *****Students details*******-->
            <div class="card text-white mb-3" style="max-width: 18rem; background-color: #18a4bc;">
                <div class="card-header" style="font-weight: bold; text-align:Right">Name</div>
                <div class="card-body">
                    <p class="card-text" style="color:white;text-align:right">
                        <?php
                        echo  $_SESSION['fullname'];
                        ?>
                    </p>
                </div>
        </section>

    </div>
    <div>
        <section class=" col-md-6" style="float: right;padding:20px">
            <div class="card text-white mb-3" style="max-width: 18rem; background-color: #18a4bc;">
                <div class="card-header" style="font-weight: bold; text-align:Right">Date of Birth</div>
                <div class="card-body">
                    <p class="card-text" style="color:white;text-align:right">
                        <?php
                        echo  date( $_SESSION['birth_date']);
                        ?>
                    </p>
                </div>
        </section>
    </div>

    <div>
        <section class=" col-md-6" style="float: right;padding:20px">
            <div class="card text-white mb-3" style="max-width: 18rem; background-color: #18a4bc;">
                <div class="card-header" style="font-weight: bold; text-align:Right">Level</div>
                <div class="card-body">
                    <p class="card-text" style="color:white;text-align:right">
                        <?php
                        echo $_SESSION['level'];
                        ?>
                    </p>
                </div>
        </section>
    </div>
    <div class="col-md-6">
    <a style="color: White;" href="studentPage.php"><button class="btn btn-info ">Back</button></a>

    </div>
    <!-- *****Students details END*******-->


    </div> <!-- ***** Menu End ***** -->


    <?php footer(); ?>