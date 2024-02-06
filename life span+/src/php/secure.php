<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$db         = "life_span+";

//create connection
$conn = new mysqli($servername,$username,$password,$db);

//check connection
if($conn->connect_error)
{
    die("connection failed: " .$conn->connect_error );
}
else{


    echo "Connected succedfully !!";



}



?>