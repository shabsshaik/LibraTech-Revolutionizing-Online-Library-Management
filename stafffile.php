<?php 
error_reporting(0);
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "digital");
$sq = "SELECT COUNT(*) FROM stafreg";
$count =0;
if ($re = mysqli_query($connect, $sq)) {
    $r = mysqli_fetch_row($re);
    $count = $r[0];
}
echo "<center>";
echo "<B font size=4>TOTAL NUMBER OF EMPLOYEES REGISTERED :<B>";
echo $count;
echo "<br>";
echo "</center>";
$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);

$query = "
  SELECT * FROM stafreg
  WHERE firstname LIKE '%".$search."%'
  OR lastname LIKE '%".$search."%' 
  OR staff_id LIKE '%".$search."%' 
  OR depart LIKE '%".$search."%' 
  OR contact LIKE '%".$search."%'
  OR email LIKE '%".$search."%'
 ";

}

else
{
 $query = "
  SELECT * FROM  stafreg  ORDER BY staff_id";

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)


{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered" cellpadding="30" border="1"> 
<tr>
     
<th><big>NAME</th>

     <th><big>STAFF ID</th>
     
<th><big>DEPARTMENT</th>
    

    
 <th><big>CONTACT</th>
   
  <th><big>EMAIL</th>
    </tr>
 ';
 
while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
  
  <td>'.$row["lastname"].' '.$row["firstname"].'</td>
 
   <td>'.$row["staff_id"].'</td>
 
   <td>'.$row["depart"].'</td>

  
  <td>'.$row["contact"].'</td>
   
 <td>'.$row["email"].'</td>
   </tr>
  ';

 }

 echo $output;

}
else

{
 
echo '<CENTER><BR>Data Not Found';

}
?>