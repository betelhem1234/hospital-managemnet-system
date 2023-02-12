<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
        body{
background-image:url(rr.jpg);        }
         h1{
             color:black;
             text-align: center;
             font-style:italic;
         }    
        table{
            border:10px solid black;
            width:950px;
          
            margin-left:65px;
        }
        th{
            background-color:black;
            color:white;

        }
        td{
            padding:5px;
            background-color:beige;
        }
	
    </style>
</head>
<body>
<div class="header">

<!--
<p> GAMBY GENERAL HOSPITAL <p>&nbsp &nbsp &nbsp &nbsp &nbsp 
-->
</div>

 <div class="top">
 
 <nav>
 <ul>
  <li  type="none" ><a href="receptionpage.php">back </a></li>
 </ul>
  		   
  
  
</nav>
</div>

</header>

 <h1>Patient List :</h1>
<?php
$conn=mysqli_connect('localhost','root','','hospital');
$write="select *from patient";
$read= mysqli_query($conn,$write);

?>
     <table>
          <tr>
              <th>first_name</th>
              <th>last_name</th>
			  <th>email_address</th>
			  <th>password</th>
          </tr>
         
              <?php

                   If(mysqli_num_rows($read)>0)
                   {
                     while($row=mysqli_fetch_array($read))
                     {  

                ?>
                 <tr>
                  <td><?php echo $row['first_name']; ?></td> 
                  <td><?php echo $row['last_name']; ?></td> 
                  <td><?php echo $row['email_address']; ?></td> 
                  <td><?php echo $row['password']; ?></td> 
                 </tr>

                <?php


                }
                }
                else{
                    echo "no data is available";
                }
                 ?>
     
       </table>
   
</body>
</html>