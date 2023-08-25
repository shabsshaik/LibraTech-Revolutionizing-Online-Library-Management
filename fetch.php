<?php 
error_reporting(0);
?>
<?php
$connect = mysqli_connect("localhost", "root","", "digital");

$output = '';

$sq = "SELECT COUNT(*) FROM allbook";
$count =0;
if ($re = mysqli_query($connect, $sq)) {
    $r = mysqli_fetch_row($re);
    $count = $r[0];
}
echo "<center>";
echo "<B font size=4>TOTAL NUMBER OF BOOKS :<B>";
echo $count;
echo "<br>";

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);

$query = "
  SELECT * FROM allbook
  WHERE price LIKE '%".$search."%'
  OR category LIKE '%".$search."%' 
  OR book_no LIKE '%".$search."%' 
  OR author LIKE '%".$search."%' 
  OR rack_no LIKE '%".$search."%'
  OR title LIKE '%".$search."%'
 ";

}

else
{
 $query = "
  SELECT book_no,category,title,author,rack_no,price,available FROM allbook
   ORDER BY book_no ASC";

}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '

   <table class="table table bordered" cellpadding="30" border="1">
    
<tr>
<th><big>BOOK</th>

 <th><big>CATEGORY</th>

     <th><big>TITLE</th>

 <th><big>AUTHOR</th>
   
  <th><big>RACK</th>

  <th><big>PRICE</th>

<th><big>AVALIBLE</th>
    </Tr>
 ';
 $coun=0;
while($row = mysqli_fetch_array($result))
 { 
   $avail=$row["available"];
  if($avail=='no')
  {
    $coun=$coun+1;
    $output .= '

   <tr>

   <td bgcolor=#F95656>'.$row["book_no"].'</td>

   <td bgcolor=#F95656>'.$row["category"].'</td>

   <td bgcolor=#F95656>'.$row["title"].'</td>
 
  
  
  <td bgcolor=#F95656>'.$row["author"].'</td>
   
 <td bgcolor=#F95656>'.$row["rack_no"].'</td>

 <td bgcolor=#F95656>'.$row["price"].'</td>

<td bgcolor=#F95656>'.$row["available"].'</td>
   </Tr>
  ';

 }
 else{
  $output .= '
  <tr>

  <td>'.$row["book_no"].'</td>

  <td>'.$row["category"].'</td>

  <td>'.$row["title"].'</td>

 
 
 <td>'.$row["author"].'</td>
  
<td>'.$row["rack_no"].'</td>

<td>'.$row["price"].'</td>

<td >'.$row["available"].'</td>
  </pr>
 ';

}

}

 echo ".$output.";
 echo "<B font size=4>NUMBER OF BOOKS ISSUED :<B>";
echo $coun;
echo "</center>";
}
else
{
  
echo 'Data Not Found';
}

?>