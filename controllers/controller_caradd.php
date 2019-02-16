<?php include("..\carsale\includefiles\header.php");?>
<?php
$condControl=$_POST["btnupdate"];

if($condControl=="add"){

$title = $_POST["title"];
$txtarea = $_POST["txtarea"];
$body_type = $_POST["body_type"];
$year = $_POST["year"];
$brand = $_POST["brand"];
$model = $_POST["model"];
$fueltype = $_POST["fueltype"];
$location = $_POST["location"];
$price = $_POST["price"];
$mileage = $_POST["mileage"];


$member_id=1;//to be changed
$sold=0;
$views=0;
//for photo uploading
$folder ="../uploads/";
$destFile = $folder . basename($_FILES["photo"]["name"]);
$sourdeFile = $_FILES["photo"]["tmp_name"];


if(move_uploaded_file($sourdeFile,$destFile)){
    echo "File has been uploaded";
    $photo = basename($_FILES["photo"]["name"]);
}else{
    echo $_FILES['photo']['error'];
    $photo = "images/default.png";
}

//load db 
include("..\carsale\includefiles\db.php");
//Check the db connection

if(mysqli_errno($con)){
    echo "Error:".mysqli_error($con);
}

$sql= "INSERT INTO car(title,description,body_type,year,brand,model,fuel_type,location,price,mileage,photo,date,sold,status)
        VALUES('$title','$txtarea','$body_type','$year','$brand','$model','$fueltype','$location','$price','$mileage','$photo',now(),$sold,$views)
        ";
    if(mysqli_query($con,$sql)){
       echo
        "
        <script>
        alert ('Your advertisment $title successfully added into sellmcar.com & redirecting to view caradd page');
        window.location='../carsale/newindex.php';
        </script>
        ";
        
}else{
    if(mysqli_errno($con)){
        echo "Error:".mysqli_error($con);
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
    $sql="DELETE FROM car  WHERE id='$brandID'";
    $result=mysqli_query($con,$sql);

    if(isset($result)){
        echo "<script>
      alert('ID: $brandID successfully deleted');
      window.location='../carsale/views/views_caradd/dashBoardCar.php';
        </script>";
    }
    else{
        echo "no";
    }

}

?>