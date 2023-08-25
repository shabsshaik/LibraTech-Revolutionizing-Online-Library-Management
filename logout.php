<?php 
error_reporting(0);
?>
<html>
<head>
    <title>Logout</title>
<script language="javascript" type="text/javascript">
window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Out</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital";
$conn =new mysqli($servername, $username, $password, $dbname);
session_start();
if($_SESSION['user']=='cse' || $_SESSION['user']=='CSE')
{
    $timer="SELECT ti FROM `look` WHERE pass='cse'";
    $resultss= $conn->query($timer);
    $time=time();

if(mysqli_num_rows($resultss) > 0)
{
    $update="UPDATE `look` SET `pass`='cse',`ti`='$time'";
    $reo= $conn->query($update);
}
else{
    $log="INSERT INTO `look`(`pass`, `ti`) VALUES ('0','0')";
    $result = $conn->query($log);
}
session_destroy();
header('Location:r1.html');
}
else{
    session_destroy();
    header('Location:r1.html'); 
}
?>

</body>
</html>