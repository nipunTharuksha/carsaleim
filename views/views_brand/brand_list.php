<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>

<!DOCTYPE html>


<html>
        <head>
        <title>Brand list</title>
           <!--Load Languages-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadlanguages.php");?>
        <!--Load bootstrap and other stylining links & js-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadcssjs.php");?> 
        <!--Navigation bar-->
        <?php include("\wamp64\www\im\carsale\includefiles\Navigationbar.php"); ?>
        <!--End of Navigation bar-->
        </head>

    <body >           
        <div  class="container-fluid bg bg-dark" id="margintop">
        <h3 class="text-uppercase text-white  position-fixed float-left">Brand
            <br/> List</h3>

            <div class="container font-weight-bold">
                <div class="raw">
                    <div class="col-md-12  table-responsive ">                    
                      <table class="table table-hover  mt-3 table-dark  " >
                      <tr class="bg bg-info" >
                      <th ><label class="font-weight-bold text-white " >ID </label></th>
                      <th ><label class="font-weight-bold text-white">NAME</label></th>
                      <th ><label class="font-weight-bold text-white">ACTIONS </label></th>
                      </tr>
                      <tr>
                      <?php
                       //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                       
                        //select all brand names 
                        $sql= "SELECT * FROM brand ORDER BY id ASC";
                        $result = mysqli_query($con,$sql);
                        while($row =mysqli_fetch_array($result)){             
                       ?>
                      
                       
                       
                      <td class="font-weight-bold text-info"><?=$row["id"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["name"];?></td>
                      <td>
                      <a href="brand_view.php?id=<?=$row["id"];?>" class="btn btn-info">Show</a>
                      <a href="brand_edit.php?id=<?=$row["id"];?>" class="btn btn-warning">Edit</a>
                      <a href="brand_delete.php?id=<?=$row["id"];?>" class="btn btn-danger">Delete</a>
                      </td>
                      </tr>
                     <?php
                        }//loop ends here
                     ?>
                      </table>
                    </div>
                </div>
            </div>
        </div>
        <!--Load footer-->
        <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html> 