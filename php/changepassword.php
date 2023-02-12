

<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
<link rel="stylesheet" href="new.css">
 
 <style>
body{
	background-image:url(doc.jpg);


}
.submit
 {
	
	color:blue;
	font-size:25px;
	box-shadow:3px 3px 2px 4px rgba(0,0,0,0.8);
	padding:5px;
	margin:10px;
	 font-family:italic;
	
}
</style>

</head>
<title>
CHANGE MY PASSWORD
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
 <form method="POST" name="myform" action="ch_pw.php">
<div class="in"> Enter your Email:</div><input type="email" name="email"  class="input"/><br/>
   <div class="in"> Enter Current password:</div><input type="password" name="cur_password"  class="input"/>
   <br>
      <div class="in">  Enter new pass word</div><input type="password" name="new_password"  class="input"/>
   <br>
      <div class="in"> confirem password::</div><input type="password" name="confirm_password"  class="input"/>
	  <br>
  <input type="submit" name="submit"  class="submit" value="change" />
   <br>
 </b> </i> 
 
   </form>
</div>

</body>

</html>