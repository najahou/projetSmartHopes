<?php
require('../../Service/medicamentservice.php');
require ('../../Metier/medicament.php');
$medicaments = new medicamentservice();
$medicament = $medicaments->findall();
session_start();
?>
<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:18:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Medicament</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

    <!-- These plugins only need for the run this page -->
    <link rel="stylesheet" href="../css/default-assets/datatables.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/responsive.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/buttons.bootstrap4.css">
    <link rel="stylesheet" href="../css/default-assets/select.bootstrap4.css">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
<!-- Preloader -->
<div id="droba-loader">
    <div class="loader"></div>
</div>
<!--Preloader-->

<div class="main-container-wrapper">
    <!-- Top bar area -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="../index.php"><img src="../img/core-img/logo.png" width="80%"  height="40%" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="../index.php"><img src="../img/core-img/small-logo.png" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">


            <ul class="top-navbar-area navbar-nav navbar-nav-right">




                <li class="nav-item nav-profile dropdown dropdown-animate">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                        <img src="../img/member-img/user.png" alt="profile" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top" aria-labelledby="profileDropdown">
                        <div class="profile-header d-flex align-items-center">
                            <div class="thumb-area">
                                <img src="../img/member-img/contact-2.jpg" alt="">
                            </div>
                            <div class="content-text">
                                <h6><?php echo $_SESSION['test']?></h6>
                                <p class="mb-0">Responsable</p>
                            </div>
                        </div>

                        <a href="../log_out.php" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out profile-icon">
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
                    <a class="nav-link" href="../index.php">
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
                            <li class="nav-item"><a class="nav-link" href="../Pharmacie/addpharmacie.php">Ajouter Pharmacie</a></li>
                            <li class="nav-item"><a class="nav-link" href="../Pharmacie/listepharmacie.php">Liste Pharmacie</a></li>
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
                            <li class="nav-item"><a class="nav-link" href="../patient/addpatient.php">Ajouter Patient</a></li>
                            <li class="nav-item"><a class="nav-link" href="../patient/listepatient.php">Liste Patient</a></li>

                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="../Besoin/listBesoin.php">
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
                            <li class="nav-item"><a class="nav-link" href="../Chambre/addchambre.php">Ajouter Chambre</a></li>
                            <li class="nav-item"><a class="nav-link" href="../Chambre/listechambre.php">Liste Chambre</a></li>
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
                            <li class="nav-item"> <a class="nav-link" href="addmedicament.php">Ajouter Medicament</a></li>
                            <li class="nav-item"> <a class="nav-link" href="listemedicament.php">Liste Medicament</a></li>
                            <li class="nav-item" hidden> <a class="nav-link" href="updatemedicament.php">Liste Medicament</a></li>

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
                            <li class="nav-item"> <a class="nav-link" href="../Rappel/addrappel.php">Ajouter Rappel</a></li>
                            <li class="nav-item"> <a class="nav-link" href="../Rappel/listerappel.php">Liste Rappel</a></li>

                        </ul>
                    </div>
                </li>


            </ul>
        </nav>
        <!-- Mani Page -->
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="container-fluid">







                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-2" align="center">Liste Pharmacie</h4>
                                    <p class="text-muted font-13 mb-4">
                                        la liste des pharmacies.
                                    </p>

                                    <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Reference</th>
                                            <th>Nom Medicament</th>
                                            <th>Contre Indication</th>
                                            <th>Effect</th>


                                            <th>Modifier</th>
                                            <th>Supprimer</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($medicament as $item){ ?>
                                            <tr>
                                                <td><?php echo $item["id_medic"]?></td>
                                                <td><?php echo $item["reference"]?></td>
                                                <td><?php echo $item["nom_medicament"]?></td>
                                                <td><?php echo $item["contre_indication"]?></td>
                                                <td><?php echo $item["effects"]?></td>


                                                <td><a href='updatemedicament.php?id=<?php echo $item['id_medic'] ?>'>Modifier<i class='fas fa-pencil-alt ms-text-primary'></i></a></td>
                                                <td><a href='deletemedicament.php?id=<?php echo $item['id_medic'] ?>'>Supprimer<i class='far fa-trash-alt ms-text-danger'></i></a></td>

                                            </tr>
                                        <?php  } ?>
                                        </tbody>
                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
                    <!-- end row-->





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
                                    <p>Nijar &copy; 2020 created by <a href="#">Theme-zome</a></p>
                                </div>
                                <!-- Footer Nav -->
                                <ul class="footer-nav d-flex align-items-center justify-content-center">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Purchase</a></li>
                                </ul>
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
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bundle.js"></script>

<!-- Inject JS -->
<script src="../js/canvas.js"></script>
<script src="../js/collapse.js"></script>
<script src="../js/settings.js"></script>
<script src="../js/template.js"></script>
<script src="../js/default-assets/active.js"></script>

<!-- These plugins only need for the run this page -->
<script src="../js/default-assets/jquery.datatables.min.js"></script>
<script src="../js/default-assets/datatables.bootstrap4.js"></script>
<script src="../js/default-assets/datatable-responsive.min.js"></script>
<script src="../js/default-assets/responsive.bootstrap4.min.js"></script>
<script src="../js/default-assets/datatable-button.min.js"></script>
<script src="../js/default-assets/button.bootstrap4.min.js"></script>
<script src="../js/default-assets/button.html5.min.js"></script>
<script src="../js/default-assets/button.flash.min.js"></script>
<script src="../js/default-assets/button.print.min.js"></script>
<script src="../js/default-assets/datatables.keytable.min.js"></script>
<script src="../js/default-assets/datatables.select.min.js"></script>
<script src="../js/default-assets/demo.datatable-init.js"></script>

</body>


<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:19:00 GMT -->
</html>
