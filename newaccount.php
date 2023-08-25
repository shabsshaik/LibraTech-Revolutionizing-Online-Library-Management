<?php 
error_reporting(0);
?>
<html>
<head>
<title>Student Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sample.css">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital";
$conn =new mysqli($servername, $username, $password, $dbname);
session_start();
$time=time();
$timer="SELECT ti FROM `look` WHERE pass='cse' ||  pass='CSE'";
$resultss= $conn->query($timer);
$tim=mysqli_fetch_row($resultss);
$ti=$tim[0];
$ti=$ti+10800;
if($time<$ti)
{
if ($_SESSION["user"] =='cse' ) 
 {
?>
</head>
<body>
<div class="top">
  <h1>SAGI RAMA KRISHNAM RAJU ENGINEERING COLLEGE (AUTONOMOUS)</h1>
  <p>COMPUTER SCIENCE AND ENGINEERING DEPARTMENT</p>
</div>

<div class="topnav">
  <ul>
    <li>
      <a href="menu.php">Home</a>
    </li>
    
    <li>
      <div class="dropdown" >
        <button class="dropbtn">New Register
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="newaccount.php">Student</a>
          <a href="staffaccount.php">Staff</a>
        </div>
      </div>
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Book Details
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="index.php">All Books</a>
          <a href="addallb.php">Add Books</a>
          <a href="DEL.PHP">Delete Book</a>
        </div>     
      </div>
    </li>

    <li>
      <div class="dropdown" >
        <button class="dropbtn">Issue Book
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="newnet.php">Student</a>
          <a href="issuestaff.php">Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Return Book
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="return.php">Student</a>
          <a href="return1.php">Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Daily Records
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >

          <a href="show2.php">Student</a>
          <a href="show3.php">Staff</a>
        </div>     
      </div>
    </li>
      
    <li>
      <div class="dropdown">
        <button class="dropbtn">Card Holder
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="profile.php">Student</a>
          <a href="staffpro.php">Staff</a>
        </div>     
      </div>
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Update Details
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="in.php">Upload  Student </a>
          <a href="in1.php">Upload  Staff</a>
          <a href="rdel.php">Delete  Student</a>
          <a href="staffdel.php">Delete  Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <div class="dropdown" >
        <button class="dropbtn">Profile
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="a.php">  Student </a>
          <a href="b.php"> Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <a href="logout.php">Logout</a>   
    </li>

  </ul>
</div>

<form action="kreg.php" method="POST" enctype="multipart/form-data">
  <center>
<b><h1 style="margin: 20px 0;"><u>STUDENT REGISTRATION FORM </u></b></center></h1>

<center>
<table  border="0" style="box-shadow: 0 0 8px 0 #999;top:0px;">
<tr>
<td>
<big>FIRST NAME:</big></td>
<td>
<input  type="text" name="r1" PLACEHOLDER="Enter........." required="required"  class="pay"></input></td>
</tr>

<tr>
<td>
<big>LAST NAME:</big></td>
<td>
<input  type="text" name="r2" PLACEHOLDER="Enter........." required="required" class="pay"></INPUT>
</td>
</tr>

<tr>
<td>
<big>REGISTRATION NUMBER:</big></td>
<td>
<input  type="text" name="r3" PLACEHOLDER="Enter........." required="required" class="pay"></INPUT>
</td>
</tr>

<tr>
<td>
<big>BRANCH:</big></td>
<td>
<input  type="text" name="r4" PLACEHOLDER="CSE" readonly class="pay"></INPUT></td>
</tr>

<tr>
<td>
<big>SECTION:</big></td>
<td>
<input  type="text" name="r5" PLACEHOLDER="Enter........." required="required" class="pay"></INPUT></td></tr>


<tr>
<td>
<big>YEAR:</big></td>
<td>
<input  type="text" name="r6" PLACEHOLDER="Enter........." required="required" class="pay"></INPUT></td></tr>

<tr>
<td>
<big>CASTE:</big></td>
<td>
<select name="r7" class="pay"  >
<option SELECTED>---</option>
<option>ST/SC</option>
<option>BC</option>
<option>OC</option>
  </td></tr>

<tr>
<td>
<big>CONTACT NUM:</big></td>
<td>
<input type="tel" name="r8" PLACEHOLDER="Enter........."  required="required" class="pay"></INPUT></td></tr>

<tr>
<td>
<big>E-MAIL: </big></td>
<td>
<input  type="email" name="r9" PLACEHOLDER="Enter........." required="required" class="pay"></INPUT></td></tr>
<tr><td>
<big>UPLOAD IMAGE: </big>
</td>
<td><input  type="file" id="r11" name="file" required="required"></td></tr>
<tr>
<td colspan="2">
<center>
<input type="submit" value="submit" name="submit"  class="myButton"></input></div></td></tr>

</table>

</form>
</table>
</center>
<?php
}
elseif(!$_SESSION['user'])
{
  $alert='<script type="text/javascript">alert("                                     Your  Session has  Expired.      \n        Click OK to login. ");</script>';
  echo $alert; 
  session_destroy();
  echo "<script>
window.location.assign('r1.html');
</script>";
}
else
{
  $alert='<script type="text/javascript">alert("                                   LOGIN FAILED    \n        Your  password is incorrect.      \n        Please Try Again. ");</script>';
  echo $alert; 
  session_destroy();
  echo "<script>
window.location.assign('r1.html');
</script>";
}
}
else{
  session_destroy();
  header('Location:r1.html');
}

?>
</body>
</html>