<?php 
error_reporting(0);
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="digital";
$con=new mysqli($servername, $username, $password, $db);

$re=$_GET['delete'];
?>
<html>
<head>

<style>

.myButton {
	background:linear-gradient(to bottom, #39ca74 5%, #5cbf2a 100%);
	background-color:#39ca74;
	border-radius:33px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Comic Sans MS;
	font-size:17px;
	padding:10px 20px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.myButton:hover {
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	background-color:#5cbf2a;
}
.myButton:active {
	position:relative;
	top:1px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #31B5D6;
  color: white;
}
</style>
</head>
<center>
<h1><u>EMPLOYEE DETAILS</u> </h1>
<table border="1" cellpadding="20">
<tr>
     
<th><big>NAME</th>

     <th><big>STAFF ID</th>
     
<th><big>DEPART</th>
    
    
 <th><big>CONTACT</th>
   
  <th><big>EMAIL</th>
    </tr>

<?php

$sqls="SELECT * from stafreg where staff_id='$re' ";

$results=$con->query($sqls);

if($results->num_rows>0)
{
while( $row=$results->fetch_assoc())
{
echo "
<tr>

<td>" .$row['firstname']."</td>
<td>" .$row['staff_id']."</td>
<td>" .$row['depart']."</td>
<td>" .$row['contact']."</td>
<td>" .$row['email']."</td>

</tr>

 ";
}

echo "</table>";
}
else
{
$alert="<script>alert('ERROR');</script>";
echo $alert;
include("show3.php");
}
?>
<br><br>
<a href="show3.php"> <h1>Go Back<h1></a>

</html>
