
<html>
<head>


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


</style>
</head>
<title>
patient card registration
</title>
<body>

<h1>WELCOME</H1>
 <form method="post" name="myform" action="pat.php" onsubmit="return valueEmpty()">

 <h2><center> <marquee direction="right" style="background-color:"> Gamby General Hospital </marquee> </h2>   </center>
<h2><center> <marquee direction="none" style="background-color:"> patient registration form </marquee> </h2>   </center>


 <p align="right">Date:<input type="number" placeholder=dd/mm/yy>
               <b><i>
 <div class="in" style="font-size=70%;">Do you have an examination card from our hosital ? if no, please fill the following form! </div>
  <div class="gend"><input type="radio" name="exam" >yes</div>
 <br>
  <div class="gend">
 <input type="radio" name="exam">no</div>

 <div class="in">FIRST NAME:</div> <input type="text" name="first_name" placeholder="enter your first name here" class="input"/>
 <br>

 <div class="in"> MIDDLE NAME:</div><input type="text" name="middle name" placeholder="enter your middle name here"  class="input"/>
 </div>
 <br>

 <div class="in">LAST NAME:</div><input type="text" name="last name" placeholder="enter your last name here"  class="input"/>
 </div>
  <br>

 <div class="in"> AGE:</div><input type="number" name="age" placeholder="enter your age here"  class="input"/> </div>
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
   <li><div class="in">Wereda:</div><input type="text" name="Wereda" placeholder="enter your wereda here" class="input"/></li>


	<li><div class="in">Kebele:</div><input type="number" name="kebele" placeholder="enter your kebele here"  class="input"/></li>


   <li><div class="in">phone number:</div> <input type="number" name="phone number"  placeholder="+251 - - - - - - - - -"  class="input"/></li>


   <li><div class="in">Email address:</div><input type="label" name="email address" placeholder="someone@gmail.COM" class="input"/></li>
   <br>
   <br>
   <br>
   <input type="submit" name="submit" placeholder="register" class="submit" />
   <br>
 </b> </i>

   </form>

</body>

</html>
