
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
    <body > 
              
        <div  class="container-fluid " id="divbglogin">
            <div class="container font-weight-bold">
                <div class="raw" id="margintop" >
                    <div class="col-md-5 mt-5" >
                    <div class="jumbotron bg bg-info mt-5" >
                        <form method="POST" action="\im\carsale\controllers\controller_login.php" >  
                            <label class=" text-uppercase  text text-white " ><h5 ><?=$lang["labelUserName"];?></h5></label>
                            <input type="text" name="email" class="form-control" id="jsun"  placeholder="<?=$lang["placeholderUserName"];?>" required  onchange="emailValidation(jsun,'Username');"/>
                            <i id="pidforunwrong" class="float-right font-weight-bold"></i>
                            <label class="text  text-uppercase mt-4  text-white "><h5><?=$lang["labelPassWord"];?></h5></label>
                            <input type="password" name="password" class="form-control mt-3" id="jspw" placeholder="<?=$lang["placeholderPassWord"];?> " required/>
                            <br/>   
                            <input type="checkbox" class="checkbox" name="chbocremme" id="idchboxremme"><label class="text-white ml-3 "  for="idchboxremme"><?=$lang["checkboxRememberMe"];?></label>
                            <br/>
                            <input type="submit" class="btn btn-success btn-lg mt-5 " value="<?=$lang["btnSubmit"];?>"/>
                            <input type="reset" class="btn btn-warning  btn-lg mt-5  btn float-right" value="<?=$lang["btnReset"];?>" onclick="btnReset()"/>
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