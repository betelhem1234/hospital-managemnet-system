<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
        body{
          background-color: lightgrey;
        }
         h1{
             color:blue;
             text-align: center;
             font-style:italic;
         }    
        table{
            border:5px solid blue;
            width:1200px;
          
            margin-left:65px;
        }
        th{
            background-color:black;
            color:white;

        }
        td{
            padding:5px;
            background-color:gray;
        }
    </style>
</head>
<body>

<li><a href=".php">login view</a></li>
    <h1>ALL CUSTOMER'S THAT HAS BEEN SIGN UP</h1>
<?php
$conn=mysqli_connect('localhost','root','','hospital');
$write="select *from labratory";
$read= mysqli_query($conn,$write);

?>
     <table>
          <tr>
              <th>first_name</th>
              <th>ultra</th>
			  <th>stool</th>
			  <th>urine</th>
              <th>saliva</th>
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
                  <td><?php echo $row['OrderMethod']; ?></td> 
                  <td><?php echo $row['phone_number']; ?></td> 
				  <td><?php echo $row['email_address']; ?></td> 
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