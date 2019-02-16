<?php
//connect db

$con=mysqli_connect("localhost","root","","carsaLe");
//Check the db connection

if(mysqli_errno($con)){
    echo "Error:".mysqli_error($con);
}


?>