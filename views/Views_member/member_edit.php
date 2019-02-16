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
                        if (isset($_GET['id'])){
                            //load db 
                            include("\wamp64\www\im\carsale\includefiles\db.php");
                            $id=$_GET['id'];
                            $sql="SELECT * FROM member WHERE id='$id'";
                            $result=mysqli_query($con,$sql);
                            $row=mysqli_fetch_array($result);

                        }else{

                            echo "<script>
                     window.onload = redirectToPage('http://localhost/im/carsale/views/views_member/member_list.php','Member List');                   
                      </script>";
                        }
                        ?>
                        <!--Registration form starts from here-->
                        <div class="row text-white d-flex justify-content-center mt-1">
                            <div class="col-md-8 ">
                                <h3 class="text-center py-3">Edit Members in the system</h3>
                                <form class="font-weight-bold" method="POST" action="http://localhost/im/carsale/controllers/controller_registration.php" onsubmit="return validateForm();">
                                    <label>ID</label>
                                    <br/>	
                                    <input type = "text" name="id" name="id" value="<?=$row['id']?>" readonly class="form-control"  />
                                    <br/>
                                    <label>Full Name</label>
                                    <input type = "text" name="fullname" value="<?=$row['name']?>" id="jsname" class="form-control" required onchange="validateName();" />
                                    <i id="pidnamevalidate" class=" font-weight-bold"></i>
                                    <br/>
                                    <label><?=$lang["lblemail"];?></label>
                                    <br/>
                                    <input type = "text" name="email" value="<?=$row['email']?>" id="jsun" class="form-control" required onchange="emailValidation(jsun,'Email');"  />
                                    <i id="pidforunwrong" class="font-weight-bold"></i>
                                    <br>
                                    <label><?=$lang["lbltelnum"];?></label>
                                    <br/>
                                    <input type = "tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" minlength="12" name="telphone"  value="<?=$row['mobile']?>"  id="txtPhomenumber" required class="form-control"  />
                                    <br/>
                                    <input type="submit" value="edit" class="btn btn-success mt-4 mb-4 btn-lg" name="btnupdate" id="jsbtn" />
                                    <input type="reset" value="<?=$lang["btnReset"];?>" class="btn btn-warning float-right mt-4 mb-4 btn-lg" name="reset" onclick="resetUserReg(jsname,jsun,txtPhomenumber,pw1,confirmPw,pidnamevalidate,pidforunwrong,pidforpwwrong);" />
                                </form>
                            </div>

                        </div>
                        <!--Registration form ends from here-->

                    </div>
                </div>
            </div>
            
        </div>
        <!--Load footer-->
 <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>  

    </body>
</html>