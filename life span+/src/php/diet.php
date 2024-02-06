<html>
    <head>
        <Title>Form</Title>
        <head>
            <body bgcolor= "lightblue">


            
<?php

echo "<br>";

require 'secure.php';

echo "<b>";



//submit user entered details when user click the submit button

if(isset($_POST['submitbtn']))
 
{
    
 
    $FName    = $_POST['fname'];
    $LName    = $_POST['lname'];
    $Gen      = $_POST['gender'];
    $Phone    = $_POST['phone'];
    $Mail     = $_POST['mail'];
    $Des      = $_POST['text'];
    $DOB      = $_POST['dob'];
    
    $sql = "INSERT INTO userform(Fname,Lname,Gender,Phone,EMail,Description,DOB) VALUES ('$FName','$LName','$Gen','$Phone','$Mail','$Des','$DOB')";
    
    
    if (mysqli_query($conn,$sql))
    {
        
        echo "<br><cenetr><h1>You successfully submitted the form !!<center></h1>";
        
    }
    else
    {
       
        echo "Unsucessfull";
       
    }

}

?>
</body>
</html>