<?php

require('../Metier/admin.class.php');
require ('../Service/service_admin.php');
session_start();
$test = new admin();
$testc = new service_admin();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $adresse=$_POST["adresse"];
    $cin=$_POST["cin"];
    $sexe=$_POST["sexe"];
    $telephone=$_POST["telephone"];
    $password=$_POST["password"];
    $test = $test->getadmin1($nom,$prenom,$adresse,$cin,$sexe,$telephone,$password);

    if($testc->add($test)){
        $_SESSION['login'] = $cin;
        header("Location:login.php");
    }
}
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/inscription.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:19:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Inscription</title>

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

    <div class="main-content- h-100vh bg-img register-page-2 dark-color-overlay " id="particles-js" style="background-image: url(img/bg-img/bg-7.jpg);">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-7 col-lg-6 mx-auto">
                    <!-- Middle Box -->
                    <div class="middle-box text-center">
                        <h7 class="mb-50 text-white">S'inscrire!</h7>
                        <!-- Form -->
                        <form class="register-form" action="inscription.php" method="post">
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="nom" class="form-control register" placeholder="nom" required="">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="prenom" class="form-control register" placeholder="prenom" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="adresse" class="form-control register" placeholder="adresse" required="">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="cin" class="form-control register" placeholder="cin" required="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="sexe" class="form-control register" placeholder="sexe" required="">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="text" name="telephone" class="form-control register" placeholder="telephone" required="">
                            </div>
                            <!-- Form Group -->
                            <div class="form-group">
                                <input type="password"  NAME="password" class="form-control register" placeholder="password" required="">
                            </div>

                            <button type="submit" class="btn btn-outline-success btn-block text-center text-white">Confirmer</button>
                            <span class="text-center mt-15 text-white mb-15 btn-block">avez-Vous deja un compte ?</span>
                            <a class="btn btn-outline-success btn-block text-white text-center" href="login.php">Se connecter</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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


<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/inscription.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:19:05 GMT -->
</html>