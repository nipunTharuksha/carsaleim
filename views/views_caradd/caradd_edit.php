<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>
<!DOCTYPE html>
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
                
                <div class="raw text-white">
                <h3 class="text-center py-2 font-weight-bold">Edit the Advertisment</h3>
                            <?php
                //load db 
                        if (isset($_GET['id'])){
                            $id=$_GET['id'];
                        }else{
                            $id = 0;
                        }
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                        $sql="SELECT * FROM car WHERE id='$id'";
                        $result=mysqli_query($con,$sql);
                        $numOfRows = mysqli_num_rows($result);
                        $row1=mysqli_fetch_array($result);
                        if ($numOfRows>=1){
                    }else{
                      echo "<script>                    
                     window.onload = redirectToPage('http://localhost/im/carsale/views/views_caradd/dashBoardCar.php','Adverisment List');                    
                      </script>";
                      $row['id']= "This_feild_disabled.";
                      $row['name']= "This_feild_disabled";
                    }
                   ?>
                            <form method="POST" action="\im\carsale\controllers\controller_caradd.php">
                                <label><?=$lang["lbltitle"];?></label>
                                <br />
                                <input type="text" name="title" class="form-control" id="jsTitle" value="<?=$row1['title'];?>" required />
                                <br />
                                <label><?=$lang["lbldescribcar"];?></label>
                                <br />
                                <textarea  name="txtarea" class="form-control" cols="10" rows="2" required><?=$row1['description'];?></textarea>
                                <br />
                                <div class="row text-center ">

                                 <!--dropdown for body type selection-->
                                 <div class="col-md-6">
                                        <label>Body Type</label>
                                        <br />
                                        <select class="form-control" required name="body_type" value=" ">
                                        <option selected="Select the body type" disabled >Select the body type</option>
                                         <option value="microCar">Micro Car</option>
                                         <option value="subcompactCar">Subcompact Car</option>
                                         <option value="compactCar">Compact Car</option>
                                         <option value="midiSizeCar">Midi Size Car</option>
                                        </select>
                                         <!--end of dropdown for brand selection--> 
                                        <br />
                                    </div>
                                    <div class="col-md-6">
                                     <!--dropdown for Year selection-->
                                        <label>Year</label>
                                        <br />
                                        <select class="form-control" name="year" required>
                                            <option selected="Select the Year" disabled>Select the Year</option>
                                             <option value="2000">2000</option>
                                             <option value="2001">2001</option>
                                             <option value="2002">2002</option>
                                             <option value="2003">2003</option>
                                             <option value="2004">2004</option>
                                             <option value="2005">2005</option>
                                             <option value="2006">2006</option>
                                             <option value="2007">2007</option>
                                             <option value="2008">2008</option>
                                        </select>
                                        <!--end of dropdown for year selection-->
                                 <!--dropdown for brand selection-->
                                 </div>
                                 </div>
                                 <div class="row text-center ">
                                    <div class="col-md-4">
                                        <label><?=$lang["lblbrand"];?></label>
                                        <br />
                                        <select class="form-control" required name="brand" >
                                        <option selected="<?=$row1["brand"];?>"><?=$row1["brand"];?></option>
                                       //fetch data into dropdown list brand
                                        <?php
                                         //load db 
                                        include("\wamp64\www\im\carsale\includefiles\db.php");
                                        //sql statement
                                        // filter distinct values 
                                        $sql= "SELECT DISTINCT name FROM brand ORDER BY name ASC";
                                        //check result
                                        $result=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($result)){    
                                        ?>
                                        <option value="<?=$row["name"]?>"> <?=$row["name"]?> </option>
                                        <?php 
                                        }
                                         ?>
                                         //end of fetch data into dropdown list brand
                                        </select>
                                         <!--end of dropdown for brand selection-->
                                        <br />
                                    </div>
                                    <div class="col-md-4">
                                     <!--dropdown for model selection-->
                                     
                                        <label><?=$lang["lblmodel"];?></label>
                                        <br />
                                        <select class="form-control" name="model" required>
                                            <option selected="<?=$row1["id"];?>"><?=$row1["model"];?></option>
                                            //fetch data into dropdown list model
                                        <?php
                                         //load db 
                                        include("\wamp64\www\im\carsale\includefiles\db.php");
                                        //sql statement
                                        // filter distinct values 
                                        $sql= "SELECT DISTINCT name FROM model ORDER BY name ASC";
                                        //check result
                                        $result=mysqli_query($con,$sql);
                                        while($row=mysqli_fetch_array($result)){    
                                        ?>
                                        <option value="<?=$row["name"]?>"> <?=$row["name"]?> </option>
                                        <?php 
                                        }
                                         ?>
                                         //end of fetch data into dropdown list model
                                        </select>
                                        <!--end of dropdown for model selection-->
                                    </div>
                                    <div class="col-md-4">
                                        <label><?=$lang["lblfueltype"];?></label>
                                        <select class="form-control" name="fueltype" required>
                                            <option selected="<?=$row1["fuel_type"]?> "  value="<?=$row1["fuel_type"]?> "><?=$row1["fuel_type"]?></option>
                                            <?php
                                         //load db 
                                        include("\wamp64\www\im\carsale\includefiles\db.php");
                                        $sql = " SELECT  *  FROM fuel_type ";
                                        $result = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                        ?>
                                            <option value="<?=$row["fuel_type_name"]?>"><?=$row["fuel_type_name"]?></option>
                                       <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                </div>
                               
                                
                                  
                                <div class="row text-center ">
                                    <div class="col-md-4">
                                        <label>Location</label>
                                        <select class="form-control" name="location" required>
                                        <option selected="Select the location" disabled>Select the location</option>
                                             <option value="Colombo">Colombo</option>
                                             <option value="Negombo">Negombo</option>
                                             <option value="Matara">Matara</option>
                                             <option value="Kalutara">Kalutara</option>
                                             <option value="Kandy">Kandy</option>
                                            
                                        </select>
                                    </div>
                               
                                
                                    <div class="col-md-4">
                                        <label><?=$lang["lblprice"];?></label>
                                        <br />
                                        <input type="number" name="price" value="<?=$row['price'];?>" class="form-control" required />
                                        <br />
                                    </div>
                                    <div class="col-md-4">
                                        <label><?=$lang["lblmileage"];?></label>
                                        <br />
                                        <input type="text" name="mileage" placeholder="<?=$lang["placeholdmileage"];?>" class="form-control" required/>
                                        <br />
                                    </div>
                                </div>
                                <input type="submit" value="add" class="btn btn-success mt-2 mb-2  btn-lg" name="btnupdate" />
                                <input type="reset" value="<?=$lang["btnReset"];?>" class="btn btn-warning float-right mt-2 mb-2  btn-lg" name="reset" />
                            </form>
                    </div>
                </div>
            </div>
        </div>
     

<!--Load footer-->
<?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>   
 
</body>
</html>