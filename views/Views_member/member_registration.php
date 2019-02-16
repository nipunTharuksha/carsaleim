

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
    <body onload= onloadDisable();>
        <div class="container-fluid" id="divbg" >
            <div class="container">
                <!--Registration form starts from here-->
                <div class="row text-white d-flex justify-content-center mt-1">
                    <div class="col-md-8 ">
                        <h3 class="text-center py-3"><?=$lang["lbluserregform"];?></h3>
                        <form class="font-weight-bold" method="POST" action="\im\carsale\controllers\controller_registration.php" onsubmit="return validateForm();">
                            <label><?=$lang["lblfullname"];?></label>
                            <br/>	
                            <input type = "text" name="fullname" placeholder="<?=$lang["placeholdfullname"];?>" id="jsname" class="form-control" required onchange="validateName();" />
                            <i id="pidnamevalidate" class=" font-weight-bold"></i>
                            <br/>
                            <label><?=$lang["lblemail"];?></label>
                            <br/>
                            <input type = "text" name="email" placeholder="<?=$lang["placeholemail"];?>" id="jsun" class="form-control" required onchange="emailValidation(jsun,'Email');"  />
                            <i id="pidforunwrong" class="font-weight-bold"></i>
                            <br>
                            <label><?=$lang["lbltelnum"];?></label>
                            <br/>
                            <input type = "tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" minlength="12" name="telphone" placeholder="<?=$lang["placeholdtelnum"];?>"  id="txtPhomenumber" required class="form-control"  />
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <label><?=$lang["labelPassWord"];?></label>
                                    <br/>
                                    <input type = "password" name="pw" placeholder="<?=$lang["placeholderPassWord"];?>" required class="form-control" id="pw1" onkeyup="validatePw(pw1);" />
                                    <i id="pidforpwwrong" class="font-weight-bold"></i>
                                    <br/>
                                </div>
                                <div class="col-md-6">
                                    <label><?=$lang["lblconfirmpw"];?></label>
                                    <br/>
                                    <input type = "password" name="confirmpw" disabled  placeholder="<?=$lang["placeholfconfirmpw"];?>" required class="form-control" id="confirmPw" onchange='matchPw();' />
                                    <i id="matchpw" class="font-weight-bold"></i>
                                </div>
                            </div>
                            <input type="submit"  class="btn btn-success mt-4 mb-4 btn-lg"name="btnupdate" value="add" id="jsbtn" >
                            <input type="reset" value="<?=$lang["btnReset"];?>" class="btn btn-warning float-right mt-4 mb-4 btn-lg" name="reset" onclick="resetUserReg(jsname,jsun,txtPhomenumber,pw1,confirmPw,pidnamevalidate,pidforunwrong,pidforpwwrong);" />
                        </form>
                    </div>
                </div>
                <!--Registration form ends from here-->
            </div>
        </div>
         <!--Load footer-->
         <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
    </body>
</html>