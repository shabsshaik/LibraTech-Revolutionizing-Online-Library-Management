<?php 
error_reporting(0);
?>
<html>
<head>
  <title>Employee Issueing</title>
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
<CENTER>
<B><h1 style="margin: 20px 0;"><u>EMPLOYEE PROFILE</b></h1></u>
<div class="col-md-8">
                                     <font size="4">EMPLOYEE  ID:</font>
                                    <input type="search" name="stud_id" value="<?php if(isset($_POST['stud_id'])){echo $_POST['stud_id'];} ?>" required class="pay" placeholder="Enter Here...">
                                </div>
<br>
                             <div class="col-md-4">
                                    <center>
<input type="submit"   class="myButton"></input></div></td></tr>

                                </div>

<CENTER><table border="1"  cellpadding="30" style="box-shadow: 0 0 20px 0 #999;">

<?php 
                                    $conn = mysqli_connect("localhost","root","","digital");

                                    if(isset($_POST['stud_id']))
                                    {
                                      $stud_id = $_POST['stud_id'];


                                      $le=strlen($stud_id);
                          if($le==10)
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
<big > NAME OF THE FACULTY:</BIG>
</TD>
<TD>
<input type="text" value="<?=$row['firstname'].' '.$row['lastname']; ?>" readonly class="pay">
</INPUT>
</TD>

<TD rowspan="4">
<div align="CENTER">

						  <div class="form-group mb-3">
                                                    
                                                    <img src="<?php echo $row['pic'];?>" height="170" width="170"  >
                                                </div>

</TR>
<tr>
<td  >
<big >DEPARTMENT:</BIG>
</TD>

<TD>
<INPUT TYPE="text" value="<?=$row['depart']; ?>" readonly class="pay">
</INPUT>
</TD>
</TR>

<tr>
<td>
<big >EMAIL:</BIG>
</TD>

<TD>
<input type="text" value="<?=$row['email']; ?>" readonly class="pay">
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
<table border="2px" cellpadding="5" width="100" height="100" style="box-shadow: 0 0 20px 0 #999;">

<form action="" method="POST">
<?php
$servername ="localhost";
$username ="root";
$password ="";
$db="digital";
$conn=new mysqli($servername,$username,$password,$db); 

if(isset($_POST['stud_id']))
{
$check="SELECT depart from stafreg where staff_id='$stud_id'";

$che=$conn->query($check);
$rest=mysqli_fetch_row($che);
$ab=$rest[0];

$chec="SELECT cou from staff_reg where staff_id='$stud_id'";
$ch=$conn->query($chec);
$rent=mysqli_fetch_row($ch);
$a=$rent[0];

 if(strval($ab)=='cse' ||  strval($ab)=='CSE')
{
if($a<=9)
{
?>
<th><center>
<big> Book.No</big>
</th>

<th><center>
<big>DATE</big>
</th>
</tr>

<tr>
<td><CENTER>
<input type="text" name="r3" class="pay" ></input></CENTER>
</td>

<td ><CENTER>
<input type="date" name="r9" class="pay" ></input></CENTER>
</td>
</tr>
<tr>
<td colspan="2">
<center>
<input type="submit" name="submit" class="myButton" ></input>
</td>
</tr>

<?php
if(isset($_POST['r3'],$_POST['r9'],$_POST['submit']))
{

$rname=$_POST['r3'];

$daname=$_POST['r9'];

$stud_id=$_POST['stud_id'];

$add=date('y-m-d',strtotime($daname.'+30 days'));

$book="select available from allbook where book_no='$rname'";
$boo = $conn->query($book);
if(mysqli_num_rows($boo) > 0)
{
  foreach($boo as $rom)                          
  {                                         
 $yes=$rom['available'];

 if($yes=='yes')
 {

if( $_POST['r3']  &&  $_POST['r9'] && $_POST['submit'] && $_POST['stud_id'] )
{
$file="select * from allbook where book_no='$rname'";
$felt = $conn->query($file);
 if(mysqli_num_rows($felt) > 0)
{
 foreach($felt as $rom)                          
 {                                         
$ab=$rom['title'];
$ac=$rom['category'];
$ad=$rom['author'];
$ae=$rom['rack_no'];
$af=$rom['price'];
}
}
else
{
 $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is not present in library      \n        Please Check Your Book Number...! ");</script>';             
						echo $alert;
}

if(isset($ab,$ac,$ad,$ae,$af,$rname))
{
$ze=0;
$sql= "INSERT INTO istable(reg_no,staff_id,category,book_no,title,author,rack_no,price,issue_date,return_date)
VALUES('$ze','$stud_id','$ac','$rname','$ab','$ad','$ae','$af','$daname','$add')";

$result = $conn->query($sql);
if ($result===True)
 {

$aval="UPDATE allbook SET  available='no' WHERE book_no='$rname'";
$av= $conn->query($aval);


$shabs="SELECT email from stafreg where staff_id='$stud_id'";
$shaba=$conn->query($shabs);
$shu=mysqli_fetch_row($shaba);
$sh=$shu[0];

$a=$a+1;
$ct="UPDATE staff_reg SET  cou='$a' WHERE `staff_id`='$stud_id'";
$reach= $conn->query($ct);


 $alert="<script>alert('  BOOK HAS BEEN ISSUED successfully');</script>";
						echo $alert;


$to = $sh;
         $subject = "received";
         
         $message = "BOOK ISSUED";
        
         
         $header = "From:shabanashaik2003@gmail.com\r\n";
         
          mail($to,$subject,$message,$header);
 }
 else 
    {
$alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is already issued       \n        Please Try Another book...! ");</script>';
						echo $alert;
    }
}
}
else
   {
$alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         Enter all the FIELDS      \n        Please Try Again...! ");</script>';
						echo $alert;
   }
}
 else 
{
$alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is already issued       \n        Please Try Another book...! ");</script>';
        echo $alert;
}
  }
  }
  else
  {
    $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is not present in library      \n        Please Check Your Book Number...! ");</script>';             
						echo $alert;

  }
}
}
else
{
$alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         LIMIT EXCEEDED      \n        Cannot Issue Book...! ");</script>';
						echo $alert;
}

}
else
{
  if(strval($ab)=='science and humanity' || strval($ab)=='SCIENCE AND HUMANITY')
  {
  if($a<=9)
  {
  ?>
  <th><center>
  <big> Book.No</big>
  </th>
  
  <th><center>
  <big>DATE</big>
  </th>
  </tr>
  
  <tr>
  <td><CENTER>
  <input type="text" name="r3" class="pay" ></input></CENTER>
  </td>
  
  <td><CENTER>
  <input type="date" name="r9" class="pay" ></input></CENTER>
  </td>
  </tr>
  <tr>
  <td colspan="2">
  <center>
  <input type="submit" name="submit" class="myButton" ></input>
  </td>
  </tr>
  
  <?php
  if(isset($_POST['r3'],$_POST['r9'],$_POST['submit']))
  {
  
  $rname=$_POST['r3'];
  
  $daname=$_POST['r9'];
  
  $stud_id=$_POST['stud_id'];
  
  $add=date('y-m-d',strtotime($daname.'+30 days'));
  
  $book="select available from allbook where book_no='$rname'";
  $boo = $conn->query($book);
  if(mysqli_num_rows($boo) > 0)
  {
    foreach($boo as $rom)                          
    {                                         
   $yes=$rom['available'];
  
   if($yes=='yes')
   {
  
  if( $_POST['r3']  &&  $_POST['r9'] && $_POST['submit'] && $_POST['stud_id'] )
  {
  $file="select * from allbook where book_no='$rname'";
  $felt = $conn->query($file);
   if(mysqli_num_rows($felt) > 0)
  {
   foreach($felt as $rom)                          
   {                                         
  $ab=$rom['title'];
  $ac=$rom['category'];
  $ad=$rom['author'];
  $ae=$rom['rack_no'];
  $af=$rom['price'];
  }
  }
  else
  {
   $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is not present in library      \n        Please Check Your Book Number...! ");</script>';
              echo $alert;
  }
  
  if(isset($ab,$ac,$ad,$ae,$af,$rname))
  {
  $ze=0;
  $sql= "INSERT INTO istable(reg_no,staff_id,category,book_no,title,author,rack_no,price,issue_date,return_date)
  VALUES('$ze','$stud_id','$ac','$rname','$ab','$ad','$ae','$af','$daname','$add')";
  
  $result = $conn->query($sql);
  if ($result===True)
   {
  
  $aval="UPDATE allbook SET  available='no' WHERE book_no='$rname'";
  $av= $conn->query($aval);
  
  
  $shabs="SELECT email from stafreg where staff_id='$stud_id'";
  $shaba=$conn->query($shabs);
  $shu=mysqli_fetch_row($shaba);
  $sh=$shu[0];
  
  $a=$a+1;
  $ct="UPDATE staff_reg SET  cou='$a' WHERE `staff_id`='$stud_id'";
  $reach= $conn->query($ct);
  
  
   $alert="<script>alert(' BOOK HAS BEEN ISSUED successfully');</script>";
              echo $alert;
  
  
  $to = $sh;
           $subject = "received";
           
           $message = "BOOK ISSUED";
          
           
           $header = "From:shabanashaik2003@gmail.com\r\n";
           
            mail($to,$subject,$message,$header);
   }
   else 
      {
  $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is already issued       \n        Please Try Another book...! ");</script>';
              echo $alert;
      }
  }
  }
  else
     {
  $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         Enter all the FIELDS      \n        Please Try Again...! ");</script>';
              echo $alert;
     }
  }
   else 
  {
  $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is already issued       \n        Please Try Another book...! ");</script>';
          echo $alert;
  }
    }
    }
    else
    {
      $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         This BOOK is not present in library      \n        Please Check Your Book Number...! ");</script>';             
              echo $alert;
  
    }
  }
  }
  else
  {
  $alert='<script type="text/javascript">alert("                                   ISSUING FAILED  \n         LIMIT EXCEEDED      \n        Cannot Issue Book...! ");</script>';
              echo $alert;
  }
  
  }


}
}
?>
                                <?php
                                            }
                                        }
                                        else
                                        {
                                           $alert='<script type="text/javascript">alert("                                   CANNOT ISSUE BOOK    \n         USER EMPLOYEE ID is not registered.      \n         Please Register...! ");</script>';
						echo $alert;
                                        }
                                    }
                                    else
                                    {
                                       $alert='<script type="text/javascript">alert("                                   CANNOT ISSUE BOOK   \n         Invalid EMPLOYEE ID .      \n        Please Try Again...! ");</script>';
        echo $alert;
                                    }
                                  }
                                ?>
</table>

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