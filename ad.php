<?php 
error_reporting(0);
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="digital";
$conn=new mysqli($servername, $username, $password, $db);

$abc=strtoupper($_POST['k1']);
$def=strtoupper($_POST['k2']);
$pqr=strtoupper($_POST['k3']);
$xyz=strtoupper($_POST['k4']);
$klm=strtoupper($_POST['k5']);
$nop=strtoupper($_POST['k6']);
$yes='yes';

if(isset($abc,$def,$pqr,$xyz,$klm,$nop,$yes))
{
$query = "SELECT * FROM allbook WHERE book_no='$def'";
$query_run = mysqli_query($conn, $query);

if(mysqli_num_rows($query_run) == 0)
{

$sqli="INSERT INTO `allbook`(`category`, `book_no`, `title`, `author`, `rack_no`, `price`, `available`) VALUES ('$abc','$def','$pqr','$xyz','$klm','$nop','$yes')";
$result=$conn->query($sqli);

if($result===True)
{
$alert="<script>alert('Record is Successfully Added !');</script>";
echo $alert;
echo "<script>
window.location.assign('addallb.php');
</script>";

}

else
{
$alert='<script type="text/javascript">alert("                                   UPLOADING FAILED    \n        Something went wrong...      \n        Please Try Again...! ");</script>';
echo $alert;
echo "<script>
window.location.assign('addallb.php');
</script>";
}

}
else{
    $in_query="UPDATE `allbook` SET `category`='$abc',`book_no`='$def',`title`='$pqr',`author`='$xyz',`rack_no`='$klm',`price`='$nop',`available`='$yes' WHERE book_no='$def'";
    $in_result=mysqli_query($conn,$in_query);
   
    $alert="<script>alert(' UPDATED SUCCESSFULLY!');</script>";
    echo $alert;
    echo "<script>
    window.location.assign('addallb.php');
    </script>";
}

}
$conn->close();
?>

