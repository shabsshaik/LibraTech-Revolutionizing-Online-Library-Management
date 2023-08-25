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
$pqr="CSE";

if(isset($abc,$def,$pqr))
{
$query = "SELECT * FROM student WHERE reg_no='$def'";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) == 0)
{

$le=strlen($def);
if($le==10)
{

$sqli="INSERT INTO `student`(`branch`, `reg_no`, `names`) VALUES ('$pqr','$def','$abc')";
$result=$conn->query($sqli);

if($result===True)
{
$alert="<script>alert('Record is Successfully Added !');</script>";
echo $alert;
echo "<script>
window.location.assign('in.php');
</script>";

}

else
{
$alert='<script type="text/javascript">alert("                                   UPLOADING FAILED    \n        Something went wrong...      \n        Please Try Again...! ");</script>';
echo $alert;
echo "<script>
window.location.assign('in.php');
</script>";

}
}
else{
    $alert='<script type="text/javascript">alert("                                   ADDING FAILED    \n         Invalid REGISTER NUMBER.      \n        Please Try Again...! ");</script>';
echo $alert;
echo "<script>
window.location.assign('in.php');
</script>";
}
}
else{
    $in_query="UPDATE `student` SET `branch`='$pqr',`reg_no`='$def',`names`='$abc' where reg_no='$def'";
    $in_result=mysqli_query($conn,$in_query);
   
    $alert="<script>alert(' UPDATED SUCCESSFULLY!');</script>";
    echo $alert;
    echo "<script>
    window.location.assign('in.php');
    </script>";
}

}
$conn->close();
?>

