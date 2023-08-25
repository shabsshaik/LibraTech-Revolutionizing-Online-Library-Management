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
    $s="SELECT * FROM  student WHERE reg_no LIKE '%".$abc."%' ";
    $res=$conn->query($s);
    if(mysqli_num_rows($res)> 0)
    {

    $sqli="DELETE FROM newreg WHERE reg_no LIKE '%".$abc."%' ";
    $result=$conn->query($sqli);
$sqli="DELETE FROM student WHERE reg_no LIKE '%".$abc."%' ";
$result=$conn->query($sqli);
$sqli="DELETE FROM count_reg WHERE reg_no LIKE '%".$abc."%' ";
$result=$conn->query($sqli);

if($result==true)
{
    $alert="<script>alert('DELETED SUCCESSFULL!!');</script>";
    echo $alert;
    include("rdel.php");
}

else
{
$alert='<script type="text/javascript">alert("                                   DELETION FAILED    \n      Something Went Wrong.      \n        Please Try Again...! ");</script>';
echo $alert;
include("rdel.php");

}
}
else
{
$alert='<script type="text/javascript">alert("                                  DELETION FAILED    \n       USER REGISTER NUMBER is not present in students record.      \n       Please Try Again...! ");</script>';
echo $alert;
include("rdel.php");
}
}

else{
    $alert='<script type="text/javascript">alert("                                   DELETION FAILED    \n        Invalid BATCH NUMBER.      \n        Please Try Again...! ");</script>';
echo $alert;
include("rdel.php");
}

$conn->close();
?>