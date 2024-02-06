

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>document.write(Date());</script>
    <link rel="stylesheet" href="extra.css">

    <title>Life Span+</title>
    <script src = "js/goal.js"></script>
</head>
<body>
    <center>
        <image src="images/logo.png" width="250px" length="250px">
        <h1 style="font-size: 40px;">Life Span+</h1>
        <h3 style="font-style: oblique; font-size: 25px;">Your partnet in life & fitness</h3>
    </center>

    <hr>
    
    <ul class="menu">
        <li class="menu"><a href="#">Home</a></li>
        <li class="menu"><a href="register.html">Registration</a></li>
        <li class="menu"><a href="">Log in</a></li>
        <li class="menu"><a href="">Contact us</a></li>
    </ul>

    <br>
     
 
  




<?php

require 'secure.php';

echo "<h2 class = 'dv'>Here are your new user requests list!!</h2>";
echo "<br>";




if(isset($_POST['submitbtn']))
 
{

    //Read data from database
$select = "select * from userform";

$answer = mysqli_query($conn,$select);


if($answer->num_rows > 0)
{

echo "<table border = '2' id = 'tb'>";
echo ("<tr>");
echo ("<th> First name </th>");
echo ("<th> Last Fname </th>");
echo ("<th> Gender </th>");
echo ("<th> Phone </th>");
echo ("<th> E mail </th>");
echo ("<th> Description </th>");
echo ("<th> DOB </th>");

while($row=$answer->fetch_assoc())
{

   echo ("<tr>");
   echo ("<td>". $row['Fname']. "</td>");
   echo ("<td>" . $row['Lname'] . "</td>");
   echo ("<td>" . $row['Gender'] . "</td>");
   echo ("<td>" . $row['Phone'] . "</td>");
   echo ("<td>" . $row['Email'] . "</td>");
   echo ("<td>" . $row['Description'] . "</td>");
   echo ("<td>" . $row['DOB'] . "</td>");
   echo ("</tr>");
    
}

echo "</table>";



}

}

else 

{
    echo "Unsuccessfull";
}



?>
   






 



    
<hr color="blue">
    <div class = "fot">
   
    <hr color="white">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <button type = "button" class = "btn">Contact with  us</button><br>
    <button type = "button" class = "btn">Give  Feedback</button>
    <br>
    <br>
    <br>
    <hr color = "white">
    <br
    <br>
    <br>
    
    </div>
    <center>
        <h2>Created By Group 6</h2>
    </center>
    
</body>
</html>




