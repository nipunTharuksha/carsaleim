<?php

session_start();
if(!isset($_SESSION)){
  
}
if(isset($_SESSION["ROLE"]) && $_SESSION["ROLE"]=='a'){

   
   
}else{
       header("Location:..\carsale\login.php");
   }

$condControl=$_POST["btnupdate"];

if($condControl=="add"){

$brandname = $_POST["brandname"];

//load db 
include("..\carsale\includefiles\db.php");
//Check the db connection

if(mysqli_errno($con)){
    echo "Error:".mysqli_error($con);
}

$sql= "INSERT INTO brand(name)
        VALUES('$brandname')
        ";
    if(mysqli_query($con,$sql)){
        echo
        "
        <script>
        alert ('Your brand $brandname successfully added into system & redirecting to brand list page');
        window.location='../carsale/views/views_brand/brand_list.php';
        </script>
        ";
        
}else{
    if(mysqli_errno($con)){
        echo "Error:".mysqli_error($sql);
    }
    echo "<script>
    <h1>
    alert ('
    </h1>
    </script>";
} 
}if($condControl=="edit"){
    
    $brandname = $_POST["brandName"];
    $brandID=$_POST["brandID"];
    //load db 
    include("../includefiles/db.php");
    
    $sql="UPDATE brand SET name='$brandname' WHERE id='$brandID'";
    $result=mysqli_query($con,$sql);
    
    if(isset($result)){
        echo "<script>
        alert('BrandId : $brandID updated successfully');
        window.location='../carsale/views/views_brand/brand_list.php';
        </script>";
    }else{
        echo "no";
    }

}

if($condControl=="delete"){

    $brandID=$_POST["hiddenId"];
    
    //load db 
    include("../includefiles/db.php");
    $sql="DELETE FROM brand  WHERE id='$brandID'";
    $result=mysqli_query($con,$sql);

    if(isset($result)){
        echo "<script>
      alert('ID: $brandID successfully deleted');
      window.location='../carsale/views/views_brand/brand_list.php';
        </script>";
    }else{
        echo "no";
    }

}

?>