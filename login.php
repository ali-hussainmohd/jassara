
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">


    <title>Jassara HTML CSS Template</title>
    <!--

Jassara

https://templatemo.com/tm-537-Jassara

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl-carousel.css">


</head>
<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<!-- ***** Header Area Start ***** -->
<header class="header-area bg-info mb-6">
    <!-- ***** class="header-area  bg-dark mb-6" ***** -->

    <div class="container mx-0 px-0">



        <div class="row ">
            <div class="col-lg-12">
                <nav class="main-nav">


                    <!-- ***** Logo Start ***** -->
                    <a href="#">
                        <div class="logo pl-5">
                            <img src="assets/images/JPHP.jpg" alt="Jassara" width="99" height="97">
                        </div>
                    </a> <!-- ***** main-navd ***** -->

                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav ">

            
                        <li class="scroll-to-section"><a href="index.php#welcome" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="index.php#contact-us">Contact Us</a></li>
                        <li class="scroll-to-section"><a href="index.php#about">About</a></li>
                      
                    </ul>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div> <!-- ***** Menu End ***** -->
        </div> <!-- ***** Menu End ***** -->
    </div> <!-- ***** Menu End ***** -->
</header>
<!-- ***** Header Area End ***** -->


<body>
    <div class="container">
        <div class="row  h-75 d-inline-block pt-5 mb-5 mx-0 px-0"> </div> <!-- ***** ajust the space ***** -->

        <!--Error Message-->
        <?php
        $errorMessage = "0";
        $visibility = "hidden";

        if (!empty($_GET['error1'])) {
            $errorType = $_GET['error1'];

            if ($errorType == "userNameEmpty") {
                $errorMessage = "Please enter your id number";
                $visibility = "";
            } else if ($errorType == "passwordEmpty") {
                $errorMessage = "Please enter your password";
                $visibility = "";
            } else if ($errorType == "UserNotFound") {
                $errorMessage = "User not founded , please make sure that you have account  with Jassara";
                $visibility = "";
            }
        }

        // This echo to display the red color alert 
        echo '
        <div class="alert alert-danger"
         role="alert"
         ' . $visibility . '>
    ' . $errorMessage . '
             </div>';
        ?>
        <!--Error Message End -->


        <div class="row d-flex justify-content-center   ">
            <form class="" action="loginDB.php" method="POST">



                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="userid"> Id number</label>
                    <input type="number" id="userid" class="form-control" name="userid" placeholder="Your User id" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Password</label>
                    <input type="password" id="form2Example2" class="form-control" name="password" placeholder="Your password" require="required" />
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>



                    <!-- Submit button -->
                    <button type="submit" class="btn btn-info btn-block mb-4" name="Signin_button">Sign in</button>
                    <!-- Register buttons -->

            </form>
        </div>
    </div> <!-- ***** Menu End ***** -->


    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; 2022 Jassara

                        .
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>


    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

</body>

</html>