<?php

function login_header()
{
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

function login_nav()
{
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

function footer()
{
    echo ' <!-- ***** Footer Start ***** -->
    <footer style="margin-top: 700;">
        <div class="container" style="display: block;">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <p class="copyright">Copyright &copy; 2022 Jassara

                        .
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



function Admin_header()
{

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
            #myInput {
                background-position: 10px 12px;
                background-repeat: no-repeat;
                width: 100%;
                font-size: 16px;
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;
              }
              
              #myUL {
                list-style-type: none;
                padding: 0;
                margin: 0;
              }
              
              #myUL li a {
                border: 1px solid #ddd;
                margin-top: -1px; /* Prevent double borders */
                padding: 2px;
                text-decoration: none;
                font-size: 18px;
                color: black;
                display: block
              }
              
              #myUL li a:hover:not(.header) {
                background-color: #eee;
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



function admin_nav()
{
    echo '  <!-- ***** Menu Start ***** -->
    <ul class="nav ">

        <li class="">

            <div class="input-group">
                <div class="form-outline">
                <form method="POST" action="">
                
                        <input type="text" id="myInput" onkeyup="myFunction()" onmouseleave="OnMouseLeave()" placeholder="Search .." title="Type in a name">

                            <script>
                            function OnMouseLeave()
                            {
                                if(document.getElementById("myInput").value.length == 0)
                                {
                                    ul = document.getElementById("myUL");
                                    ul.style.display="none";
                                }

                             
                            }

                                function myFunction() {
                                   var input, filter, ul, li, a, i, txtValue;
                                      input = document.getElementById("myInput");
                                    filter = input.value.toUpperCase();
                                    ul = document.getElementById("myUL");
                                     ul.style.display="block";
                                    li = ul.getElementsByTagName("li");
                                    for (i = 0; i < li.length; i++) {
                                    a = li[i].getElementsByTagName("a")[0];
                                  txtValue = a.textContent || a.innerText;
                             if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                li[i].style.display = "";
                                } else {
                                    if(txtValue == null)
                                    {
                                        ul.style.display="none";

                                    }
                                li[i].style.display = "none";
                                 }

                                
    }
}
                            </script>

                  
                </form>
';

echo '<ul id="myUL" class="bg-light" style="display:none;">';
             
if($_SESSION['userRole'] == "Faculty")
{
    echo '
    <li><a href="faculty.php">Faculty Home </a></li>
    <li><a href="facultyProfile.php">Faculty Profile</a></li>
    <li><a href="ManageChallenges.php">Manage Challenges</a></li>
    <li><a href="ManageRanking.php">Manage Rankings</a></li>
    ';
}
else if ($_SESSION['userRole'] == "Admin")
{
    echo '
    <li><a href="admin.php">Admin Home </a></li>
    <li><a href="ManageChallenges.php">Manage Challenges</a></li>
    <li><a href="ManageUsers.php">Manage Users</a></li>
    <li><a href="ManageRanking.php">Manage Rankings</a></li>
    ';

}
else
{
    echo 
    '
    <li><a href="studentPage.php">Student Home </a></li>
    <li><a href="studentProfile.php">Profile </a></li>
    <li><a href="challengePage.php">Challenges </a></li>
    <li><a href="challenges.php"> Join Challenges </a></li>
    <li><a href="ranking.php"> Ranks</a></li>



    
    ';
}
        echo' </ul>';


 


    echo '
      </div>
        </li>
        <li class="scroll-to-section"><a href="index.php#welcome" class="active">Home</a></li>
        <li class="scroll-to-section"><a href="index.php#about">About</a></li>
';

if($_SESSION['userRole'] == "Faculty")
{

    echo 
    '
    <li class="submenu">
    <a href="javascript:;">Drop Down</a>
    <ul>
        
        <li><a href="facultyProfile.php">Profile</a></li>
        <li><a href="ManageChallenges.php">Manage Challenges</a></li>
        <li><a href="ManageRanking.php">Manage Results</a></li>
    </ul>
    </a>
</ul>
    ';
}
else if ($_SESSION['userRole']=="Admin")
{
    echo 
    '
    <li class="submenu">
    <a href="javascript:;">Drop Down</a>
    <ul>
        
        <li><a href="ManageUsers.php">Manage Users</a></li>
        <li><a href="ManageChallenges.php">Manage Challenges</a></li>
        <li><a href="ManageRanking.php">Manage Results</a></li>
    </ul>
    </a>
</ul>
    ';
}
else 
{

    echo '
    <li class="submenu">
    <a href="javascript:;">Drop Down</a>
    <ul>
        
      <li><a href="challengePage.php">Challenges</a></li>
        <li><a href="ranking.php">Ranking</a></li>
        <li><a href="index.php#contact-us">contect us</a></li>
    </ul>
    </a>
</ul>
';

}

  
    echo '

    <!-- ***** Menu End ***** -->
</nav>
</div> <!-- ***** Menu End ***** -->
</div> <!-- ***** Menu End ***** -->
</div> <!-- ***** Menu End ***** -->
</header>
<!-- ***** Header Area End ***** -->';
}


function manageChallengeTableHeader()
{
    echo '<!-- Styles -->
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
';
}
