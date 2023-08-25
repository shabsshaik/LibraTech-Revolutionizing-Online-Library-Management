<?php 
error_reporting(0);
?>
<?php
$servername ="localhost";
$username ="root";
$password ="";
$db="digital";
$conn=new mysqli($servername,$username,$password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
$fname=strtoupper($_POST['r1']);
$sname=strtoupper($_POST['r2']);
$rn=strtoupper($_POST['r3']);
$branch=strtoupper($_POST['r4']);
$sec=strtoupper($_POST['r5']);
$year=strtoupper($_POST['r6']);
$pic=$_FILES['file'];
//print_r($pic);
$filename=$pic['name'];
$fileerror=$pic['error'];
$filetmp=$pic['tmp_name'];


if($branch!='-----')
{
$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$valid=array('png','jpg','jpeg');

$queryss = "SELECT staff_id FROM staff WHERE staff_id='$rn'";
$query_runss = mysqli_query($conn, $queryss);

if(mysqli_num_rows($query_runss) > 0)
{
$query = "SELECT staff_id FROM stafreg WHERE staff_id='$rn'";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) == 0)
{
    if(in_array($filecheck,$valid))
    {

        /*$querysss = "SELECT email FROM stafreg WHERE staff_id='$rn'";
        $query_runsss = mysqli_query($conn, $querysss);
        
        if(mysqli_num_rows($query_run) == 0)
        {*/
    
$sql="INSERT INTO stafreg(firstname,lastname,staff_id,depart,contact,email,pic)
VALUES('$fname','$sname','$rn','$branch','$sec','$year','$filename')";

$result= mysqli_query($conn, $sql);

if($result==true)
{
    $asd=0;
$sqli="INSERT INTO staff_reg(staff_id,cou)
VALUES('$rn','$asd')";
$results =$conn->query($sqli);
$alert="<script>alert('SUCESSFULLY REGESTRED!');</script>";
echo $alert;

 $to = $year;
         $subject = "received";
         
         $message = "YOU HAVE SUCCESSFULLY REGISTERED";
        
         
         $header = "From:shabanashaik2003@gmail.com\r\n";
         
          mail($to,$subject,$message,$header);


INCLUDE('STAFFACCOUNT.php');
}
else{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n        SORRY...Something went wrong..!      \n        Please Try Again...! ");</script>';
echo $alert;

INCLUDE('STAFFACCOUNT.php');
}
/*
}
else
{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n         This EMPLOYEE Email is already Existed.      \n        Please Try Again...! ");</script>';
echo $alert;

INCLUDE('STAFFACCOUNT.php');
}*/

}

else{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n        Invalid IMAGE File Format Selected.      \n        Please Select JPG,JPEG,PNG Files...! ");</script>';
echo $alert;
INCLUDE('STAFFACCOUNT.PHP');
}
 
}
else
{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n         This EMPLOYEE ID is already registered.      \n        Please Try Again...! ");</script>';
echo $alert;

INCLUDE('STAFFACCOUNT.php');
}

}
else
{
$alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n       USER EMPLOYEE ID is not present in CSE Department.      \n        Please Try Again...! ");</script>';
echo $alert;

INCLUDE('STAFFACCOUNT.php');
}

}
else{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n        Select VALID CATEGORY.      \n        Please Try Again...! ");</script>';
echo $alert;
INCLUDE('STAFFACCOUNT.php');
}
}
mysqli_close($conn);
?>