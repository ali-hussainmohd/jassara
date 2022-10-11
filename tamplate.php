<?php 
function login_header(){
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
        <meta name="description" content="">
        <meta name="author" content="Template Mo">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <style>
            body {
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
    
            footer {
                clear: both;
                position: relative;
                height: 200px;
                margin-top: -200px;
            }
        </style>
    
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
    
                        <!-- ***** Logo End ***** -->';
        
}

function login_nav(){
    echo '  <!-- ***** Menu Start ***** -->
    <ul class="nav ">

        <li class="">

            <div class="input-group">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" placeholder="Search" />
                </div>

                <button type="button" class="btn searchBarButton" style="background-color:white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

        </li>
        <li class="scroll-to-section"><a href="index.php#welcome" class="active">Home</a></li>
        <li class="scroll-to-section"><a href="index.php#about">About</a></li>
        <li class="submenu">
            <a href="javascript:;">Drop Down</a>
            <ul>
                
                <li><a href="challengePage.php">Challenges</a></li>
                <li><a href="ranking.php">Ranking</a></li>
                <li><a href="index.php#contact-us">contect us</a></li>
            </ul>
            </a>
    </ul>

    <!-- ***** Menu End ***** -->
</nav>
</div> <!-- ***** Menu End ***** -->
</div> <!-- ***** Menu End ***** -->
</div> <!-- ***** Menu End ***** -->
</header>
<!-- ***** Header Area End ***** -->';
}

function footer(){
    echo ' <!-- ***** Footer Start ***** -->
    <footer style="margin-top: 700;">
        <div class="container" style="display: block;">
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

</html>';
}