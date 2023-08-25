<?php 
error_reporting(0);
?>
<html>
<head>
<title>Adding Books</title>
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
<CENTER><h1 align="center" style="margin: 20px 0;"><u>UPLOAD ALL BOOKS DETAILS</h1></U>
 
<br><br>


<form action="#" method="POST" enctype="multipart/form-data">
 
	<input type="file" name="excel" class="pay" required>

	<input type="submit" name="submit" class="mybutton" required>

</form>
<?php
if(isset($_FILES['excel']['name']))
{
	$con=mysqli_connect("localhost","root","","digital");
	include "xlsx.php";
	if($con)
  {
		$excel=SimpleXLSX::parse($_FILES['excel']['tmp_name']);

    $SH=$_FILES['excel']['name'];

    $allowed_ext=['xls','csv','cvv','xlsx'];
    $checking=explode(".",$SH);
    $file_ext=end($checking);

    if(in_array($file_ext,$allowed_ext))
    {

        for ($sheet=0; $sheet < sizeof($excel->sheetNames()) ; $sheet++)
         { 
        $rowcol=$excel->dimension($sheet);
        $i=0;
        if($rowcol[0]!=1 &&$rowcol[1]!=1)
        {
		foreach ($excel->rows($sheet) as $key => $row) {
           $id= strtoupper($row['0']);
	       $title= strtoupper($row['1']);
				$category= strtoupper($row['2']);
        $author= strtoupper($row['3']);
        $rack= strtoupper($row['4']);
       $price= strtoupper($row['5']);
        
			$checkStudent="SELECT  * FROM allbook WHERE book_no='$id'";
            $checkStudent_result=mysqli_query($con,$checkStudent);
            if(mysqli_num_rows($checkStudent_result)>0)
            {   $rent=mysqli_fetch_row($checkStudent_result);
                 $ye=$rent[6];
                 $yess=$rent[1];
                $in_query="UPDATE `allbook` SET `category`='$category',`book_no`='$yess',`title`='$title',`author`='$author',`rack_no`='$rack',`price`='$price',`available`='$ye' WHERE book_no='$id'";
                $in_result=mysqli_query($con,$in_query);
               
                $alert="<script>alert(' UPDATED SUCCESSFULLY!');</script>";
                echo $alert;
               echo "<script>
                window.location.assign('addallb.php');
                </script>";
               continue;
            }
            else
            {
                $in_query="INSERT INTO `allbook`(`category`, `book_no`, `title`, `author`, `rack_no`, `price`, `available`) VALUES ('$category','$id','$title','$author','$rack','$price','yes')";
                $in_result=mysqli_query($con,$in_query);
               $msg=1;
            }
          }
					
			if($msg==1)
			{
				$alert="<script>alert('FILE HAS BEEN UPLOADED SUCCESSFULLY!');</script>";
				echo $alert;
        echo "<script>
        window.location.assign('addallb.php');
        </script>";
        
       
		}
		else {
			
				$alert='<script type="text/javascript">alert("                                   UPLOADING FAILED    \n        Invalid File Format Selected.      \n        Please Select xlx,xlsx,csv,cvv Files...! ");</script>';
				echo $alert;

		}

		
	}
		}
  }
  else{
    
    $alert='<script type="text/javascript">alert("                                   UPLOADING FAILED    \n        Invalid File Format Selected.      \n        Please Select xlx,xlsx,csv,cvv Files...! ");</script>';
    echo $alert;
    echo "<script>
    window.location.assign('addallb.php');
    </script>";
  }
	}
}


else
{

?>
<br>
<br>

<CENTER><h1 align="center" style="margin: 20px 0;"><u>EDIT Or UPLOAD</h1></U>
<form action="ad.php" method="POST">
<table border=1 >
  <TR>
  <th>
  <center>
    CATEGORY</center></th>
  
    <th><center>
    BOOK.NO</center></th>

    <th><center>
  TITLE</center></th>

    <th><center>
    AUTHTOR</center></th>

    <th><center>
    RACK.NO</center></th>

    <th><center>
    PRICE</center></th>

    
</TR>
<TR>
  <TD>
    <input type="text" name="k1" class="pay" required>
</td>

<TD>
    <input type="text" name="k2"  class="pay" required>
</td>

<TD>
    <input type="text" name="k3"  class="pay" required>
</td>

<TD>
    <input type="text" name="k4"  class="pay" required>
</td>

<TD>
    <input type="text" name="k5"  class="pay" required>
</td>

<TD>
    <input type="text" name="k6"  class="pay" required>
</td>
</tr>
</table>
<center>
  <br>
<button type="submit" name="submit" class="mybutton">SUBMIT</button></center>

</FROM>
<?php
}
?>

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
