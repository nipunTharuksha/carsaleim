<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>

<!DOCTYPE html>
<html>
        <head>
        <title>model Brand</title>
            <!--Load Languages-->
            <?php include("\wamp64\www\im\carsale\includefiles\loadlanguages.php");?>
            <!--Load bootstrap and other stylining links & js-->
                 <?php include("\wamp64\www\im\carsale\includefiles\loadcssjs.php");?>

        </head>
    <body >           
        <div  class="container-fluid " id="divbglogin">
            <div class="container font-weight-bold">
                 <!--Navigation bar-->
                 <?php include("\wamp64\www\im\carsale\includefiles\Navigationbar.php"); ?>
                <!--End of Navigation bar-->
                <div class="raw ">
                   
                    <div class="col-md-5 mt-5">
                        <?php
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                        if(isset($_GET['id'])){

                        $id = $_GET['id'];
                        $sql=" SELECT * FROM model WHERE id ='$id'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);

                        }else{

                            echo 
                            "<script>
                             window.onload = redirectToPage('http://localhost/im/carsale/views/views_model/model_list.php');                   
                             </script>";
                             $row['id']= null;
                             $row['name']= null;
                        }
                        ?>
                        <h3 class="mt-3 text-white mb-5 font-weight-bold">View model</h3>
                            <label class="  mt-2 text text-white " ><h5 >Model ID :  <?=$row["id"];?></h5></label><br/>
                            <label class="  mt-4 text text-white " ><h5 >Model Name :   <?=$row["name"];?></h5></label><br/>
                            <a class="btn btn-info" id="goback" href="http://localhost/im/carsale/views/views_model/model_list.php">Go Back To model List</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html> 