$dbservername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="try";
$conn=my_sqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

create database hosp;
use hosp;

 mysqli_query($conn, $sql);
 mysqli_="select * from hosp;";
 
 
create table pat(
emailaddres varchar(100) not null,
password int(11) not null
);
insert into table(emailaddress,password) values('$emailaddress','password');";