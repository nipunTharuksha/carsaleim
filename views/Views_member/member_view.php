<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
        <!--Load Languages-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadlanguages.php");?>
        <!--Load bootstrap and other stylining links & js-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadcssjs.php");?> 
        <!--Navigation bar-->
        <?php include("\wamp64\www\im\carsale\includefiles\Navigationbar.php"); ?>
        <!--End of Navigation bar-->
        <script>
$(document).ready(function(){
    $("#members").click(function(){
        $("#ul").slideToggle();
    });
});
$(document).ready(function(){
    $("#members2").click(function(){
        $("#ul2").slideToggle();
    });
});
</script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dash Board</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
</head>
<body>
<!--Side Navigation bar-->
<?php include("\wamp64\www\im\carsale\includefiles\sideNavigationBar.php");?>

<!--BD view-->
<div class="col-md-10 bg-dark">
<div  class="container-fluid bg " >
            <div class="container font-weight-bold">
                
            <div class="raw">
            <?php
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                        //check the id
                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                        }else{
                            $id = 0;
                        }
                       
                        $sql=" SELECT * FROM member WHERE id ='$id'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        //return the number of rows
                        $numberOfRows = mysqli_num_rows($result);
                       
                        if(isset($_GET['id']) && ($numberOfRows>=1)){ 
                        }else{

                            echo 
                            "<script>
                             window.onload = redirectToPage('http://localhost/im/carsale/views/admin/dashBoard.php','member list');                   
                             </script>";
                        }
                        ?>
                        <h3 class="mt-3 text-white mb-5 font-weight-bold">View Member details</h3>
                            <label class="  mt-2 text-white  " ><h5 >Member ID :  <?=$row["id"];?></h5></label><br/>
                            <label class="  mt-2 text-white " ><h5 > Full Name :   <?=$row["name"];?></h5></label><br/>
                            <label class="  mt-2 text-white " ><h5 >Email :   <?=$row["email"];?></h5></label><br/>
                            <label class="  mt-2 text-white " ><h5 >Telphone  :   <?=$row["mobile"];?></h5></label><br/>
                           
                            <a class="btn btn-info mt-4 mb-4" id="goback" href="http://localhost/im/carsale/views/admin/dashBoard.php">Go Back To member List</a>
            </div>
        </div>
       
</div>

</div>

 <!--Load footer-->
 <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>  
</div>
 
</body>
</html>