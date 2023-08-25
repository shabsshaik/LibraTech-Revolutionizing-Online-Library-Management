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
<h1><u>STUDENT DETAILS</u> </h1>
<table border="1" cellpadding="20">
<tr>
     
<th><big>NAME</th>

     <th><big>REGISTRATION NUMBER</th>
     
<th><big>BRANCH</th>
    
 <th><big>SECTION</th>
   
  <th><big>YEAR</th>
    
 <th><big>CONTACT</th>
   
  <th><big>EMAIL</th>
    </tr>

<?php

$sqls="SELECT * from newreg where reg_no='$re' ";

$results=$con->query($sqls);

if($results->num_rows>0)
{
while( $row=$results->fetch_assoc())
{
echo "
<tr>

<td>" .$row['firstname']."</td>
<td>" .$row['reg_no']."</td>
<td>" .$row['branch']."</td>
<td>" .$row['section']."</td>
<td>" .$row['year']."</td>
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
include("show2.php");
}
?>
<br><br>
<a href="show2.php"> <h1>Go Back<h1></a>

</html>
