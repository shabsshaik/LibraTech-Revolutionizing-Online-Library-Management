<?php 
error_reporting(0);
?>
<?php
$servername="localhost";
$username="root";
$password="";
$db="digital";
$con=new mysqli($servername, $username, $password, $db);

$se=$_GET['delete'];


$sql="DELETE FROM allbook where book_no='$se'";
$result = $con->query($sql);

if($result==true)
{
$schoo="SELECT reg_no from istable where book_no='$se'";
$sch = $con->query($schoo);


if(mysqli_num_rows($sch) > 0)
{
 foreach($sch as $rom)                          
 {                                         
$a=$rom['reg_no'];

$chec="SELECT cou from count_reg where reg_no='$a'";
$ch=$con->query($chec);
$rent=mysqli_fetch_row($ch);
$ab=$rent[0];
echo $ab;
$ab=$ab-1;
echo $ab;

$COU="UPDATE `count_reg` SET`cou`='$ab' WHERE reg_no='$a'";
$resultst = $con->query($COU);

$sqlii="DELETE FROM istable where book_no='$se'";
$results = $con->query($sqlii);

}
}


$alert="<script>alert('Are you sure. Do you want to DELETE THE BOOK');</script>";
echo $alert;
echo "<script>
window.location.assign('DEL.php');
</script>";

}
else
{
$alert="<script>alert('ERROR');</script>";
echo $alert;
echo "<script>
window.location.assign('DEL.php');
</script>";
}

?>

