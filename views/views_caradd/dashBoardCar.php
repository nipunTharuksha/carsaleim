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
                
                <div class="raw">
                <h1 class="text-light text-center fixed"> Advertisment List</h1>
                    <div class="col-md-12 mt-5 table-responsive ">                    
                      <table class="table table-hover  table-dark  " id="thtl" >
                          
                      <tr >
                      <th ><label class="font-weight-bold text-white " >ID </label></th>
                      <th  ><label class="font-weight-bold text-white">Body Type </label></th>
                      <th ><label class="font-weight-bold text-white">Year </label></th>
                      <th ><label class="font-weight-bold text-white">Brand </label></th>
                      <th ><label class="font-weight-bold text-white">Model </label></th>
                      <th ><label class="font-weight-bold text-white">Fuel type </label></th>
                      <th ><label class="font-weight-bold text-white">Location </label></th>
                      <th ><label class="font-weight-bold text-white">Price </label></th>
                      <th ><label class="font-weight-bold text-white">Mileage </label></th>
                      <th ><label class="font-weight-bold text-white">Action </label></th>
                    </tr>
                      <tr >
                      <?php
                       //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                       
                        //select all brand names 
                        $sql= "SELECT * FROM car ORDER BY id ASC";
                        $result = mysqli_query($con,$sql);
                        while($row =mysqli_fetch_array($result)){             
                       ?>
                      <td class="font-weight-bold text-info"><?=$row["id"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["body_type"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["year"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["brand"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["model"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["fuel_type"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["location"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["price"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["mileage"];?></td>
                      <td>
                      <a href="http://localhost/im/carsale/views/views_caradd/caradd_view.php?id=<?=$row["id"];?>" class="btn btn-info">Show</a>
                      <a href="http://localhost/im/carsale/views/views_caradd/caradd_edit.php?id=<?=$row["id"];?>" class="btn btn-warning">Edit</a>
                      <a href="http://localhost/im/carsale/views/views_caradd/caradd_delete.php?id=<?=$row["id"];?>" class="btn btn-danger">Delete</a>
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
       
</div>
<!--Load footer-->
<?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>   
 
</body>
</html>