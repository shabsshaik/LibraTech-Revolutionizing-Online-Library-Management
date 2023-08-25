<?php 
error_reporting(0);
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="digital";
$conn=new mysqli($servername, $username, $password, $db);

$abc=$_POST['r4'];
if(strlen($abc)>2 )
{
    $s="SELECT * FROM  staff WHERE staff_id LIKE '%".$abc."%'";
    $res=$conn->query($s);
    if(mysqli_num_rows($res) > 0)
    {
$sqli="DELETE FROM staff WHERE staff_id LIKE '%".$abc."%'";
$result=$conn->query($sqli);
$sqli="DELETE FROM stafreg WHERE staff_id LIKE '%".$abc."%' ";
    $resultss=$conn->query($sqli);
    $sqli="DELETE FROM staff_reg WHERE staff_id LIKE '%".$abc."%' ";
    $resultsss=$conn->query($sqli);

if($result==true )
{ 
    $alert="<script>alert(' DELETED SUCCESSFULL...!!');</script>";
    echo $alert;
    include("staffdel.php");
}
else
{
$alert='<script type="text/javascript">alert("                                   DELETION FAILED    \n      Something Went Wrong.      \n        Please Try Again...! ");</script>';
echo $alert;
include("staffdel.php");
}
}
else
{
$alert='<script type="text/javascript">alert("                                  DELETION FAILED    \n       USER EMPLOYEE ID is not present in faculty record.      \n       Please Try Again...! ");</script>';
echo $alert;
include("staffdel.php");
}
}
else{
    $alert='<script type="text/javascript">alert("                                   DELETION FAILED    \n        Invalid BATCH NUMBER.      \n        Please Try Again...! ");</script>';
echo $alert;
include("staffdel.php");
}


$conn->close();
?>

