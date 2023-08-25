<?php 
error_reporting(0);
?>
<?php
$connect = mysqli_connect("localhost", "root", "", "digital");

$sq = "SELECT COUNT(*) FROM istable where staff_id!='0'";
$count =0;
if ($re = mysqli_query($connect, $sq)) {
    $r = mysqli_fetch_row($re);
    $count = $r[0];
}
echo "<center>";
echo "<B font size=4>ISSUING PERSON :<B>";
echo $count;
echo "<br>";
echo "</center>";
$output = '';

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);

$query = "
  SELECT * FROM istable
  WHERE  staff_id LIKE '%".$search."%'  ORDER BY issue_date desc

 ";

}

else
{
 $query = "SELECT * from istable where staff_id!='0' ORDER BY issue_date desc";

}
$result = mysqli_query($connect, $query);
?>
<center>
<table border="1" cellpadding="30">
<tr>
<th><big><big>REGISTER NUMBER</th>
<th><big><big>CATEGORY</th>
<th><big><big>BOOK.NO</th>
<th><big><big>TITLE</th>
<th><big><big>AUTHOR</th>
<th><big><big>RACK.NO</th>
<th><big><big>PRICE</th>
<th><big><big>ISSUE DATE</th>
<th><big><big>RETURN DATE</th>
</tr>
<?php
if($result->num_rows>0)
{
  $count=0;
while( $row=$result->fetch_assoc())
{ $pre=date('Y-m-d');
    $re=$row['return_date'];
    $stud_id=$row['staff_id'];

if($pre<$re)
{
echo "
<tr>
<td>" .$row['staff_id']."</td>
<td>" .$row['category']."</td>
<td>" .$row['book_no']."</td>
<td>" .$row['title']."</td>
<td>" .$row['author']."</td>
<td>" .$row['rack_no']."</td>
<td>" .$row['price']."</td>
<td >" .$row['issue_date']."</td>
<td><font color=red>" .$row['return_date']."</td>
 ";
}
else{
  $count=$count+1;
    echo "
<tr>

<td bgcolor=#f77474>
<a href='divi.php?delete=$row[staff_id]'>" .$row['staff_id']."</a></td>

<td bgcolor=#f77474>" .$row['category']."</td>
<td bgcolor=#f77474>" .$row['book_no']."</td>
<td bgcolor=#f77474>" .$row['title']."</td>
<td bgcolor=#f77474>" .$row['author']."</td>
<td bgcolor=#f77474>" .$row['rack_no']."</td>
<td bgcolor=#f77474>" .$row['price']."</td>
<td bgcolor=#f77474>" .$row['issue_date']."</td>
<td bgcolor=#f77474>" .$row['return_date']."</td>
</tr>
 ";
}
}
echo "<B font size=4>NUMBER OF LIMIT EXCEEDED :<B>";
echo $count;
echo "<br>";

echo "</table>";
}
else
{
echo "NO data";
}
?>