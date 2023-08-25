<html>
<head>
<title>s</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.pay{
backgroung-color:rgba(254,255,253,0.89);
border-radius:4px;
border:1px solid #000b6e91;
display: inline-block;
cursor:pointer;
border-top-left-radius:10px;
border-top-right-radius:10px;
border-bottom-left-radius:10px;
border-bottom-left-radius:10px;
color:(212,16,16);
font-family:arial;
font-size:15px;
padding:6px 15px;
text-decoration:none;
text-shadow:0px 1px 0px #d46700;
}
.pay:hover{
background-color: ;
}


body {
  font-family: Arial, Helvetica, sans-serif;
}


</style>  
</head>
<body>
<form action="" method="POST">

<CENTER>


<B><FONT SIZE="7"><u>STUDENT PROFILE</b></FONT><BR><BR></u>
<div class="col-md-8">
                                     <label for="">REGESTER NUMBER</label>
                                    <input type="text" name="stud_id" value="<?php if(isset($_POST['stud_id'])){echo $_POST['stud_id'];} ?>" required class="pay">
                                </div><br>

                             <div class="col-md-4">
                                    <input type="submit" name="submit" class="myButton"></input></div></td></tr>

                                </div>

<CENTER><table border="1"  cellpadding="30" >

<?php 
                                    $conn = mysqli_connect("localhost","root","","li");

                                    if(isset($_POST['stud_id']))
                                    {
                                        $stud_id = $_POST['stud_id'];

                                        $query = "SELECT * FROM newreg WHERE reg_no='$stud_id' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                             ?>
                                            
<tr>
<td  >
<big><center> NAME OF THE STUDENT:</BIG>
</TD>
<TD>
<big ><center><?=$row['firstname']; ?>
</INPUT>
</TD>

<TD rowspan="4">
<div align="center">
                                                    <img src="<?php echo $row['pic'];?>" height="130" width="130" >
                                                </div>

  

</TR>
<tr>
<td  >
<big ><center> BRANCH:</BIG>
</TD>

<TD>
<big ><center>CSE
</INPUT>
</TD>
</TR>


<tr>
<td  >

<big ><center> YEAR:</BIG>
</TD>

<TD>
<big ><center><?=$row['year']; ?>

</TD>
</TR>
<tr>
<td  >

<big ><center> contact NUMBER:</BIG>
</TD>

<TD>
<big ><center><?=$row['contact']; ?>
</INPUT>
</TD>
</TR>
</TABLE>

</center>

<br><br>
<center>
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

$servername="localhost";
$username="root";
$password="";
$db="li";
$con =new mysqli($servername, $username, $password, $db);


if(isset($_POST['stud_id']))
 {
  $stud_id = $_POST['stud_id'];
$sql="SELECT * from istable where reg_no='$stud_id' ";

$result=$con->query($sql);

if($result->num_rows>0)
{
while( $row=$result->fetch_assoc())
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

 ";
}

echo "</table>";
}

else
{
$alert="<script>alert('NO DATA');</script>";
echo $alert;
}

}

                                            }
                                        }
                                        else
                                        {
                                           $alert="<script>alert('NOT REGISTERED');</script>";
						echo $alert;
                                        }
                                    }
                                   ?>
</table>


</form>
</FORM>
</body>
</html>