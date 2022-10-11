<?php 

require 'function.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['userid'])) {
        if (!empty($_POST['password'])) {

            $username = $_POST['userid'];
            $password = $_POST['password'];

    


            $con =  connection();

            //to prevent from mysqli injection  
            $username = stripcslashes($username);
            $password = stripcslashes($password);
            $username = mysqli_real_escape_string($con, $username);
            $password = mysqli_real_escape_string($con, $password);

            //$password = md5($password);  

            $sql = "select * from student where uni_id = '$username' and password = '$password'";
            //echo " <br>" . $sql;

            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            //echo  " <br>" . $count;
            //echo " <br>" . $row['user_role'];

            if ($count == 1) {


                session_start();
                $_SESSION['username'] = $row['stname'];
                $_SESSION['fullname']=$row['full_name'];
                $_SESSION['birth_date']=$row['date_birth'];
                $_SESSION['level']=$row['uni_level'];

                header('Location:studentPage.php');
                exit();
                // starting session 


            }  //if
            else {

                /*echo "<h1> Login failed. Invalid username or password.</h1>";*/
                //header('Location: login.php'); // header('Location: voluntary.php');
                //unset($_POST);
                header("Location: login.php?error1=UserNotFound");
                exit();
            }  //else   

        } else {
            //Display Empty Password
            header("Location: login.php?error1=passwordEmpty");
            exit();
        }
    } else {  // Display Empty username 
        header("Location: login.php?error1=userNameEmpty");
        exit();
    }
} // if server 
