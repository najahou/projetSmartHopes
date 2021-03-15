<?php

require('../Metier/admin.class.php');
require ('../Service/service_admin.php');

$test = new admin();
$testc = new service_admin();
session_start();

if(isset($_POST["cin"]) and isset($_POST["password"])) {

    $cin=$_POST["cin"];
    $password=$_POST["password"];
    if($testc->login($cin,$password))
    {
        $user = $testc->findrespo($cin);
        $_SESSION["test"]= $user[5].' '.$user[5];
        header("Location:index.php");
    }

    else{
        header("Location:login.php");

    }
}

?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:19:04 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Login</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="droba-loader">
        <div class="loader"></div>
    </div>
    <!--Preloader-->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="main-content- login-area-2 bg-img h-100vh dark-color-overlay" id="particles-js" style="background-image: url(img/bg-img/bg-7.jpg);">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-7 col-lg-6 mx-auto">
                    <!-- Middle Box -->
                    <div class="middle-box  text-center">
                        <h3 class="mb-50 text-white">Sign In To Admin</h3>
                        <!-- Form -->
                        <form class="login-form" action="login.php" method="post">
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="CIN" class="form-control" name="cin"
                                        value="<?php
                                            if(isset($_SESSION['login'])){

                                                echo $_SESSION["login"];
                                            }
                                        ?>"
                                       placeholder="CIN" required="">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-block text-white mt-30">Login</button>


                            <p class="text-center text-white">Do not have an account?</p>
                            <a class="btn btn-outline-primary text-white btn-block" href="inscription.php">Create an account</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    <!-- Must needed plugins to the run this Template -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bundle.js"></script>

    <!-- Active JS -->
    <script src="js/default-assets/active.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="js/default-assets/particles.js"></script>
    <script src="js/default-assets/app.js"></script>

</body>


<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:19:05 GMT -->
</html>