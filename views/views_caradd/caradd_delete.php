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
                <div class="raw ">
                    <div class="col-md-8 mt-5">
                        <?php
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");

                        if(isset($_GET['id'])){
                            $id = $_GET['id'];
                        }
                        else{
                            $id = 0;
                        }
                        $sql=" SELECT * FROM car WHERE id ='$id'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        $numOfRows = mysqli_num_rows($result);
if ($numOfRows>=1){
    echo "<script>

    window.onload= deleteAlertPage;

    </script>";                          
  }else{

                            echo 
                            "<script>
                             window.onload = redirectToPage('http://localhost/im/carsale/views/views_caradd/dashBoardCar.php','CarList');                   
                             </script>";
                             $row['id']= null;
                             $row['name']= null;
                        }
                        ?>
                        
                        <form action="\im\carsale\controllers\controller_caradd.php" method="POST">
                        
                        <h3 class=" text-white mb-4 pt-5 font-weight-bold text text-danger">Delete Advertisment</h3>
                            <label class="   text text-danger font-weight-bold  " ><h2 >Advertisment ID :  <?=$row["id"];?></h2></label><br/>
                            <input type="hidden" name="hiddenId" value="<?=$row["id"];?>"/>
                            <label class="  mt-4 text text-danger font-weight-bold " ><h2 >Advertisment title :   <?=$row["title"];?></h2></label><br/>
                            <a class="btn btn-info" id="goback" href="http://localhost/im/carsale/views/views_caradd/dashBoardCar.php">Go Back To Brand List</a>
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