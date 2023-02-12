

<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">


<link rel="stylesheet" href="new.css">
 <script type="text/javascript">
  function valueEmpty(){
   if(document.getElementById('first_name').value == ""){
   alert('please enter your name');
    return false;
   }
   if(document.getElementById('age').value == ""){
   alert('please fill your age');
    return false;
  }
  if(document.getElementById('email_address').value == ""){
   alert('please fill your email box');
    return false;
	}}
 </script>
<style>


body{
	background-image:url(home.jpg);
}
 h2{
	 color:black;
	 
 }
 .in{
	   color:WHITE;
 }
 .middle
	{
		margin:120px;
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
</style>
</head>
<title>
<title> Gamby General Hospital</title>
</title>
<body>

<header>
<div class="header">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <img src="LOG.png" CLASS="logo">
 <ul> <!--ul-->
 
 <li><a href="homepage.PHP">home</a></li>
 <li><a href="#">register</a>
   <ul> <!--ul ul-->      
      <li><a href="PATIENTsign.PHP">patient</a></li>
   <li><a href="docsign.PHP">Doctor</a>
       
		  </li>
     
	<li><a href="#">Other Servants</a>
	   <ul><!--ul ul ul--> 
		   <li><a href="receptionsign.PHP">receptionist</a></li>
           <li><a href="pharmacysign.PHP">phamacist</a>
		   <li><a href="labratorysign.PHP">labratorist</a>
	   </ul><!--ul ul ul--> 
		  </li>
	</ul><!--ul ul-->

	</li>
  <li><a href="#">Services</a>
  <ul>
           <li><a href="heart.php">heart condition</a></li>
           <li><a href="pregnancy.php">pregnancy</a></li>
		   <li><a href="skin.php">skin</a></li>
		   <li><a href="kidney.php">kidney dialsis</a></li>
		   
		   
  </ul></li>
  <li><a href="about.PHP">About Us</a></li>
  
  </ul>
  		   
  
  
</nav>
</div>

</header>

<div class="middle">
 <form method="post" name="myform" action="pat_reg.php" onsubmit="return valueEmpty()" >

 <h2><center> <marquee direction="right" style="background-color:"> Gamby General Hospital </marquee> </h2>   </center>  
<h2><center> <marquee direction="none" style="background-color:"> patient registration form </marquee> </h2>   </center>

 
              
			  <b><i>

 <div class="in">FIRST NAME:</div> <input type="text" name="first_name" placeholder="enter your first name here" class="input" id="first_name"/>
 <br>

 <div class="in"> MIDDLE NAME:</div><input type="text" name="middle_name" placeholder="enter your middle name here"  class="input" />
 
 <br>

 <div class="in">LAST NAME:</div><input type="text" name="last_name" placeholder="enter your last name here"  class="input"/>

  <br> 

 <div class="in"> AGE:</div><input type="number" name="age" placeholder="enter your age here"  class="input" id="age"/> 
<br>  

<div class="in"> GENDER:</div>
<ul type="none">
<li>
  <div class="gend"> <input type="radio"  name="gender" value="female"/>Female</div></li>
   </br>
  <li>  <div class="gend">
   <input type="radio" name="gender" value="male" />Male
    </div></li>
	</ul>
 <div class="in"> ADDRESS:</div>
  <ul type="none">
   <li><div class="in">Wereda:</div><input type="text" name="Wereda" placeholder="enter your wereda here" class="input"/></li>

   
	<li><div class="in">Kebele:</div><input type="number" name="kebele" placeholder="enter your kebele here"  class="input"/></li>
	 
	
   <li><div class="in">phone number:</div> <input type="number" name="phone_number"  placeholder="+251 - - - - - - - - -"  class="input"/></li>
   
   
   <li><div class="in">Email address:</div><input type="label" name="email_address" placeholder="someone@gmail.COM" class="input" id="email_address"/></li>
   <br>
      <div class="in"> PASSWORD:</div><input type="password" name="password"  class="input"/>

   <br>
   <br>
   <input type="submit" name="submit" placeholder="register" class="submit" />
   <br>
 </b> </i> 
 
   </form></div>
</body>



</html>