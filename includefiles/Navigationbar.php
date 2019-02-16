
<!--Nav bar starts from here-->
<div class="container-fluid bg bg-dark ">
    <div class="container ">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg  ">
            <ul class="navbar-nav nav nav-tabs ">
                <div class=" d-flex align-items-center ">
                    <a class="text text-primary font-weight-bold display-4  ">Sell</a><span>
                    <h4 class="mt-4 text-white">MyCar.com</h4>
                    </span><i class="fa fa-car fa-3x text-success"></i>
                </div>
                <li class="nav-item active">
                    <a  href="http://localhost/im/carsale/newindex.php" class="nav-link mt-3 text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mt-3 text-white"
                       href="http://localhost/im/carsale/views/views_caradd/caradd.php">Sell my car</a>
                </li>
                <?php 
                if(isset($_SESSION['ID'])){

                    echo "  <li class='nav-item'>
                            <a href='http://localhost/im/carsale/logout.php'
                               class=' nav-link mt-3 text-white '>Log out</a>
                        </li>";
                }else{

                    echo "<li class='nav-item'>
                            <a href='http://localhost/im/carsale/login.php'
                               class=' nav-link mt-3 text-white '>Login</a>
                        </li>
                        <li class='nav-item'>
                            <a href='http://localhost/im/carsale/views/Views_member/member_registration.php'
                               class=' nav-link mt-3 text-white '>Signup</a>
                        </li>

                            ";
                }
                ?>

            </ul>
            <div class="d-flex align-items-center item-inline ">
                <table class="ml-2">
                    <tr>
                        <td>
                            <a href="?lang=sinhala"
                               class="font-weight-bold text-white">Sinhala</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="?lang=en"
                               class="font-weight-bold text-white">English</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="?lang=tamil"
                               class="font-weight-bold text-white">Tamil</a>
                        </td>
                    </tr>
                </table>
            </div>
            <form class="form-inline ml-1">
                <input class="form-control mr-sm-2 w-50 "
                       type="text"
                       placeholder="Search">
                <button class="btn btn-success"
                        type="submit">Search</button>
            </form>
            <!--to view the current user-->
            <div class="col-md-">
                <?php   
                 if(isset($_SESSION["ID"])){
                ?>
                    <p class="mt-1 text-light text-center">Logged In as:<br/><?=$_SESSION['NAME'];?></p>
                <?php
                 }else{
                ?>
                    <p class="mt-1 text-light text-center">Guest User</p>
                <?php 
                 }
                ?>
               
            </div>
            <!--to view the current user-->
        </nav>
    </div>

</div>
<!--Nav bar ends from here-->
