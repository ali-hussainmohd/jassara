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
            if (empty($sql)) {
                //Admin Check 
            } else if (empty($sql)) {
                // Faculty Check 
            }
            //echo " <br>" . $sql;

            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            //echo  " <br>" . $count;
            //echo " <br>" . $row['user_role'];

            if ($count == 1) {


                session_start();
                $_SESSION['username'] = $row['stname'];
                $_SESSION['uni_id'] = $username;
                $_SESSION['fullname'] = $row['full_name'];
                $_SESSION['birth_date'] = $row['date_birth'];
                $_SESSION['level'] = $row['uni_level'];

                header('Location:studentPage.php');
                exit();
                // starting session 


            }  //if
            else {
                // ADMIN LOGIN 

                $sql = "select * from admin where ID = '$username' and password = '$password'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $count = mysqli_num_rows($result);


                if ($count == 1) {
                    session_start();
                    $_SESSION['username'] = $row['Fname'] ;
                    $_SESSION['fullname'] = $row['full_name'];
                    $_SESSION['birth_date'] = $row['date_birth'];
                    $_SESSION['level'] = $row['uni_level'];
                    header('Location:admin.php');
                    exit();
                }  //if
                else 
                {
                    // FACULTY LOGIN 
                    $sql = "select * from faculty where ID = '$username' and password = '$password'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $count = mysqli_num_rows($result);
    
    
                    if ($count == 1) {
                        session_start();
                        $_SESSION['username'] = $row['tname'] ;
                        $_SESSION['T_ID'] = $row['id'];
                        // to route the challenge pages
                        $_SESSION['userRole'] ="Faculty"; 
   
                        header('Location:faculty.php');
                        exit();
                }
            }

    
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
