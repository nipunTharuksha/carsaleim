<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>

<!DOCTYPE html>
<html>
        <head>
        <title>View Brand</title>
        <!--Load Languages-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadlanguages.php");?>
        <!--Load bootstrap and other stylining links & js-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadcssjs.php");?> 
        <!--Navigation bar-->
        <?php include("\wamp64\www\im\carsale\includefiles\Navigationbar.php"); ?>
        <!--End of Navigation bar-->
        </head>
    <body >           
        <div  class="container-fluid " id="divbglogin">
            <div class="container font-weight-bold">
                <div class="raw ">
                   
                    <div class="col-md-5 mt-5">
                        <?php
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                        if(isset($_GET['id'])){

                        $id = $_GET['id'];
                        $sql=" SELECT * FROM brand WHERE id ='$id'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);

                        }else{

                            echo 
                            "<script>
                             window.onload = redirectToPage('http://localhost/im/carsale/views/views_brand/brand_list.php');                   
                             </script>";
                             $row['id']= null;
                             $row['name']= null;
                        }
                        ?>
                        <h3 class="mt-3 text-white mb-5 font-weight-bold">View Brand</h3>
                            <label class="  mt-2 text text-white " ><h5 >Brand ID :  <?=$row["id"];?></h5></label><br/>
                            <label class="  mt-4 text text-white " ><h5 >Brand Name :   <?=$row["name"];?></h5></label><br/>
                            <a class="btn btn-info" id="goback" href="http://localhost/im/carsale/views/views_brand/brand_list.php">Go Back To Brand List</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html> 