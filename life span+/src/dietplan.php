<?php
//set cookies
setcookie('dietplan','form',time()+ 240,'/');

count($_COOKIE);

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
    <script src = "js/myScript.js"></script>
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
     
    <font color = "0585EE" size = "20px">Why Would you need a Diet plan</font>
    <br>
    <h2>Diets aren’t just for weight loss. While changing your diet can be one of the best ways to lose weight, it can also be a gateway to improving your habits, focusing on your health, and leading a more active lifestyle
        Some diets aim to curb your appetite to reduce your food intake, while others suggest restricting your intake of calories and either carbs or fat. Some focus more on certain eating patterns and lifestyle changes, rather than on limiting certain foods.
        .</h2>
   
    <center>
        <div class = "newsLayout">
        <button class = "bttn1" type = "button" id = "btn1"  onclick = "dietplan('btn1')">PALEO DIET</button><br>
        <button class = "bttn1" type = "button" id = "btn2"  onclick = "dietplan('btn2')">VEGAN DIET</button><br>
        <button class = "bttn1" type = "button" id = "btn3"  onclick = "dietplan('btn3')">CARB PLAN</button><br>
        <button class = "bttn1" type = "button" id = "btn4"  onclick = "dietplan('btn4')">KETO PLAN</button><br>
        <button class = "bttn1" type = "button" id = "btn5"  onclick = "dietplan('btn5')">DASH PLAN</button><br>
        <button class = "bttn1" type = "button" id = "btn6"  onclick = "dietplan('btn6')">RAW DIET</button><br>
        
        
       
    
    
        </div>

        <hr color="035BA4"
        <br>
            <center>
                <p clss = "text1" id = "para">
                     
                </p>
                <br>
        <img id ="image1" class = "mar" src="images/d0.jpg" width="1100px",height="360px"> 
            
      
    
        </center>
        
 <hr color = "#051e82" width = "1400px">
    <br><br>
    <div id = "frmm">
        <div class = "edit">
            <font color = "black" align = "right" size = "5px">This is a requesting form for a assign a dietitin for your diet plan. you can 
                check your user progress through the dietitian and reshedule the diet plan</font
        </div>
        <br>
            <br>
    <Form action = "php/diet.php"  class = "dietform" method = "post">
      <font color = "blue" size = "6px"><b>Requesting Form for a Dietitian</b></b></font><br><br>
        <label>First Name : </label><br>
        <input type = "text" id = "fname" class = "fname" name = "fname" placeholder = "First name" required>
        <br><br>
        <label>Last Name  : </label><br>
        <input type = "text" id = "lname" class = "lname" name = "lname" placeholder = "Last name" required>
        <br><br>
        <lable>Gender</label>
        <br>
          <input type="radio" name ="gender" value="Male" class  = "gen" value = "Male" > Male<br>
          <input type="radio" name ="gender" value="Female" class = "gen" value = "Female">Female<br>
          
          <br>
          <label >Phone Number : </label><br>
          <input type = "tel" size = "54px"  class = "phone" name = "phone" pattern = "[0-9] {0-10}" maxlength = "10" placeholder = "XXXXXXXXXX" required>
          <br><br>
          <label>E mail : </label><br>
          <INPUT type = "email" class = "mail"  name = "mail" placeholder = "abc@gmail.com" >
          <br><br>
          <label>Mention your reason for requesting to a dietitian :</label><br>
          <textarea  id = "adress" rows = "5" cols = "60" name = "text"></textarea>
           <br><br>
           <label for="birthday">Choose Your DOB :</label><br>
           <input type="date" id="birthday"  name = "dob">
           <br><br>
          
          <br><br>
          
          <input type = "checkbox" id = "check" onclick = "enableButton()" >
          I Confirm that above metion data are correct
          <br><br><br>
          <center>
          <input type = "submit" class = "box1" name = "submitbtn" id  = "submitBtn" value = "submit" disabled>
          </center>
          
        </form>	
        
    </div>

    
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