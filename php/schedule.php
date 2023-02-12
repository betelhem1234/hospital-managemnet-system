

<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
<link rel="stylesheet" href="new.css">
 
 <style>
body{
	background-image:url(doc.jpg);

}
</style>

</head>
<title>
Gamby General Hospital
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
 <ul> <!--ul-->
 <li><a href="homepage.PHP">home</a></li>
 <li><a href="#">register</a>
   <ul> <!--ul ul-->      
      <li><a href="PATIENTsign.PHP">patient card</a></li>
   <li><a href="#">Doctor</a>
        <ul> <!--ul ul ul--> 
		   <li><a href="docsign.PHP">Sign Up</a></li>
	    </ul><!--ul ul ul--> 
		  
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
 <form method="POST" name="myform" action="doctor_register.php">

 <h2><center> <marquee direction="right" style="background-color:"> Gamby General Hospital </marquee> </h2>   </center>  
<h2><center> <marquee direction="none" style="background-color:"> labratory record </marquee> </h2>   </center>

 


 
 <div class="in">FIRST NAME:</div> <input type="text" name="first_name" placeholder="enter your first name here" class="input"/>
 <br>

 <div class="in"> MIDDLE NAME:</div><input type="text" name="middle_name" placeholder="enter your middle name here"  class="input"/>
 
 <br>

 <div class="in">LAST NAME:</div><input type="text" name="last_name" placeholder="enter your last name here"  class="input"/>

  <br> 

 <div class="in"> age</div><input type="number" name="age"  class="input"/>
<br>  
<div class="in"> GENDER:</div>
<ul type="none">
<li>
  <div class="gend"> <input type="radio"  name="gender" id="pp"/>Female</div></li>
   </br>
  <li>  <div class="gend">
   <input type="radio" name="gender"  />Male
    </div></li>
	</ul>
 <div class="in"> ADDRESS:</div>
  <ul type="none">

  <li><div class="in">phone number:</div> <input type="number" name="phone_number"  placeholder="+251 - - - - - - - - -"  class="input"/></li>
   
   
   <li><div class="in">Email address:</div><input type="label" name="email_address" placeholder="someone@gmail.COM" class="input"/></li>
   <br>
   <div class="in"> PASSWORD:</div><input type="password" name="password"  class="input"/>
   <br>
   <br>
  <input type="submit" name="submit"  class="submit" />
   <br>
 </b> </i> 
 
   </form>
</div>

</body>

</html>