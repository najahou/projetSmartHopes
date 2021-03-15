<?php
require('../Service/medicamentservice.php');
require ('../Metier/medicament.php');
session_start();
if(isset($_SESSION['test'])) {
    $medicservice = new medicamentservice();
    $listmedic = $medicservice->findall();
//$medicament = new medicament();
    $countpatient = $medicservice->findcountpatient();
    $countrespo = $medicservice->findcountrespo();
    $countpharmacie = $medicservice->findcountpharmacie();
    $countmedicament = $medicservice->findcountmedicament();
    $rappel = $medicservice->findcountrappel();
    $besoin = $medicservice->findcountbesoin();
    $patientlist = $medicservice->findpatient();
}else{
    header('location: login.php');
}
?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Home</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="css/default-assets/morris.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="droba-loader">
        <div class="loader"></div>
    </div>
    <!--Preloader-->

    <!-- Main Content-->
    <div class="main-container-wrapper">
        <!-- Top bar area -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="index.php"><img src="img/core-img/logo.png" width="80%"  height="40%" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.php"><img src="img/core-img/small-logo.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">


                <ul class="top-navbar-area navbar-nav navbar-nav-right">




                    <li class="nav-item nav-profile dropdown dropdown-animate">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="img/member-img/user.png" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top" aria-labelledby="profileDropdown">
                            <div class="profile-header d-flex align-items-center">
                                <div class="thumb-area">
                                    <img src="img/member-img/contact-2.jpg" alt="">
                                </div>
                                <div class="content-text">
                                    <h6><?php echo $_SESSION['test']?></h6>
                                    <p class="mb-0">Responsable</p>
                                </div>
                            </div>

                            <a href="log_out.php" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out profile-icon">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> Sign-out</a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button" data-toggle="offcanvas">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid menu-bar-icon">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper">
            <!-- Side Menu area -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box link-icon">
                                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg>
                            <span class="menu-title">Home</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#app" aria-expanded="false" aria-controls="app">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard link-icon">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="menu-title">Pharmacie</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="app">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="Pharmacie/addpharmacie.php">Ajouter Pharmacie</a></li>
                                <li class="nav-item"><a class="nav-link" href="Pharmacie/listepharmacie.php">Liste Pharmacie</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#elements" aria-expanded="false" aria-controls="elements">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard link-icon">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="menu-title">Patient</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="elements">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="patient/addpatient.php">Ajouter Patient</a></li>
                                <li class="nav-item"><a class="nav-link" href="patient/listepatient.php">Liste Patient</a></li>

                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="Besoin/listBesoin.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell link-icon">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>
                            <span class="menu-title">Liste Besoin</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#job" aria-expanded="false" aria-controls="job">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard link-icon">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="menu-title">Chambre</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="job">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="Chambre/addchambre.php">Ajouter Chambre</a></li>
                                <li class="nav-item"><a class="nav-link" href="Chambre/listechambre.php">Liste Chambre</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard link-icon">
                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                            </svg>
                            <span class="menu-title">Medicament</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="charts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="Medicament/addmedicament.php">Ajouter Medicament</a></li>
                                <li class="nav-item"> <a class="nav-link" href="Medicament/listemedicament.php">Liste Medicament</a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#charts1" aria-expanded="false" aria-controls="charts1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar link-icon">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span class="menu-title">Rappel</span>
                            <i class="ti-angle-right"></i>
                        </a>
                        <div class="collapse" id="charts1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="Rappel/addrappel.php">Ajouter Rappel</a></li>
                                <li class="nav-item"> <a class="nav-link" href="Rappel/listerappel.php">Liste Rappel</a></li>

                            </ul>
                        </div>
                    </li>


                </ul>
            </nav>

            <!-- Mani Page -->
            <div class="main-panel">
                <marquee  id="urgent" style="background-color: red" behavior="alternate" hidden><h3>Urgeeence</h3></marquee>
                <div class="content-wrapper">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-xl-6">
                                <div class="widget-slider-area primary-color mb-30 p-3">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0 text-white">Nombre Patient</h6>
                                                <span class="badge badge-pill badge-primary">En cours</span>
                                            </div>
                                            <h3 class="text-white mb-0"><?php echo $countpatient[0] ?> </h3>

                                        </div>

                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0 text-white">Nombre Responsable</h6>
                                                <span class="badge badge-pill badge-primary">total</span>
                                            </div>
                                            <h3 class="text-white mb-0"><?php echo $countrespo[0] ?></h3>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-6">
                                <div class="widget-slider-area bg-primary mb-30 p-3">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0 text-white">Nombre Pharmacie</h6>
                                                <span class="badge badge-pill badge-primary">en collaboration</span>
                                            </div>
                                            <h3 class="text-white mb-0"><?php echo $countpharmacie[0] ?></h3>

                                        </div>

                                        <!-- Single Slider -->
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0 text-white">Nombre Medicament</h6>
                                                <span class="badge badge-pill badge-primary">disponible</span>
                                            </div>
                                            <h3 class="text-white mb-0"><?php echo $countmedicament[0]?></h3>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-6">
                                <div class="widget-slider-area primary-color mb-30 p-3">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <a href="Rappel/listerappel.php">
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0 text-white">Nombre Rappel a consulter</h6>
                                                <span class="badge badge-pill badge-primary">A voir</span>
                                            </div>
                                            <h3 class="text-white mb-0"><?php echo $rappel[0] ?> </h3>

                                        </div>
                                        </a>

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-6">
                                <div class="widget-slider-area bg-primary mb-30 p-3">
                                    <div class="widget-slides owl-carousel">
                                        <!-- Single Slider -->
                                        <a href="Besoin/listBesoin.php">
                                        <div class="widget-slider-content">
                                            <div class="d-flex justify-content-between align-items-center mb-15">
                                                <h6 class="mb-0 text-white">Nombre Besoin a consulter</h6>
                                                <span class="badge badge-pill badge-primary">Attention</span>
                                            </div>
                                            <h3 class="text-white mb-0"><?php echo $besoin[0] ?></h3>

                                        </div>
                                        </a>


                                    </div>
                                </div>
                            </div>






                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Patient &nbsp; <div align="right"><a href="patient/listepatient.php">plus</a></div></h4>

                                        <div class="table-responsive">
                                            <table class="table table-hover table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nom Complet</th>
                                                        <th>CIN</th>
                                                        <th>Date Naissance</th>
                                                        <th>Numero chambre</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php foreach ($patientlist as $item){ ?>
                                                    <tr onclick="window.location.href='patient/updatepatient.php?id=<?php echo $item[1]?>'">
                                                        <td><?php echo $item[1]?></td>
                                                        <td><?php echo $item[5].' '.$item[6] ?></td>
                                                        <td><?php echo $item[3]?></td>
                                                        <td><?php echo $item[4]?></td>
                                                        <td><?php echo $item[1]?></td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Medicament &nbsp; <div align="right"><a href="Medicament/listemedicament.php">plus</a></div></h4>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-nowrap mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Reference</th>
                                                <th>Nom Medicament</th>
                                                <th>Quantite en stock</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($listmedic as $item){ ?>
                                                <tr onclick="window.location.href='Medicament/updatemedicament.php?id=<?php echo $item[0]?>'">

                                                    <td><?php echo $item[0]?></td>
                                                    <td><?php echo $item[4] ?></td>
                                                    <td><?php echo $item[3]?></td>
                                                    <td><?php echo $item[6]?></td>

                                                </tr>

                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                </div>
                    <div class="row">
                        <!-- Column -->
                        </div>
                    </div>
                <!-- Footer Area -->
                <div class="footer-area footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <!-- Footer Area -->
                                <div class="d-sm-flex align-items-center justify-content-between">
                                    <!-- Copywrite Text -->
                                    <div class="copywrite-text">
                                        <p>Smart hope &copy; 2021 created by <a href="#">-UPM-</a></p>
                                    </div>
                                    <!-- Footer Nav -->

                                </div>
                            </div>
                        </div>
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
    <script src="js/default-assets/date-time.js"></script>

    <!-- Inject JS -->
    <script src="js/canvas.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/template.js"></script>
    <script src="js/default-assets/active.js"></script>

    <!-- These plugins only need for the run this page -->
    <script src="js/default-assets/chart.bundle.min.js"></script>
    <script src="js/default-assets/chart.js"></script>
    <script src="js/default-assets/line-chart-custom.js"></script>
    <script src="js/default-assets/am-chart.js"></script>
    <script src="js/default-assets/gauge.js"></script>
    <script src="js/default-assets/serial.js"></script>
    <script src="js/default-assets/light.js"></script>
    <script src="js/default-assets/ammap.min.js"></script>
    <script src="js/default-assets/worldlow.js"></script>
    <script src="js/default-assets/radar.js"></script>
    <script src="js/default-assets/widget-page-chart-active.js"></script>
    <script src="js/default-assets/morris/morris.min.js"></script>
    <script src="js/default-assets/morris/raphael.min.js"></script>
    <script src="js/default-assets/morris/morris.custom.js"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>



</body>
<script type="text/javascript">
    function refresh(time)
    {
        setTimeout(function () {
            window.location.reload(); }, time*500);
    }
    refresh(100);
</script>

</html>