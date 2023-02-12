
<html>
<head>
<link rel ="stylesheet" type="text/css" href="new 3.css">
<STYLE>
body{
		background-image:url(LAB3.jpg);
}
.middle
	{
		margin:190px;
		text-align:left;
		font-size:20px;
		color:beige;
		text-align:justify;
	}
</STYLE>
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
     
	<li><a href="order.php">ORDERS</a>


	</li>
  <li> <a href="#">profile</a>
   <ul> <!--ul ul-->      
      <li><a href="change_lab.PHP">change pass</a></li>
        
		 </ul> </li>
   <li><a href="homepage.php">log out</a></LI>

  
 
  </ul>
  
  
</nav>
</div>

</header>

 <div class="middle";>
<h2><center> <marquee direction="left" style="background-color:">orders from the Doctor</marquee> </h2>   </center>  
<h2><center> <marquee direction="none" style="background-color:"> </marquee> </h2>   </center>
<?php

        $connection = mysqli_connect("localhost", "root", "");//try to creat connection
        if (!$connection) {
          print("Server not found!!!");
        }
        else {
            mysqli_select_db($connection, "hospital");      
            $sqlCheck = "SELECT patient_name,ultrasound,stool,urine,saliva FROM doc_order";
            $queryCheck = mysqli_query($connection, $sqlCheck);
			if (mysqli_num_rows($queryCheck)<=0) {//if the user already registered
                echo "Data not found ";
                
              }
			  else{
			echo "<table border='1'>
			<tr>
			<th>Patient Name</th>
			<th>ultrasound</th>
			<th>stool</th>
			<th>urine</th>
			<th>saliva</th>
			</tr>";
			while($row = mysqli_fetch_array($queryCheck)){
				echo "<tr>";
				echo "<td>".$row['patient_name']."</td>";
				echo "<td>".$row['ultrasound']."</td>";
				echo "<td>".$row['stool']."</td>";
				echo "<td>".$row['urine']."</td>";
				echo "<td>".$row['saliva']."</td>";
			}
            
			  }
	}
    mysqli_close($connection);


?>
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