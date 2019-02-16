<?php include("\wamp64\www\im\carsale\includefiles\header.php");?>

<!DOCTYPE html>
<html>
        <head>
        <title>Model list</title>
           <!--Load Languages-->
           <?php include("\wamp64\www\im\carsale\includefiles\loadlanguages.php");?>
            <!--Load bootstrap and other stylining links & js-->
                 <?php include("\wamp64\www\im\carsale\includefiles\loadcssjs.php");?>
        </head>

    <body >           
        <div  class="container-fluid bg bg-dark" id="">
            <div class="container font-weight-bold">
                 <!--Navigation bar-->
                 <?php include("\wamp64\www\im\carsale\includefiles\Navigationbar.php"); ?>
                <!--End of Navigation bar-->
                <div class="raw">
                    <div class="col-md-12 mt-5 table-responsive ">                    
                      <table class="table table-hover  table-dark  " >
                      <tr >
                      <th ><label class="font-weight-bold text-white " >ID </label></th>
                      <th ><label class="font-weight-bold text-white">NAME</label></th>
                      <th ><label class="font-weight-bold text-white">ACTIONS </label></th>
                      </tr>
                      <tr>
                      <h2 class="text-white text-center mb-5">Model List</h2>

                      <?php
                       //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                       
                        //select all brand names 
                        $sql= "SELECT * FROM model ORDER BY id ASC";
                        $result = mysqli_query($con,$sql);
                        while($row =mysqli_fetch_array($result)){             
                       ?>
                      
                       
                      <td class="font-weight-bold text-info"><?=$row["id"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["name"];?></td>
                      <td>
                      <a href="model_view.php?id=<?=$row["id"];?>" class="btn btn-info">Show</a>
                      <a href="model_edit.php?id=<?=$row["id"];?>" class="btn btn-warning">Edit</a>
                      <a href="model_delete.php?id=<?=$row["id"];?>" class="btn btn-danger">Delete</a>
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