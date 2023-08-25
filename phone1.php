<?php
$servername="localhost";
$username="root";
$password="";
$db="li";
$con=new mysqli($servername, $username, $password, $db);



$se=$_GET['delete'];



$codes="SELECT reg_no from istable where book_no='$se'";
$co=$con->query($codes);
$coder=mysqli_fetch_row($co);
$re=$coder[0];



$chec="SELECT cou from count_reg where reg_no='$re'";
$ch=$con->query($chec);
$rent=mysqli_fetch_row($ch);
$a=$rent[0];

$a--;

$ct="UPDATE count_reg SET  cou='$a' WHERE `reg_no`='$re'";
$reach= $con->query($ct);

$sql="DELETE FROM istable where book_no='$se'";
$result = $con->query($sql);

$sqli="UPDATE allbook SET available='yes'
where book_no='$se'";
$resu = $con->query($sqli);


$shabs="SELECT email from newreg where reg_no='$re'";
$shaba=$con->query($shabs);
$shu=mysqli_fetch_row($shaba);
$sh=$shu[0];

if($result===true)
{
$alert="<script>alert('DO YOU WANT TO RETURN A BOOK');</script>";
echo $alert;
include("phone.php");
$to = $sh;
         $subject = "received";
         
         $message = "BOOK RETURNED";
        
         
         $header = "From:shabanashaik2003@gmail.com\r\n";
         
          mail($to,$subject,$message,$header);
}
else
{
$alert="<script>alert('ERROR');</script>";
echo $alert;
include("phone.php");
}

?>

