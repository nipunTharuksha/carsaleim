<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>

<!DOCTYPE html>
<html>
        <head>

         <title>Delete Brand</title>
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
                 <!--Navigation bar-->
                 <?php include("\wamp64\www\im\carsale\includefiles\Navigationbar.php"); ?>
                <!--End of Navigation bar-->
                <div class="raw ">
                    <div class="col-md-8 mt-5">
                        <?php
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");

                        if(isset($_GET['id'])){
                        
                            echo "<script>

                            window.onload= deleteAlertPage;

                            </script>";

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
                        
                        <form action="\im\carsale\controllers\controller_brand_add.php" method="POST">
                        
                        <h3 class=" text-white mb-4 pt-5 font-weight-bold text text-danger">Delete Brand</h3>
                            <label class="   text text-danger font-weight-bold  " ><h2 >Brand ID :  <?=$row["id"];?></h2></label><br/>
                            <input type="hidden" name="hiddenId" value="<?=$row["id"];?>"/>
                            <label class="  mt-4 text text-danger font-weight-bold " ><h2 >Brand Name :   <?=$row["name"];?></h2></label><br/>
                            <a class="btn btn-info" id="goback" href="http://localhost/im/carsale/views/views_brand/brand_list.php">Go Back To Brand List</a>
                            <button type="submit" class="btn btn-danger" name="btnupdate" value="delete">Confirm Deletion</button>
                            <div class="alert alert-danger mt-5 w-50" role="alert">This operation cannot be undo!</div>

                            </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html> 