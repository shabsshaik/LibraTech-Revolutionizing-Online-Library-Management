<?php 
error_reporting(0);
?>
<html>
<head>
 <title>ALL BOOKS DETAILS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital";
$conn =new mysqli($servername, $username, $password, $dbname);
session_start();
$time=time();
$timer="SELECT ti FROM `look` WHERE pass='cse' ||  pass='CSE'";
$resultss= $conn->query($timer);
$tim=mysqli_fetch_row($resultss);
$ti=$tim[0];
$ti=$ti+10800;
if($time<$ti)
{
if ($_SESSION["user"] =='cse' ) 
 {
?>

<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    }

    body {font-family: Arial, Helvetica, sans-serif;}
    img {vertical-align: middle;}
    
    ::-webkit-scrollbar{
      width: 10px;
  }
  ::-webkit-scrollbar-track{
      background: transparent; 
      border-radius: 10px;
      box-shadow: inset 0 0 5px rgba(128, 128, 128, 0.400);
  }
  ::-webkit-scrollbar-thumb{
      background: #999;
      border-radius: 10px;
  } 
  ::-webkit-scrollbar-thumb:hover{
      background: #777; 
  }

  .top{
    margin: 0 auto;
    text-align: center;
    background-image: url(navi.png);
}

.top h1{
    font-family: Engravers MT;
    padding: 10px 0 6px;
    font-size: 32px;
    font-weight: bold;
    color: #3152A5;
    text-shadow: 0 2px 8px rgb(0, 0, 0,0.100);
}

.top p{
    font-family: Engravers MT;
    padding-bottom: 10px;
    font-size: 24px;
    color:#3152A5;
    text-shadow: 0 2px 8px rgb(0, 0, 0,0.100);
}
    
    .topnav{
      overflow: hidden;
      background-color: #FFB573;
      text-align: center;
      height: 47px;
    }
    .topnav ul{
      overflow: hidden;
    }

    .topnav ul li{
      list-style: none;
      display: inline-block;
    }

    .topnav a {
      float: left;
      font-size: 19px;
      color: black;
      text-align: right;
      padding: 12px 31px;
      text-decoration: none;
      display: block;
    }
  
    .dropdown {
      float: left;
      overflow: hidden;
      display: block;
    }
    
    .dropdown .dropbtn {
      font-size: 19px;  
      border: none;
      outline: none;
      color: black;
      padding: 12px 19px;
      background-color: inherit;
      font-family: inherit;
    }
    
    .topnav a:hover, .dropdown:hover{
      background-color: #FF9C4A;
      border-radius: 2px;
    }
    
    .dropdown-content{
      display: none;
      position: absolute;
      background-color: #FFB573;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 19px;
      text-decoration: none;
      display: block;
      text-align: left;
    }
    
    .dropdown-content a:hover {
      background-color: #FF9C4A;
    }
    
    .dropdown:hover .dropdown-content {
      display: block;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      border-radius: 10px;
    }
    
    th, td {
      text-align: left;
      padding: 8px;
    }
    
    th {
      background-color: #31B5D6;
      color: white;
    }
    
    .myButton {
      background:linear-gradient(to bottom, #39ca74 5%, #5cbf2a 100%);
      background-color:#39ca74;
      border-radius:33px;
      border:1px solid #18ab29;
      display:inline-block;
      cursor:pointer;
      color:#ffffff;
      font-family:Comic Sans MS;
      font-size:17px;
      padding:10px 20px;
      text-decoration:none;
      text-shadow:0px 1px 0px #2f6627;
    }
    .myButton:hover{
    box-shadow:0 0 15px #229b4ada;
    }
    .myButton:active {
      position:relative;
      top:1px;
    }
    
    .pay{
    border-radius:4px;
    border:1px solid #000b6e91;
    display: inline-block;
    cursor:pointer;
    border-top-left-radius:10px;
    border-top-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-left-radius:10px;
    color:(212,16,16);
    font-family:arial;
    font-size:15px;
    padding:6px 15px;
    text-decoration:none;
    text-shadow:0px 1px 0px #d46700;
    }
    .pay:hover{
    box-shadow:0 0px 15px #aab3b3ab;
    }


</style>  
</head>
<body>
<div class="top">
  <h1>SAGI RAMA KRISHNAM RAJU ENGINEERING COLLEGE (AUTONOMOUS)</h1>
  <p>COMPUTER SCIENCE AND ENGINEERING DEPARTMENT</p>
</div>

<div class="topnav">
  <ul>
    <li>
      <a href="menu.php">Home</a>
    </li>
    
    <li>
      <div class="dropdown" >
        <button class="dropbtn">New Register
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="newaccount.php">Student</a>
          <a href="staffaccount.php">Staff</a>
        </div>
      </div>
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Book Details
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="index.php">All Books</a>
          <a href="addallb.php">Add Books</a>
          <a href="DEL.PHP">Delete Book</a>
        </div>     
      </div>
    </li>

    <li>
      <div class="dropdown" >
        <button class="dropbtn">Issue Book
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="newnet.php">Student</a>
          <a href="issuestaff.php">Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Return Book
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="return.php">Student</a>
          <a href="return1.php">Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Daily Records
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >

          <a href="show2.php">Student</a>
          <a href="show3.php">Staff</a>
        </div>     
      </div>
    </li>
      
    <li>
      <div class="dropdown">
        <button class="dropbtn">Card Holder
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="profile.php">Student</a>
          <a href="staffpro.php">Staff</a>
        </div>     
      </div>
    </li>

    <li>
      <div class="dropdown">
        <button class="dropbtn">Update Details
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="in.php">Upload  Student </a>
          <a href="in1.php">Upload  Staff</a>
          <a href="rdel.php">Delete  Student</a>
          <a href="staffdel.php">Delete  Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <div class="dropdown" >
        <button class="dropbtn">Profile
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content" >
          <a href="a.php">  Student </a>
          <a href="b.php"> Staff</a>
        </div>
      </div> 
    </li>

    <li>
      <a href="logout.php">Logout</a>   
    </li>

  </ul>
</div>
<div class="container">

 <h1 align="center" style="margin: 20px 0;"><u>ALL BOOKS DETAILS</h1></u>
   
<div class="form-group">
    <div class="input-group">

 <center> <table border="1" bgcolor="linen"><tr><th> <big></span>  <input type="text" name="search_text" id="search_text" placeholder="Searching Here...."  class="pay" style="height:4vh; width:190vh" />  </th></tr></table>
  
  </div>
   </div>
   <br>
   
<div id="result"></div>
  </div>
 </body>

</html>



<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{
query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 
}

 $('#search_text').keyup(function(){
  var search = $(this).val();
 
 if(search != '')
  {
   load_data(search);

 }
  else
  {
   load_data();
 
 }

 });

});

</script>
<?php
}
elseif(!$_SESSION['user'])
{
  $alert='<script type="text/javascript">alert("                                     Your  Session has  Expired.      \n        Click OK to login. ");</script>';
  echo $alert; 
  session_destroy();
  echo "<script>
window.location.assign('r1.html');
</script>";
}
else
{
  $alert='<script type="text/javascript">alert("                                   LOGIN FAILED    \n        Your  password is incorrect.      \n        Please Try Again. ");</script>';
  echo $alert; 
  session_destroy();
  echo "<script>
window.location.assign('r1.html');
</script>";
}
}
else{
  session_destroy();
  header('Location:r1.html');
}
?>
