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
    </head>
    <body>
        <div class="container-fluid bg bg-transparent " id="divbg">
            <div class="container font-weight-bold" id="margintop">
                <div class="container">
                    <div class="row  d-flex justify-content-center">
                        <div class="col-md-8 ">
                            <h3 class="text-center py-3 font-weight-bold"><?=$lang["h3addacar"];?></h3>
                            <form method="POST" action="\im\carsale\controllers\controller_caradd.php" enctype="multipart/form-data">
                                <label><?=$lang["lbltitle"];?></label>
                                <br />
                                <input type="text" name="title" placeholder="<?=$lang["placeholdentertitle"];?>" class="form-control" id="jsTitle" required />
                                <br />
                                <label><?=$lang["lbldescribcar"];?></label>
                                <br />
                                <textarea  name="txtarea" class="form-control" cols="10" rows="2" placeholder="<?=$lang["placeholtextarea"];?> " required></textarea>
                                <br />
                                <div class="row text-center ">

                                 <!--dropdown for body type selection-->
                                 <div class="col-md-6">
                                        <label>Body Type</label>
                                        <br />
                                        <select class="form-control" required name="body_type" >
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
                                        <option selected="Select the band" disabled >Select the Brand</option>
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
                                            <option selected="Select the model" disabled><?=$lang["selectoptmodselected"];?></option>
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
                                            <option selected="selected" disabled><?=$lang["selectoptselectedfule"];?></option>
                                           <?php
                                            //load db 
                                        include("\wamp64\www\im\carsale\includefiles\db.php");
                                        $sql = "SELECT * FROM fuel_type";
                                        $result = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($result)){
                                           ?> 
                                        
                                           
                                           
                                            <option value="<?=$row["fuel_type_name"];?>"> <?=$row["fuel_type_name"];?> </option>
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
                                        <input type="number" name="price" placeholder="<?=$lang["placeholdprice"];?>" class="form-control" required />
                                        <br />
                                    </div>
                                    <div class="col-md-4">
                                        <label><?=$lang["lblmileage"];?></label>
                                        <br />
                                        <input type="text" name="mileage" placeholder="<?=$lang["placeholdmileage"];?>" class="form-control" required/>
                                        <br />
                                    </div>
                                </div>
                                <div class="container">
                                        <div class="row">
                                        <div class="col-md-12">
                                        <label> Photo</label>
                                        <input type="file" name="photo" class="form-control-file " required>
                                        </div>
                                        </div>
                                        </div>
                                <button type="submit" value="add" class="btn btn-success mt-4 mb-2  btn-lg" name="btnupdate">Add</button>
                                <input type="reset" value="<?=$lang["btnReset"];?>" class="btn btn-warning mt-4 float-right mt-2 mb-2  btn-lg" name="reset" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!--Load footer-->
         <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html>