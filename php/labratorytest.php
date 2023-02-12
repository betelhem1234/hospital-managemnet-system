

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
<h2><center> <marquee direction="none" style="background-color:"> doctor signup form </marquee> </h2>   </center>

 
 <p align="right">Date:<input type="number" placeholder=dd/mm/yy></p>
               <b><i>


    <div class="gend">
   <input type="checkbox" name="gender"  />X-ray
    </div>
	 <li>  <div class="gend">
   <input type="checkbox" name="gender"  />ultra-sound
    </div>
	<div class="gend">
   <input type="checkbox" name="gender"  />stool
    </div>
	 <li>  <div class="gend">
   <input type="check box" name="gender"  />urine
    </div>
   <br>
  <input type="submit" name="submit"  class="submit" />
   <br>
 </b> </i> 
 
   </form>
</div>

</body>

</html>