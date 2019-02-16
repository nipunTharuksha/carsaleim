<?php
 session_start();
if(!isset($_SESSION)){
    $_SESSION['NAME'] = $row['name'];  
}
if(isset($_SESSION["ROLE"]) && $_SESSION["ROLE"]=='a'){

    
    
}else{
        header("Location: \im\carsale\login.php");
    }

?>  