<?php 
error_reporting(0);
?>
<html>
<head>
<title>Checking Employee Details </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="sample1.css">

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
<form action="" method="POST">
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
<br>
<CENTER>

<B><h1 style="margin: 0px 0;"><u>EMPLOYEE PROFILE</b></h1></u><BR>
<div class="col-md-8">
<font size="4">EMPLOYEE ID :</font>
                                    <input type="search" name="stud_id" value="<?php if(isset($_POST['stud_id'])){echo $_POST['stud_id'];} ?>" required class="pay" PLACEHOLDER="Enter Here...">
                                </div><br>

                             <div class="col-md-4">
                                    <input type="submit" name="submit" class="myButton"></input></div></td></tr>

                                </div>

<CENTER><table border="1"  cellpadding="30" >
<?php 
                                    $conn = mysqli_connect("localhost","root","","digital");
                                    if(isset($_POST['stud_id']))
                                    {
                                        $stud_id = $_POST['stud_id'];

                                        if(strlen($stud_id)==10)
                                        {
					                             $query = "SELECT * FROM stafreg WHERE staff_id='$stud_id'";
                                        $query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $row)
                                            {
                                             ?>          
<tr>
<td>
<big><center> NAME OF THE EMPLOYEE:</BIG>
</TD>

<TD>
<big ><center><?=$row['firstname'].' '.$row['lastname']; ?>
</TD>

<TD rowspan="4">
<div align="center">
 <img src="<?php echo $row['pic'];?>" height="130" width="130" >
 </div>
</TR>

<tr>
<td>
<big ><center> DEPARTMENT:</BIG>
</TD>

<TD>
<big ><center>CSE
</TD>
</TR>

<tr>
<td>
<big ><center> EMAIL:</BIG>
</TD>

<TD>
<big ><center><?=$row['email']; ?>
</TD>
</TR>

<tr>
<td>
<big ><center> CONTACT NUMBER:</BIG>
</TD>

<TD>
<big ><center><?=$row['contact']; ?>
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
                                            }

$servername="localhost";
$username="root";
$password="";
$db="digital";
$con =new mysqli($servername, $username, $password, $db);


if(isset($_POST['stud_id']))
 {
  $stud_id = $_POST['stud_id'];
$sql="SELECT * from istable where staff_id='$stud_id' ";

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
                                            else {
                                              $alert='<script type="text/javascript">alert("                                   PROCESS FAILED    \n         USER EMPLOYEE ID is not registered.      \n         Please Register...! ");</script>';
                                              echo $alert;
                                            }
                                          }
                                          else{
                                           
                                            
                                               $alert='<script type="text/javascript">alert("                                   PROCESS FAILED    \n         Invalid EMPLOYEE ID.      \n         Please Try Again...! ");</script>';
                echo $alert;
                                            
                                          }
                                        }
                       
                                   ?>
</table>
</form>
</FORM>
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