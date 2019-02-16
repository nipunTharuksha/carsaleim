<?php
session_start();
?>

<!DOCTYPE html>
<html>

    <head>
        <!--Load Languages-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadlanguages.php");?>
        <!--Load bootstrap and other stylining links & js-->
        <?php include("\wamp64\www\im\carsale\includefiles\loadcssjs.php");?> 
        <!--Navigation bar-->
        <?php include("includefiles/navigationbar.php"); ?>
        <!--End of Navigation bar-->
    </head>
    <body id="divbg">

    <div class="container-fluid bg bg-success ">
                    <div class="container" id="margintop">
                        <div class="row">

                            <!--Side bar starts from here-->
                            <div class="col-md-3 mt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center">Sort results By</p>
                                        <select class="form-control">
                                            <option value="">Date:Newest on top</option>
                                            <option value="">Date:Oldest on top</option>
                                            <option value="">Price:High to low</option>
                                            <option value="">Price:Low to high</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center mt-3">Location</p>
                                        <select class="form-control ">
                                            <option value="">A</option>
                                            <option value="">B</option>
                                            <option value="">C</option>
                                            <option value="">D</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="text-center mt-3">Category </p>
                                        <select class="form-control dropdown-toggle ">
                                            <option value="">A</option>
                                            <option value="">B</option>
                                            <option value="">C</option>
                                            <option value="">D</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!--Side bar ends from here-->

                            <!--Main div for adds starts from here-->
                            <div class="col-md-8 mt-5"> 
                            <?php
                       //load db 
                        include("\wamp64\www\im\carsale\includefiles\db.php");
                       
                        //select all car advertisments and sort in DESENDING ORDER
                        $sql= "SELECT * FROM car ORDER BY date DESC";
                        $result = mysqli_query($con,$sql);
                        while($row =mysqli_fetch_array($result)){   
                                  
                       ?>
                          
                             <nav class="navbar-nav btn-success" >
                             <li class="nav-item">
                             <a href="http://localhost/im/carsale/views/views_caradd/caradd_view.php?id=<?=$row['id']?>" class=" nav-link text-white " style="text-decoration: none;"> 
                               <div class="row">
                                    <div class="col-md-4" >
                                        <img src="uploads/<?=$row["photo"];?>" class="img-thumbnail mt-3" style="max-width:200px;max-height:200px;"/>
                                    </div>
                                    <div class="col-md-8" >
                                        <h2 id="rowHeight"><?=$row["title"];?> </h2>
                                        <h5><?=$row["mileage"];?>Km</h5>
                                        <h5><?=$row["location"];?></h5>
                                        <h3>Rs.<?=$row["price"];?></h3>
                                        <div style="margin-left:80%;">
                                            <p>
                                                <?php
                                           //Claculate the time variance of advertisments
                                            date_default_timezone_set('Asia/Colombo');
                                            $timedb = strtotime($row["date"]);
                                            $timeNow = strtotime(date('Y-m-d H:i:s', time()));
                                            $dif = abs($timeNow - $timedb);
                                            if ((round($dif / 60))>=60 && ((round($dif / 86400))>=1)){
                                                echo round($dif / 86400). " Days ago";
                                            }elseif (((round($dif / 60))>=60) && ((round($dif / 86400))<=0) ){
                                                echo round($dif / 3600). " Hours ago";
                                            }elseif ((round($dif / 60))<=3600) {
                                            echo round($dif / 60). " Minutes ago";
                                             }
                                            ?> </p>
                                        </div>
                                    </div>
                                </div>
                                </a>
                                </li>
                                </nav>
                                <hr>
                                <?php
                        }//loop for advertisments ends here
                     ?>
                            </div>
                        </div>
                    </div>
                </div>

      <!--Load footer-->
      <?php include("\wamp64\www\im\carsale\includefiles\Footer.php");?>
       
    </body>
</html>