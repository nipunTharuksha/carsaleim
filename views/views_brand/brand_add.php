<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>


<!DOCTYPE html>
<html>
        <head>
        <title>Add brands into system</title>

                <!--Load Languages-->
         <?php include("\wamp64\www\im\carsale\includefiles\loadlanguages.php");?>
            <!--Load bootstrap and other stylining links & js-->
         <?php include("\wamp64\www\im\carsale\includefiles\loadcssjs.php");?> 
           <!--Navigation bar-->
         <?php include("\wamp64\www\im\carsale\includefiles\Navigationbar.php"); ?>
         <!--End of Navigation bar-->

        </head>
    <body >   
    <hr>        
        <div  class="container-fluid  bg bg-secondary">
            <div class="container font-weight-bold">
                <div class="raw ">
                    <div class="col-md-5 mt-5">
                        <form method="POST" class="pt-5" action="\im\carsale\controllers\controller_brand_add.php">
                        <h3 class="mt-3 text-white mb-5 font-weight-bold">Add brand into system</h3>
                            <label class=" text-uppercase mt-4 text text-white " ><h5 >Brand Name</h5></label>
                            <input type="text" name="brandname" class="form-control mt-4" id="jsun"  placeholder="Enter brand name here" required  onchange="emailValidation(jsun,'Username');"/>
                            <button type="submit" class="btn btn-success btn-lg mt-5  mb-5" name="btnupdate" value="add">Submit</button>
                            <input type="reset" class="btn btn-warning  btn-lg mt-5 mb-5 btn float-right" value="<?=$lang["btnReset"];?>" onclick="btnReset()"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html> 