<?php
//set cookies
setcookie('request','dirtitian',time()+ 120,'/');

print_r($_COOKIE);

count($_COOKIE);
//check cookie values
if(count($_COOKIE) > 0)
{
    echo "Cookies are enabled";
}
else
{
    echo "cookies are disabled";
}

echo "<br>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>document.write(Date());</script>
    <link rel="stylesheet" href="css/styles.css">

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
    <div class = "dvtag">
        
     <?php
  require 'php/secure.php';

?>
  <h1 class = "h2">Check out your new requests here</h1>
  

  
  <form method = "post" class = "fom" action = "php/request.php">
  
  <button type = "submit" name = "submitbtn" id = "use"  >Get the request</button>
  <br>
  <br>

  </form>
 
 
  <center><img id = "ig" src = "images/dt2.webp" width = "1200px" height = "720px"><center>


    <br>                                                                                    
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

  <div>
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