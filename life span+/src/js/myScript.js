function validatePW(){
    if(document.getElementById("password").value!=document.getElementById("cnfrmPassword").value)
    {
        alert("Password Mismatched!!!");
        return false;
    }
    else{
        alert("You have Registered Successfully!!!");
        return true;
    }
}

function policy(){
    if(document.getElementById("checkBox").checked)
    {
        document.getElementById("regBtn").disabled = false;
    }
    else
    {
        document.getElementById("regBtn").disabled = true;
    }
}

/////Diet plan

function dietplan(name)
{
	if(name == "btn1")
	{
		document.getElementById("para").innerHTML = " <h3 align = 'justify'><font color = 'blue' size = '5px'>Paleo diet plan :</font><br><br>A paleo diet is focused on consuming only healthy food items, such as fruits, vegetables, and lean meat. It excludes certain foods that were previously common when farming first emerged around 10,000 years ago.</h3> ";
		document.getElementById("image1").src = "images/palo.webp ";											
													
	}
	else if(name == "btn2")
	{
		
		document.getElementById("para").innerHTML = " <h3 align = 'justify'><font color = 'blue' size = '5px'>Vegan diet plan :</font><br><br>A vegan diet is a plant-based plan that excludes all animal products, like meat, fish, dairy and even honey. Its cousin, the vegetarian diet, is a bit broader and excludes meat and fish but includes dairy and eggs. Though the vegan diet has a ton of health benefits, just because something is labeled 'vegan' doesn't necessarily mean it's a great choice. To reap the benefits of this eating lifestyle, focus on nutrient-dense whole-foods—think beans, lentils, nuts, seeds, whole grains and of course, plenty of fruits and vegetables.</h3>";
		document.getElementById("image1").src = "images/d3.jpg";
		
	}
 
    else if(name == "btn3")
	{
        document.getElementById("para").innerHTML = "<h3 align = 'justify'><font color = 'blue' size = '5px'>Carb diet plan :</font><br><br>Your food choices depend on a few things, including how healthy you are, how much you exercise and how much weight you have to lose Consider this meal plan as a general guideline, not something written in stone </h3> ";
		document.getElementById("image1").src = "images/C4.WEBP";


	}	
    else if(name == "btn4")
	{
        document.getElementById("para").innerHTML = "<h3 align = 'justify'><font color = 'blue' size = '5px' >Keto diet plan :</font><br><br>Following a ketogenic diet is the most effective way to enter ketosis. Generally, this involves limiting carb consumption to around 20 to 50 grams per day and filling up on fats, such as meat, fish, eggs, nuts, and healthy oils ( 6 ). It's also important to moderate your protein consumption.</h3>";
		document.getElementById("image1").src = "images/k1.png";

           

	}	
    else if(name == "btn5")
	{
        document.getElementById("para").innerHTML = "<h3 align = 'justify'><font color = 'blue' size = '5px'>Dash diet plan :</font><br><br>The DASH diet is a flexible and balanced eating plan that helps create a heart-healthy eating style for life. It's easy to follow using foods found at your grocery store. The DASH diet is rich in vegetables, fruits and whole grains. It includes fat-free or low-fat dairy products, fish, poultry, beans and nuts.</h3>";
		document.getElementById("image1").src = "images/dd.png";

           

	}
    else if(name == "btn6")
	{
        document.getElementById("para").innerHTML = " <h3 align ='justify'><font color = 'blue' size = '5px'>Raw diet plan :</font><br><br>The raw food diet is just what it sounds like- a diet based on eating mostly raw, unprocessed whole foods. Supporters of the raw food diet believe that eating raw foods is beneficial for health and weight loss since you’re cutting out high calories, sugars and processed foods. Also known as raw foodism or raw veganism, the raw food diet consists of consuming mostly fruits, vegetables, nuts and seeds. Some people also consume raw eggs and dairy, and even raw fish and meat, although this is less common.</h3>";
		document.getElementById("image1").src = "images/r1.jpg";

           

	}


	else 
	{
		alert("Inavalid !!");
	}
	
	
	
}


