<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

.col{
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
.col:hover{
background-color: #ADDE63;
} 
.col:active {
	position:relative;
	top:1px;
}

table {
  border-collapse: collapse;
  
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
.myButton:hover{
background-color: ;
box-shadow:0 0 15px #229b4ada;
}
.myButton:active {
	position:relative;
	top:1px;
}

.pay{
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
box-shadow:0 0 15px #aab3b3ab;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
   overflow: hidden;
  background-color: #FFB573;  
}

.navbar a {
  float: left;
  font-size: 20px;
  color: black;
  text-align: right;
  padding: 12px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: black;
  padding: 12px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #FF9C4A;
}

.dropdown-content {
  display: none;
  position: absolute ;
  background-color: #FFB573;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #FF9C4A;
  
}

.dropdown:hover .dropdown-content {
  display: block;



}
     
</style>  
</head>
<body >
<form action="" method="POST">
<CENTER>
<font face="Engravers MT" size="6" color="#3152A5"><B>SAGI RAMA KRISHNAM RAJU ENGINEERING COLLEGE (AUTONOMOUS)</B></font>
<font face="Engravers MT" size="5" color="#3152A5"><CENTER>COMPUTER SCIENCE AND ENGINEERING DEPARTMENT</font><br>
<div class="navbar" align="right" >
  
<a href="menu.php">HOME</a>
  <div class="dropdown" >
    <button class="dropbtn">New Register
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content" >
      <a href="newaccount.php">Student</a>
      <a href="staffaccount.php">Staff</a>
    </div> </div> 
         <div class="dropdown">
   <button class="dropbtn">Book Details
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" >
      <a href="index.php">ALL Book</a>
      <a href="addtable.php">Add Books</a>
      <a href="DEL.PHP">Delete Book</a>
      <a href="addallb.PHP">Upload Books</a>
      
        </div>     
      </div>


      <div class="dropdown" >
    <button class="dropbtn">Issue
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content" >
      <a href="newnet.php">Student</a>
      <a href="issuestaff.php">Staff</a>
    </div> </div> 

   <div class="dropdown" >
    <button class="dropbtn">Return
      <i class="fa fa-caret-down"></i>
    </button>
  <div class="dropdown-content" >
      <a href="return.php">Student</a>
      <a href="return1.php">Staff</a>
    </div> </div> 

   <div class="dropdown">
   <button class="dropbtn">Records
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" >
      <a href="show.php">Student</a>
      <a href="show1.php">Staff</a>
        </div>     
      </div>

<div class="dropdown">
   <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" >
      <a href="profile.php">Student</a>
      <a href="staffpro.php">Staff</a>
        </div>     
      </div>
      <div class="dropdown" >
        <button class="dropbtn">Upload&Delete Records
          <i class="fa fa-caret-down"></i>
        </button>
      <div class="dropdown-content" >
          <a href="in.php">Student </a>
          <a href="in1.php">Staff</a>
        <a href="rdel.php">Delete files</a>
        </div> </div> 

        <div class="dropdown">
          <button class="dropbtn">Section
             <i class="fa fa-caret-down"></i>
           </button>
           <div class="dropdown-content" >
             <a href="a.php">Section-A</a>
             <a href="b.php">Section-B</a>
             <a href="c.php">Section-C</a>
             <a href="d.php">Section-D</a>
               </div>     
             </div>

      <a href="logout.php">Logout</a>   
    </div>
  </div>
<CENTER>
<B><h1><u>STUDENT PROFILE</b></h1></u>

                                     <font size="4">REGESTER NUMBER:</font>
                                    <input type="search" name="stud_id" value="<?php if(isset($_POST['stud_id'])){echo $_POST['stud_id'];} ?>" required class="pay">
<br><BR>

<input type="submit"   class="col"></input></td></tr>
<BR><BR>
<CENTER><table border="1" width= 100%;  style="box-shadow: 0 0 20px 0 #999;">

<?php 
                                    $conn = mysqli_connect("localhost","root","","lib");

                                    if(isset($_POST['stud_id']))
                                    {
                                      $stud_id = $_POST['stud_id'];


                                      $le=strlen($stud_id);
                          if($le==10)
                          {
                                        $query = "SELECT * FROM newreg WHERE reg_no='$stud_id'";
                                        $query_run = mysqli_query($conn, $query);
                                        
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                             ?>                       
<tr>
<td>
<big > NAME OF THE STUDENT:</BIG>
</TD>
<TD>
<input type="text" value="<?=$row['firstname'].' '.$row['lastname']; ?>" readonly class="pay">
</INPUT>
</TD>

<TD rowspan="4">
<div align="center">
 <div class="form-group mb-3">                     
<img src="<?php echo $row['pic'];?>" height="170" width="170"  style="box-shadow: 0 0 20px 0 #999;">
</div>

</TR>
<tr>
<td  >
<big > BRANCH:</BIG>
</TD>

<TD>
<INPUT TYPE="text" PLACEHOLDER="CSE" readonly class="pay">
</INPUT>
</TD>
</TR>
<tr>
<td>
<big > YEAR:</BIG>
</TD>
<TD>
<input type="text" value="<?=$row['year']; ?>" readonly class="pay">
</INPUT>
</TD>
</TR>
<tr>
<td>
<big >CONTACT NUMBER:</BIG>
</TD>
<TD>
<input type="text" value="<?=$row['contact']; ?>" readonly class="pay">
</INPUT>
</TD>
</TR>
</TABLE>

</center>
     
<br>

<center>
<table border="2px" width= 100% style="box-shadow: 0 0 20px 0 #999;">

<form action="" method="POST">
<?php

if(isset($_POST['stud_id']))
{
$check="SELECT caste from newreg where reg_no='$stud_id'";

$che=$conn->query($check);
$rest=mysqli_fetch_row($che);
$ab=$rest[0];

$chec="SELECT cou from count_reg where reg_no='$stud_id'";
$ch=$conn->query($chec);
$rent=mysqli_fetch_row($ch);
$a=$rent[0];

 if(strval($ab)=='ST/SC')
{
if($a<=6)
{
?>
<th><center>
<big> Book.No</big>
</th>

<th><center>
<big>title</big>
</th>

<th><center>
<big> category</big>
</th>

<th><center>
<big>RACK </big>
</th>

<th><center>
<big>PRICE</big>
</th>

<tr>
<td><center>
<input type="text" name="r3" class="pay" value="<?php if(isset($_POST['r3'])){echo $_POST['r3'];} ?>"></input>
</td>

<?php
if(isset($_POST['r3']))
{
$rname=$_POST['r3'];
$file="select * from allbook where book_no='$rname'";
$felt = $conn->query($file);
 if(mysqli_num_rows($felt) > 0)
{
 foreach($felt as $rom)                          
 {   
  $yes=$rom['available'];

  if($yes=='yes')
  {                                      
?>

<td><center>
<input type="text" value="<?=$rom['title']; ?>" name="q1"  readonly class="pay" ></input>
</td>


<td><center>
<input type="text" value="<?=$rom['category']; ?>" name="q2" readonly class="pay" ></input>
</td>

<td><center>
<input type="text" value="<?=$rom['rack_no']; ?>" name="q3" readonly class="pay" ></input>
</td>

<td><center>
<input type="text" value="<?=$rom['price']; ?>" name="q4" readonly class="pay" ></input>
</td>
</tr>
<tr>
<td><center>
<input type="submit" value="submit" name="submit" class="pay" ></input>
</td>
</tr>

</table>


<?php


if(isset($_POST['q1'],$_POST['q2'],$_POST['q3'],$_POST['q4']))
{
  $issue=date("y-m-d");

  $ac=$_POST['q2'];
  $title=$_POST['q1'];
  $rack=$_POST['q3'];
 $price=$_POST['q4'];
$stud_id=$_POST['stud_id'];

$return=date('y-m-d',strtotime($issue.'+30 days'));
$ze=0;
$sql= "INSERT INTO istable(reg_no,staff_id,category,book_no,title,rack_no,price,issue_date,return_date)
VALUES('$stud_id','$ze','$ac','$rname','$title','$rack','$price','$issue','$return')";

$result = $conn->query($sql);

if ($result===True)
 {
  $alert="<script>alert('sucess');</script>";
  echo $alert;

  $aval="UPDATE allbook SET  available='no' WHERE book_no='$rname'";
$av= $conn->query($aval);

$a=$a+1;
$ct="UPDATE count_reg SET  cou='$a' WHERE `reg_no`='$stud_id'";
$reach= $conn->query($ct);
  }
  else{
    $alert="<script>alert('wrong');</script>";
    echo $alert;
  }
}
  }
  else{
    $alert="<script>alert('already issued');</script>";
    echo $alert;
  }

}
}
else
{
 $alert="<script>alert('BOOK NOT EXISTED...CHECK YOUR BOOKNO');</script>";
						echo $alert;
}

}

}
}
}
}
}
}
}