<?php

function connection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "jassara";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    return $conn ;
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];  
    $password = $_POST['password']; 
    
    echo $username . "  & " . $password ." <br>" ;
    $con =  connection();
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);
        //$password = md5($password);  
        
        $sql = "select * from student where stname = '$username' and password = '$password'";  
        echo " <br>".$sql;
        
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
        echo  " <br>".$count ;
        echo " <br>". $row['user_role'] ;
          
        if($count == 1 ){  
          
             header('Location: index.php'); //echo "<h1><center> Login successful </center></h1>"; //
            
            
         
        }  //if
        else{  
           
            /*echo "<h1> Login failed. Invalid username or password.</h1>";*/
             //header('Location: login.php'); // header('Location: voluntary.php');
             //unset($_POST);
             header("Location: login.php");
             
        }  //else   

        echo "<br> line finish ";

}//if

echo "<br> not login ";


?>