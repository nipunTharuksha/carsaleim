<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>
<?php
$condControl=$_POST["btnupdate"];

if($condControl=="add"){

$modelName = $_POST["brandname"];

//load db 
include("\wamp64\www\im\carsale\includefiles\db.php");
//Check the db connection

if(mysqli_errno($con)){
    echo "Error:".mysqli_error($con);
}

$sql= "INSERT INTO model(name)
        VALUES('$modelName')
        ";
    if(mysqli_query($con,$sql)){
        echo
        "
        <script>
        alert ('Your brand $modelName successfully added into system & redirecting to model list page');
        window.location='http://localhost/im/carsale/views/views_model/model_list.php';
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
    
    $sql="UPDATE model SET name='$brandname' WHERE id='$brandID'";
    $result=mysqli_query($con,$sql);
    
    if(isset($result)){
        echo "<script>
        alert('BrandId : $brandID updated successfully');
        window.location='http://localhost/im/carsale/views/views_model/model_list.php';
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
      window.location='http://localhost/im/carsale/views/views_model/model_list.php';
      </script>";
    }else{
        echo "no";
    }

}

?>