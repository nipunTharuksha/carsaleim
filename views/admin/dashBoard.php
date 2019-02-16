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
                <h1 class="text-light text-center fixed"> Member List</h1>
                    <div class="col-md-12 mt-5 table-responsive ">                    
                      <table class="table table-hover  table-dark  " >
                      <tr >
                      <th ><label class="font-weight-bold text-white " >ID </label></th>
                      <th ><label class="font-weight-bold text-white " >Full Name </label></th>
                      <th ><label class="font-weight-bold text-white">Email</label></th>
                      <th ><label class="font-weight-bold text-white">Telphone Number </label></th>
                      <th ><label class="font-weight-bold text-white">Action </label></th>
                      </tr>
                      <tr>
                      <?php
                       //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                       
                        //select all brand names 
                        $sql= "SELECT * FROM member ORDER BY id ASC";
                        $result = mysqli_query($con,$sql);
                        while($row =mysqli_fetch_array($result)){             
                       ?>
                      <td class="font-weight-bold text-info"><?=$row["id"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["name"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["email"];?></td>
                      <td class="font-weight-bold text-info"><?=$row["mobile"];?></td>
                      <td>
                      <a href="http://localhost/im/carsale/views/Views_member/member_view.php?id=<?=$row["id"];?>" class="btn btn-info">Show</a>
                      <a href="http://localhost/im/carsale/views/Views_member/member_edit.php ?id=<?=$row["id"];?>" class="btn btn-warning">Edit</a>
                      <a href="http://localhost/im/carsale/views/Views_member/member_delete.php?id=<?=$row["id"];?>" class="btn btn-danger">Delete</a>
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