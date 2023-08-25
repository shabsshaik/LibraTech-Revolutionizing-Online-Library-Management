<?php 
error_reporting(0);
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "digital");

$sq = "SELECT COUNT(*) FROM newreg";
$count =0;
if ($re = mysqli_query($connect, $sq)) {
    $r = mysqli_fetch_row($re);
    $count = $r[0];
}
echo "<center>";
echo "<B font size=4>TOTAL NUMBER OF STUDENTS REGISTERED :<B>";
echo $count;
echo "<br>";
echo "</center>";
$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);

$query = "
  SELECT * FROM newreg
  WHERE firstname LIKE '%".$search."%'
  OR lastname LIKE '%".$search."%'
  OR reg_no LIKE '%".$search."%' 
  OR branch LIKE '%".$search."%' 
  OR section LIKE '%".$search."%' 
  OR year LIKE '%".$search."%'
  OR caste LIKE '%".$search."%'
  OR contact LIKE '%".$search."%'
  OR email LIKE '%".$search."%'
 ";

}

else
{
 $query = "
  SELECT * FROM  newreg  ORDER BY reg_no";

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)


{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered" cellpadding="30" border="1">
    
<tr>
     
<th><big>NAME</th>

     <th><big>REGISTRATION NUMBER</th>
     
<th><big>BRANCH</th>
    
 <th><big>SECTION</th>
   
  <th><big>YEAR</th>
<th><big>CASTE</th>
    
 <th><big>CONTACT</th>
   
  <th><big>EMAIL</th>
    </tr>
 ';
 
while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
  
  <td>'.$row["firstname"].' '.$row["lastname"].'</td>
 
   <td>'.$row["reg_no"].'</td>
 
   <td>'.$row["branch"].'</td>
  
  <td>'.$row["section"].'</td>
   
 <td>'.$row["year"].'</td>

<td>'.$row["caste"].'</td>
  
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