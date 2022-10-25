<?php session_start();
include 'tamplate.php';
Admin_header();
admin_nav();
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
        <section class=" col-md-6" style="float: right;">
            <a style="color: White;" href="studentProfile.php"> <button type="button" class="btn btn-primary btn-lg btn-block " style="background-color: #18a4bc;">Profile</button></a>
            <br>
            <a style="color: White;" href="challengePage.php"> <button type="button" class="btn btn-primary btn-lg btn-block " style="background-color: #18a4bc;">Challenges</button></a>
            <br>
            <a style="color: White;" href="ranking.php"> <button type="button" class="btn btn-primary btn-lg btn-block " style="background-color: #18a4bc;">Ranks</button></a>
            <br>



        </section>




    </div>


    </div> <!-- ***** Menu End ***** -->

    <section class="col-md-6 container" >
        <form method="GET" action="">
            <a style="color: White;" class="col mb-5" href="studentPage.php">
            <button type="submit" name="log-outButton" class="btn btn-info mb-2">Logout</button></a>
            <?php
            try {
                if (isset($_GET["log-outButton"])) {


                    session_unset();
                    session_destroy();
                    // This is to logout , since header is busy we used script instead of header . 
                    /**
                     * Error : 
                     * header already sent by c , cannot be modified 
                     * to test that , try header("Location: index.php")
                    */
                    $url = "index.php";
                    echo '<script language="javascript">window.location.href ="' . $url . '"</script>';
                    exit();

                }
            } catch (Exception $s) {
            }

            ?>
        </form>

    </section>

    <?php footer(); ?>