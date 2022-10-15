<?php 
function connection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "jassara";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    }
    //echo "Connected successfully";
    return $conn;
}
?>