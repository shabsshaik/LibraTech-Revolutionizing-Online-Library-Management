<?php 
error_reporting(0);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital";

session_start();
$conn =new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user=$_POST['k1'];
$pass=$_POST['k2'];

$sql = "SELECT * FROM log where admin='$user' and password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows> 0) 
{
$_SESSION["user"]=$pass;
$time=time();

$timer="SELECT ti FROM `look` WHERE pass='cse'";
$resultss= $conn->query($timer);

if(mysqli_num_rows($resultss) > 0)
{
    $update="UPDATE `look` SET `pass`='cse',`ti`='$time'";
    $reo= $conn->query($update);
}

 header('location:menu.php');  
} 
else {
    
    $alert='<script type="text/javascript">alert("                                   LOGIN FAILED    \n        Your username or password is incorrect.      \n        Please Try Again. ");</script>';
    echo $alert; 
    echo "<script>
window.location.assign('r1.html');
</script>";
}
$conn->close();
?>
</body>
</html>