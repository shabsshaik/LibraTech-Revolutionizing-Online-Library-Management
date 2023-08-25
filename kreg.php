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
$con=strtoupper($_POST['r7']);
$em=strtoupper($_POST['r9']);
$caste=($_POST['r8']);
//$img=$_POST['file'];
$pic=$_FILES['file'];
//print_r($pic);
$filename=$pic['name'];
$fileerror=$pic['error'];
$filetmp=$pic['tmp_name'];

$fileext=explode('.',$filename);
$filecheck=strtolower(end($fileext));

$valid=array('png','jpg','jpeg','PNG','JPG','JPEG');



if(STRLEN($rn)==10)
{

    if($con!='---')
    {

$queryss = "SELECT reg_no FROM student WHERE reg_no='$rn' ";
$query_runss = mysqli_query($conn, $queryss);

if(mysqli_num_rows($query_runss) > 0)
{

$query = "SELECT reg_no FROM newreg WHERE reg_no='$rn' ";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) == 0)
{

if(in_array($filecheck,$valid))
{

/*$querysss = "SELECT email FROM newreg WHERE reg_no='$rn' ";
$query_runsss = mysqli_query($conn, $querysss);

if(mysqli_num_rows($query_run) == 0)
{*/

$sql="INSERT INTO newreg(firstname,lastname,reg_no,branch,section,year,caste,email,contact,pic)
VALUES('$fname','$sname','$rn','CSE','$sec','$year','$con','$em','$caste','$filename')";
$result =$conn->query($sql);

 

if($result===true)
{

    $asd=0;
    $sqli="INSERT INTO count_reg(reg_no,cou)
    VALUES('$rn','$asd')";
    $results =$conn->query($sqli);

$alert="<script>alert('SUCCESFULLY REGISTERED...!!');</script>";
echo $alert;
$to = $em;
         $subject = "received";
         
         $message = "YOU HAVE SUCCESSFULLY REGISTERED";
        
         
         $header = "From:shabanashaik2003@gmail.com\r\n";
         
          mail($to,$subject,$message,$header);


INCLUDE('NEWACCOUNT.PHP');
}
else
{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n        SORRY...Something went wrong..!      \n        Please Try Again...! ");</script>';
echo $alert;
INCLUDE('NEWACCOUNT.HTML');
}
/*
}
else
{
$alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n         This Email is already Exist.      \n        Please Try Again...! ");</script>';
echo $alert;
INCLUDE('NEWACCOUNT.PHP');
}
*/

}
else{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n        Invalid IMAGE File Format Selected.      \n        Please Select JPG,JPEG,PNG Files...! ");</script>';
echo $alert;
INCLUDE('NEWACCOUNT.PHP');
}

} 

else
{
$alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n         This REGISTER NUMBER is already registered.      \n        Please Try Again...! ");</script>';
echo $alert;
INCLUDE('NEWACCOUNT.PHP');
}
}
else
{
$alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n       USER REGISTER NUMBER is not present in students record.      \n        Please Try Again...! ");</script>';
echo $alert;
INCLUDE('NEWACCOUNT.PHP');
}
    }
    else{
        $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n        Select VALID CATEGORY.      \n        Please Try Again...! ");</script>';
echo $alert;
INCLUDE('NEWACCOUNT.PHP');
    }

}
else{
    $alert='<script type="text/javascript">alert("                                   REGISTRATION FAILED    \n         Invalid REGISTER NUMBER.      \n        Please Try Again...! ");</script>';
echo $alert;
INCLUDE('NEWACCOUNT.PHP');
}
}


mysqli_close($conn);
?>