
<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
  <title>Reception login</title>
<style>
body{
   background-position:center;
   text-align:left;
   		background-image:url(home.jpg);

}
form
{
text-align:center;
height:100h;
width:400px;
margin : 150px;
padding:60px;

}
.input
{
  padding:8px 5px;
  margin:px;
  height:30px;
  width:350px;
  font-size :100%;
  border-radius:5px ;
  border:2px solid powderblue;
  box-shadow:10px 10px 26px 10px rgba(0,0,0,0.4);
 }
 .in
 {
	  padding:8px 5px;
	text-align:center;
     color:white;
	 
 }
h1
{
	font-size:45px;
	color:beige;
	box-shadow:10px 10px 26px 10px rgba(0,0,0,0.9);
     padding:8px 5px;
  margin:px;
  box-shadow:10px 10px 26px 10px rgba(0,0,0,0.4);
 }
 .submit
 {
	
	color:blue;
	font-size:15px;
	box-shadow:3px 3px 2px 4px rgba(0,0,0,0.8);
	padding:5px;
	margin:30px;
	 font-family:italic;
	
}
	
} 
</style>
<script type="text/javascript">
  function valueEmpty(){
   
  if(document.getElementById('email').value == ""){
   alert('please fill your email box');
    return false;
	}
	if(document.getElementById('password').value == ""){
   alert('please fill your password');
    return false;
  }}
 </script>
</head>
<body>
<header>
<div class="head">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <img src="LOG.png" CLASS="logo">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <ul> <!--ul-->
 <li><a href="homepage.PHP">home</a></li>
 <li><a href="#">register</a>
   <ul> <!--ul ul-->      
      <li><a href="second.PHP">patient card</a></li>
   <li><a href="#">Doctor</a>
        <ul> <!--ul ul ul--> 
		  <li><a href="doclog.PHP">Log In</a></li>
           <li><a href="docsign.PHP">Sign Up</a></li>
	    </ul><!--ul ul ul--> 
		  
		  </li>
     
	<li><a href="#">Other Servants</a>
	   <ul><!--ul ul ul--> 
		  		   <li><a href="receptionpage.PHP">receptionist</a></li>
           <li><a href="pharmacy.PHP">phamacist</a>
		   <li><a href="labratory.PHP">labratorist</a>
	   </ul><!--ul ul ul--> 
		  </li>
	</ul><!--ul ul-->

	</li>
  <li><a href="#">Services</a>
  <ul>
           <li><a href="#">heart condition</a></li>
           <li><a href="#">physiotherapy</a></li>
		   <li><a href="#">kidney dialsis</a></li>
		   
  </ul></li>
  <li><a href="about.PHP">About Us</a></li>
  </ul>
</nav>
</div>

</header>
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
<form method="post" name="myform" action="reception_log.php" onsubmit="return valueEmpty()">
<div class="in">EMAIL ADDRES:</div> <input type="email" name="email" class="input" id="email"/>
 <br>
<p></p>
 <div class="in"> PASSWORD:</div><input type="password" name="password"  class="input" id="password"/>
 </div>
 <br>
 <p></p>
   <input type="submit" name="submit" class="submit" value="log in"/>
 <br>
</form>
 
</body>
</html>