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

                    <div class="raw ">
                    <?php
                        //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                        $id = $_GET['id'];
                        $sql=" SELECT * FROM member WHERE id ='$id'";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_array($result);
                        //return the number of rows
                        $numberOfRows = mysqli_num_rows($result);
                        var_dump($numberOfRows);
                        if(((isset($_GET['id'])) && ($numberOfRows>=1))){
                        
                            echo "<script>

                            window.onload= deleteAlertPage;

                            </script>";

                        

                        }else{

                            echo 
                            "<script>
                             window.onload = redirectToPage('http://localhost/im/carsale/views/admin/dashBoard.php','Member List');                   
                             </script>";
                             
                        }
                        ?>
                        
                        <form action="\im\carsale\controllers\controller_registration.php" method="POST">
                        
                        <h3 class=" text-white mb-4 pt-5 font-weight-bold text text-danger">Delete member</h3>
                            <label class="   text text-danger font-weight-bold  " ><h2 >Member ID :  <?=$row["id"];?></h2></label><br/>
                            <input type="hidden" name="hiddenId" value="<?=$row["id"];?>"/>
                            <label class="  mt-4 text text-danger font-weight-bold " ><h2 >Member Name :   <?=$row["name"];?></h2></label><br/>
                            <a class="btn btn-info" id="goback" href="http://localhost/im/carsale/views/admin/dashBoard.php">Go Back To member List</a>
                            <button type="submit" class="btn btn-danger" name="btnupdate" value="delete">Confirm Deletion</button>
                            <div class="alert alert-danger mt-5 w-50" role="alert">This operation cannot be undo!</div>

                            </form>
                            </div>

                        </div>
                       

                    </div>
                </div>
            </div>
            
        </div>
        <!--Load footer-->
 <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>  

    </body>
</html>