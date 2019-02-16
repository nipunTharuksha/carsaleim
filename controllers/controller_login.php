<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>
<?php
if(!isset($_SESSION)){
    session_start();
}
//load db 
include("\wamp64\www\im\carsale\includefiles\db.php");

$email =$_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM member WHERE email ='$email' AND password = '$password'";
$result = mysqli_query ($con,$sql);
if($row = mysqli_fetch_array($result)){
  

   $_SESSION['ID'] = $row['id'];
   $_SESSION['NAME'] = $row['name'];
   $_SESSION['ROLE'] = $row['role'];

   if($_SESSION['ROLE']=='a'){

    header("Location: http://localhost/im/carsale/views/admin/dashBoard.php");
}else{
    header("Location: http://localhost/im/carsale/newindex.php");
}
}
?>