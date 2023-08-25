<?php 
error_reporting(0);
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="digital";
$conn=new mysqli($servername, $username, $password, $db);

$abc=$_POST['k1'];
$def=$_POST['k2'];
$pqr=$_POST['k3'];


$query = "SELECT * FROM staff WHERE staff_id='$def'";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) == 0)
{

$le=strlen($def);
if($le==10)
{

$sqli="INSERT INTO `staff`(`depart`, `staff_id`, `names`) VALUES ('$pqr','$def','$abc')";
$result=$conn->query($sqli);

if($result===True)
{
$alert="<script>alert('Record is Successfully Added !');</script>";
echo $alert;
echo "<script>
window.location.assign('in1.php');
</script>";

}

else
{
$alert='<script type="text/javascript">alert("                                   UPLOADING FAILED    \n        Something went wrong...      \n        Please Try Again...! ");</script>';
echo $alert;
echo "<script>
window.location.assign('in1.php');
</script>";

}
}
else{
    $alert='<script type="text/javascript">alert("                                   ADDING FAILED    \n         Invalid EMPLOYEE ID.      \n        Please Try Again...! ");</script>';
echo $alert;
echo "<script>
window.location.assign('in1.php');
</script>";
}
}

else{
    $in_query="UPDATE `staff` SET `depart`='$pqr',`staff_id`='$def',`names`='$abc' where staff_id='$def'";
    $in_result=mysqli_query($conn,$in_query);
   
    $alert="<script>alert(' UPDATED SUCCESSFULLY!');</script>";
    echo $alert;
    echo "<script>
    window.location.assign('in1.php');
    </script>";

}


$conn->close();
?>

