
<html>
<head>

<link rel ="stylesheet" type="text/css" href="new 3.css">


<style>
body{
	background-image:url(docs.jpg);
}
.middle
	{
		margin:190px;
		text-align:left;
		font-size:20px;
		color:beige;
		text-align:justify;
	}
	.submit{
	position:absolute;
	text-align:center;
	color:blue;
	font-size:20px;
	box-shadow:3px 3px 2px 4px rgba(0,0,0,0.8);
	 font-family:italic;
	 margin:15px;
	
}
 
	
</style>
</head>
<title> Gamby General Hospital</title>
<body>
<header>
<div class="head">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <img src="log.png" CLASS="logo">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <ul> <!--ul-->

 <li><a href="pat_record.php">patient record</a></li>
   <li><a href="result.php">lab results</a></li>

  <li><a href="#">profile</a>
  <ul>
           <li><a href="changepassword.php">change pass</a></li>
          
		   
  </ul></li>
  <li><a href="homepage.php">log out</a>
  </ul>
</nav>
</div>

</header>
<div class="middle">
 <form method="POST" name="myform" action="doc_order.php" onsubmit="doc_order.php">

 <h2><center> <marquee direction="right" style="background-color:"> orders for labratory test </marquee> </h2>   </center>  
<h2><center> <marquee direction="none" style="background-color:">   </marquee> </h2>   </center>




    <div class="gend">
	<div class="in"> patient name:</div><input type="text" name="first_name" class="input"/>
	   <div class="gend">
	   <h3>this patient need to take these tests</h3>
   <input type="checkbox" name="ultra" />ultra-sound
    </div>
	<div class="gend">
   <input type="checkbox" name="stool" value="stool"  />stool
    </div>
	 <div class="gend">
   <input type="checkbox" name="urine"  value="urine" />urine
    </div> 
		 <div class="gend">
   <input type="checkbox" name="saliva"  value="saliva" />saliva
    </div> 
   
 <br>
  <input type="submit" name="submit"  class="submit" />
   <br>
 </b> </i> 
 
 
   </form>
</div>
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
<ul class="order" TYPE="none" align="center" >
<li>Over 100 Specialised Doctors</li>
<li>modernised equipments</li>
<li>2402 total Graduates</li>
<li>2660 facebook followers</li>

</ul>

<p>GAMBY GENERAL HOSPITAL <BR>SINCE 1998</p>

</footer>
</body>
</html>