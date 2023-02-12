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
  <li  type="none" ><a href="pharmacypage.php">Back</a></li>
 </ul>
  		   
  
  
</nav>
</div>

</header>

 <h1>Medicine List:</h1>
<?php
$conn=mysqli_connect('localhost','root','','hospital');
$write="select *from medicine";
$read= mysqli_query($conn,$write);

?>
     <table>
          <tr>
              <th>medicine_name</th>
              <th>purpose</th>
			  <th>dose</th>
			  <th>side</th>
			 <th>made</th>

          </tr>
         
              <?php

                   If(mysqli_num_rows($read)>0)
                   {
                     while($row=mysqli_fetch_array($read))
                     {  

                ?>
                 <tr>
                  <td><?php echo $row['med_name']; ?></td> 
                  <td><?php echo $row['purpose']; ?></td> 
                  <td><?php echo $row['dose']; ?></td> 
                  <td><?php echo $row['side']; ?></td> 
				  <td><?php echo $row['made']; ?></td> 

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