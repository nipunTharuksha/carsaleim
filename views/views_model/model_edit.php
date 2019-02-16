<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>

<!DOCTYPE html>
<html>
        <head>
        <title>Edit models in system</title>
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
                    <?php
                //load db 
                        if (isset($_GET['id'])){
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                        $id=$_GET['id'];
                        $sql="SELECT * FROM model WHERE id='$id'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        
                    }else{

                      echo "<script>
                      
                     window.onload = redirectToPage('http://localhost/im/carsale/views/views_model/model_list.php');                   
                     
                      </script>";
                      $row['id']= "This_feild_disabled.";
                      $row['name']= "This_feild_disabled";
                    }
                   ?>
                    <div class="col-md-5 mt-5">
                        <form method="POST" class="pt-5" action="\im\carsale\controllers\controller_model.php">
                        <h3 class="mt-3 text-white mb-5 font-weight-bold">Edit model in system</h3>
                            <label class=" text-uppercase  text text-white " ><h5 >Model ID</h5></label>
                            <input type="text" name="brandID" class="form-control mt-2" id="jsid" readonly  value=<?=$row['id'];?> />
                            <label class=" text-uppercase mt-4 text text-white " ><h5 >Model Name</h5></label>
                            <input type="text" name="brandName" class="form-control mt-1" id="jsun" required  value=<?=$row['name'];?>    />
                           
                            <button type="submit" class="btn btn-success btn-lg mt-5  mb-5" name="btnupdate" id="btnedit" value="edit">Submit</button>
                            <input type="reset" class="btn btn-warning  btn-lg mt-5 mb-5 btn float-right" id="btnReset" value="<?=$lang["btnReset"];?>" onclick="btnReset()"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html> 