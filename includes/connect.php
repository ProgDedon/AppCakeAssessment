<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "news";

//create connection
$conn = new mysqli($hostname,$username,$password,$db);

// if($conn->connect_error)
if($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
else{
    // echo "Connected Successfully";
}


?>