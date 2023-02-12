
<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
<style>
	.middle
	{
		margin:130px;
		text-align:left;
		font-size:20px;
		color:beige;
		text-align:justify;
	}
	.logo{

	padding: 5px 0 0 80px;
	width:30%;
	height:auto;
}


body{
background-image:url(pharm.jpg);	
}
.submit
 {
	
	color:blue;
	font-size:18px;
	box-shadow:3px 3px 2px 4px rgba(0,0,0,0.8);
	padding:3px;
	margin:18px;
	 font-family:italic;
	
}


</style>

</head>
<title> Gamby General Hospital</title>
<body>
<header>
<div class="header">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <img src="LOG.png" CLASS="logo">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <ul> <!--ul-->
 
      <li><a href="med_dis.php">medicines</a></li>
	   <li> <a href="#">profile</a>
   <ul> <!--ul ul-->      
      <li><a href="change_pharm.PHP">change pass</a></li>
        
		 </ul> </li>
      <li><a href="homepage.php">log out</a>
	  </ul>
 </nav>
</div>

</header>
<div class="middle";>
<form method="post" name="myform" action="medicine.php"  >

 <h2><center> <marquee direction="right" style="background-color:">  </marquee> </h2>   </center>  
<h2><center> <marquee direction="none" style="background-color:"> Medicines </marquee> </h2>   </center>

 
              
			  <b><i>

 <div class="in">Medicine Name:</div> <input type="text" name="med_name"  class="input" />
 <br>

 <div class="in"> Purpose:</div><input type="text" name="purpose"  class="input" />
 
 <br>

 <div class="in">Dose:</div><input type="text" name="dose"  class="input"/>

  <br> 

 <div class="in"> Side Effect:</div><input type="text" name="side"   class="input" /> 
<br>  

<div class="in"> Made in:</div><input type="text" name="made" class="input"/>
<br>
<input type="submit" name="submit"  class="submit" />
  </form>
 </div>
<footer>
<h2>our interesting facts</h2><BR>
<P></P>
<a href="homepage.PHP"><h3>join us today</h3></a>
<br>
<h4 style="float:left;" style="font-size:20px;">
contact us<br>
Addres:BahirDar,kebele 08<br>
call Gamby :058 123464<br>
Emergencies- Appointmnets-Ambulances <br>
Available 24 hours everyday (24/7)<br>
</h4>
<h3>
Over 100 Specialised Doctors<br>
modernised equipments<br>
2402 total Graduates <br>
2660 facebook followers
</h3>

<p>GAMBY GENERAL HOSPITAL <BR>SINCE 1998</p>

</footer>

</body>
</html>