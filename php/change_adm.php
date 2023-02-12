

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
patient card registration
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
 <form method="POST" name="myform" action="ch_admin.php">
<div class="in"> Enter your Email:</div><input type="email" name="email"  class="input"/><br/>

   <div class="in"> Enter Current password:</div><input type="password" name="cur_password"  class="input"/>
   <br>
      <div class="in">  Enter new pass word</div><input type="password" name="new_password"  class="input"/>
   <br>
      <div class="in"> confirem password::</div><input type="password" name="confirm_password"  class="input"/>
	  <br>
	  <br>
	  
  <input type="submit" name="submit"  class="submit" />
   <br>
 </b> </i> 
 
   </form>
</div>

</body>

</html>