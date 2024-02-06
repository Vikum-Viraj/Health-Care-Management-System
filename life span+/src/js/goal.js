


function help()
{  
    document.getElementById("dec1").innerHTML = " <center><font color = 'blue' size = '10px'>Loosing Fat</font><br><br><br> <p style='text-align: justify';>       The single most common goal of the people who decide <br>to start exercising is their desire to lose fat. In addition <br>to working out, you should also seek advice about modifying<br> your eating habits, reducing caloric intake, and reducing carbs.</p> </center>";
    
}

function dothis()
{
    document.getElementById("dec2").innerHTML = " <center><font color = 'blue' size = '10px'>Building muscles </font><br><br><br> <p style='text-align: justify';>  Some people don’t have a weight problem. Instead,they<br> want to build muscle in order to look and feel better. This <br>involves plenty of hard lifts, long sessions, and an increased <br>intake of proteins. Consulting a personal trainer is the best option<br> when trying to build muscles</p> </center>";

}


function mentalhealth()
{
    document.getElementById("dec3").innerHTML = " <center><font color = 'blue' size = '10px'>Improving endurance</font><br><br><br><p style='text-align: justify';>  Other people get winded as they take a couple of flights<br>  of stairs. This motivates them to start working out and <br> improve their endurance. 20-30 minute high-intensity  intervals are<br> perfect for this, especially if you use steppers or rowers. <br>Increase your heart rate, and keep at it.</p> </center>";
}


function physicalhealth()
{
    document.getElementById("dec4").innerHTML = " <center><font color = 'blue' size = '10px'>Increasing flexibility</font><br><br><br> <p style='text-align: justify';>  If you’re looking to improve flexibility, you should first consult<br>  a personal trainer. They will evaluate, and help you move on from <br> there. However, you can still do some PNF and static stretches,<br>  but be careful not to overdo it and don’t stretch <br> through the pain.</p></center>";
}

function dailywork()
{
    document.getElementById("dec5").innerHTML = " <center><font color = 'blue' size = '10px'>Body Toning</font><br><br><br> <p style='text-align: justify';>   Finally, some people just want to tone their bodies. <br> They do not want to overdo it with building muscles, and<br>  they don’t have a problem with some much fat. This also requires<br>  exercising and modifying your eating habits. While a toned <br> body sounds easier to attain than, for example, a muscular <br> one, it still requires you to put in a lot of effort.    </p> </center>";

}


function shedule()
{
    document.getElementById("dec6").innerHTML = " <center><font color = 'blue' size = '10px'>Set long-term goals</font><br><br><br> <p style='text-align: justify';>   First, set the goals you’re striving towards, be it <br> losing fat, getting a muscular body, or improving <br> your endurance. Aim high, but try to be realistic too.  Your <br> Personal Trainer is a great resource to help you do <br> this correctly</p> </center>";

}


function health()
{
    document.getElementById("dec7").innerHTML = " <center><font color = 'blue' size = '10px'>Grow Taller</font><br><br><br> <p style='text-align: justify';> Even regular exercise and a healthy diet are unlikely <br>to influence your height. You may be able to make a small <br>gain in height by improving your posture. Improving your posture<br> will help straighten your spine but won't make your bones<br> grow longer.</p> </center>";

}




function enableButton()
{
	if(document.getElementById("check").checked)
	{
		document.getElementById("submitBtn").disabled = false;
		
	}
	else
	{
		document.getElementById("submitBtn").disabled = true;
	}
	
	
}
