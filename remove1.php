<?php 
error_reporting(0);
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="digital";
$con=new mysqli($servername, $username, $password, $db);



$se=$_GET['delete'];



$codes="SELECT staff_id from istable where book_no='$se'";
$co=$con->query($codes);
$coder=mysqli_fetch_row($co);
$re=$coder[0];



$chec="SELECT cou from staff_reg where staff_id='$re'";
$ch=$con->query($chec);
$rent=mysqli_fetch_row($ch);
$a=$rent[0];

$a--;


$sql="DELETE FROM istable where book_no='$se'";
$result = $con->query($sql);



if($result===true)
{
$ct="UPDATE staff_reg SET  cou='$a' WHERE `staff_id`='$re'";
$reach= $con->query($ct);



$sqli="UPDATE allbook SET available='yes'
where book_no='$se'";
$resu = $con->query($sqli);


$shabs="SELECT email from stafreg where staff_id='$re'";
$shaba=$con->query($shabs);
$shu=mysqli_fetch_row($shaba);
$sh=$shu[0];


$alert="<script>alert('DO YOU WANT TO RETURN A BOOK');</script>";
echo $alert;

$to = $sh;
         $subject = "received";
         
         $message = "BOOK RETURNED";
        
         
         $header = "From:shabanashaik2003@gmail.com\r\n";
         
          mail($to,$subject,$message,$header);


          
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
<h1><u>ALL ISSUED BOOKS</u> </h1>
<table border="1" cellpadding="20">
<tr>

<th><big><big>CATEGORY</th>

<th><big><big>BOOK.NO</th>
<th><big><big>TITLE</th>
<th><big><big>AUTHOR</th>
<th><big><big>RACK.NO</th>
<th><big><big>PRICE</th>
<th><big><big>ISSUE DATE</th>
<th><big><big>RETURN DATE</th>

</tr>

<?php

$sqls="SELECT * from istable where staff_id='$re' ";

$results=$con->query($sqls);

if($results->num_rows>0)
{
while( $row=$results->fetch_assoc())
{
echo "
<tr>

<td>" .$row['category']."</td>
<td>" .$row['book_no']."</td>
<td>" .$row['title']."</td>
<td>" .$row['author']."</td>
<td>" .$row['rack_no']."</td>
<td>" .$row['price']."</td>
<td>" .$row['issue_date']."</td>
<td>" .$row['return_date']."</td>

</tr>

 ";
}

echo "</table>";
}
?>
<br><br>
<a href="return1.php"> <h1>Go Back<h1></a>
<?php
}
else
{
$alert="<script>alert('ERROR');</script>";
echo $alert;
include("return1.php");
}

?>

