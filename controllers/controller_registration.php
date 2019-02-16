<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>
<?php

$condControl=$_POST["btnupdate"];

if($condControl=="add"){


$fullname = $_POST["fullname"];
$email = $_POST["email"];
$telphone = $_POST["telphone"];
$pw = $_POST["pw"];
$confirmpw = $_POST["confirmpw"];

//load db 
include("\wamp64\www\im\carsale\includefiles\db.php");
$sql = "INSERT INTO member(name,email,mobile,password,joined_date,role,status)
VALUES('$fullname','$email','$telphone','$pw',now(),'m','1')";

if(mysqli_query($con,$sql)){//window.location to be changed
    echo "<script>
    alert ('Thank You for registration');
    window.location='http://localhost/im/carsale/views/views_member/member_list.php'; 
    </script>";
}else{
    if(mysqli_errno($con)){
        echo "Error:".mysqli_error($sql);
    }
    echo "<h1>Failed retry</h1>";
   
}
}if($condControl=="edit"){
    $memberID = $_POST['id'];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $telphone = $_POST["telphone"];
    //load db 
    include("\wamp64\www\im\carsale\includefiles\db.php");

    $sql="UPDATE member SET name='$fullname',email='$email',mobile='$telphone' WHERE id='$memberID' ";
    $result=mysqli_query($con,$sql);
    
    if(isset($result)){
       
        echo "<script>
        alert('Member ID : $memberID updated successfully');
        window.location='http://localhost/im/carsale/views/admin/dashBoard.php';
        </script>";
    }else{
        if(mysqli_errno($con)){
            echo "Error:".mysqli_error($con);
        }  
    }

}
if($condControl=="delete"){

    $memberID=$_POST["hiddenId"];
    
    //load db 
include("\wamp64\www\im\carsale\includefiles\db.php");
    $sql="DELETE FROM member  WHERE id='$memberID'";
    $result=mysqli_query($con,$sql);

    if(isset($result)){
        echo "<script>
      alert('ID: $memberID successfully deleted');
      window.location='http://localhost/im/carsale/views/admin/dashBoard.php    ';
        </script>";
    }else{
        echo "no";
    }

}
if($condControl=="edit_status"){
    $memberID = $_POST['id'];
    $fullname = $_POST["fullname"];
    $role = $_POST["role"];
    $status = $_POST["status"];
    //load db 
    include("\wamp64\www\im\carsale\includefiles\db.php");

    $sql="UPDATE member SET role='$role',status='$status' WHERE id='$memberID' ";
    $result=mysqli_query($con,$sql);
    
    if(isset($result)){
       
        echo "<script>
        alert('Member ID : $memberID updated successfully');
        window.location='http://localhost/im/carsale/views/admin/dashBoard.php';
        </script>";
    }else{
        if(mysqli_errno($con)){
            echo "Error:".mysqli_error($con);
        }  
    }

}

?>