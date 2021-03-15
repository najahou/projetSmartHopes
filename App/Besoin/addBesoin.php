<?php

require('../../Metier/besoin.php');
require('../../Service/BesoinService.php');
session_start();
$BesoinService = new BesoinService();
$besoin = new besoin();
$patient = $BesoinService ->findallpatient();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $besoin = $besoin->construct0($_POST['capture'],$_POST['msg_vocale'],$_POST['patientid']);
    $BesoinService->add($besoin);
}
?>
<!doctype html>
<html lang="en">
<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:18:48 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Besoin</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

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
                    <a class="nav-link" href="../index.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box link-icon">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#app" aria-expanded="false" aria-controls="app">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit link-icon">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                        <span class="menu-title">Apps</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="app">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="inbox.html">Mail</a></li>
                            <li class="nav-item"><a class="nav-link" href="calendar.html">Calendar</a></li>
                            <li class="nav-item"><a class="nav-link" href="chat-box.html">Chat box</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#elements" aria-expanded="false" aria-controls="elements">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-feather link-icon">
                            <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                            <line x1="16" y1="8" x2="2" y2="22"></line>
                            <line x1="17.5" y1="15" x2="9" y2="15"></line>
                        </svg>
                        <span class="menu-title">UI Elements</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="elements">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="avatar.html">Avatar</a></li>
                            <li class="nav-item"><a class="nav-link" href="buttons.html">Button</a></li>
                            <li class="nav-item"><a class="nav-link" href="card.html">Card</a></li>
                            <li class="nav-item"><a class="nav-link" href="slider.html">Slider</a></li>
                            <li class="nav-item"><a class="nav-link" href="tab.html">Tab</a></li>
                            <li class="nav-item"><a class="nav-link" href="general.html">General</a></li>
                            <li class="nav-item"><a class="nav-link" href="progressbar.html">Progressbar</a></li>
                            <li class="nav-item"><a class="nav-link" href="notifications.html">Notification</a></li>
                            <li class="nav-item"><a class="nav-link" href="dropdown.html">Dropdown</a></li>
                            <li class="nav-item"><a class="nav-link" href="typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="widgets.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar link-icon">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <span class="menu-title">Widget</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#job" aria-expanded="false" aria-controls="job">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell link-icon">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                        </svg>
                        <span class="menu-title">Project</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="job">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="project-list.html">Project List</a></li>
                            <li class="nav-item"><a class="nav-link" href="project-details.html">Project Details</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pie-chart link-icon">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                            <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span class="menu-title">Charts</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="charts">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="flot-chart.html">Flot Chart</a></li>
                            <li class="nav-item"> <a class="nav-link" href="chartist.html">Chartist Chart</a></li>
                            <li class="nav-item"> <a class="nav-link" href="morris-chart.html">Morris Chart</a></li>
                            <li class="nav-item"> <a class="nav-link" href="chart-js.html">Chart Js</a></li>
                            <li class="nav-item"> <a class="nav-link" href="c3-charts.html">C3 chart</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#general" aria-expanded="false" aria-controls="general">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard link-icon">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span class="menu-title">Pages</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="general">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="blank.html">Start Page</a></li>
                            <li class="nav-item"><a class="nav-link" href="range.html">Range Slider</a></li>
                            <li class="nav-item"><a class="nav-link" href="timeline.html">Timeline</a></li>
                            <li class="nav-item"><a class="nav-link" href="modals.html">Modals</a></li>
                            <li class="nav-item"><a class="nav-link" href="toastr.html">Toastr</a></li>
                            <li class="nav-item"><a class="nav-link" href="preloader.html">Preloader</a></li>
                            <li class="nav-item"><a class="nav-link" href="sweet-alert.html">Sweet Alert</a></li>
                            <li class="nav-item"><a class="nav-link" href="nestable-list.html">Nestable List</a></li>

                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="todo-list.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list link-icon">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3.01" y2="6"></line>
                            <line x1="3" y1="12" x2="3.01" y2="12"></line>
                            <line x1="3" y1="18" x2="3.01" y2="18"></line>
                        </svg>
                        <span class="menu-title">Todo</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ecommerce" aria-expanded="false" aria-controls="ecommerce">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart link-icon">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span class="menu-title">Ecommerce</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="ecommerce">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="product.html">Product</a></li>
                            <li class="nav-item"> <a class="nav-link" href="product-details.html">Single Product</a></li>
                            <li class="nav-item"> <a class="nav-link" href="order.html">Order</a></li>
                            <li class="nav-item"> <a class="nav-link" href="cart.html">Cart</a></li>
                            <li class="nav-item"> <a class="nav-link" href="checkout.html">Checkout</a></li>
                            <li class="nav-item"> <a class="nav-link" href="invoice.html">Invoice</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar link-icon">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <span class="menu-title">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#form" aria-expanded="false" aria-controls="form">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder-minus link-icon">
                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                            <line x1="9" y1="14" x2="15" y2="14"></line>
                        </svg>
                        <span class="menu-title">Forms</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="form">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="basic-form.html">Basic form</a></li>
                            <li class="nav-item"> <a class="nav-link" href="form-validation.html">Validation</a></li>
                            <li class="nav-item"> <a class="nav-link" href="form-switchers.html">Switchers</a></li>
                            <li class="nav-item"> <a class="nav-link" href="form-wizard.html">Form Wizard</a></li>
                            <li class="nav-item"> <a class="nav-link" href="form-input-mask.html">Input mask</a></li>
                            <li class="nav-item"> <a class="nav-link" href="file-upload.html">File upload</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tablet link-icon">
                            <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                        <span class="menu-title">Tables</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="basic-table.html">Basic table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="data-table.html">Data table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="table-layout-colourd.html">Table Layout Color</a></li>
                            <li class="nav-item"> <a class="nav-link" href="price-table.html">Price table</a></li>
                            <li class="nav-item"> <a class="nav-link" href="edit-table.html">Edit Table</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#advanced" aria-expanded="false" aria-controls="advanced">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book link-icon">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                        </svg>
                        <span class="menu-title">Advanced</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="advanced">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="gallery.html">Gallery</a></li>
                            <li class="nav-item"> <a class="nav-link" href="video.html">Video</a></li>
                            <li class="nav-item"> <a class="nav-link" href="session-timeout.html">Session timeout</a></li>
                            <li class="nav-item"> <a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item"> <a class="nav-link" href="coming-soon.html">Coming Soon</a></li>
                            <li class="nav-item"> <a class="nav-link" href="404.html">404</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock link-icon">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span class="menu-title">User Page</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="user">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="login-2.html">Login - 2</a></li>
                            <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="register-2.html">Register - 2</a></li>
                            <li class="nav-item"><a class="nav-link" href="lock-screen.html">Lock Screen</a></li>
                            <li class="nav-item"><a class="nav-link" href="forget-password.html">Forget Password</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-aperture link-icon">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="14.31" y1="8" x2="20.05" y2="17.94"></line>
                            <line x1="9.69" y1="8" x2="21.17" y2="8"></line>
                            <line x1="7.38" y1="12" x2="13.12" y2="2.06"></line>
                            <line x1="9.69" y1="16" x2="3.95" y2="6.06"></line>
                            <line x1="14.31" y1="16" x2="2.83" y2="16"></line>
                            <line x1="16.62" y1="12" x2="10.88" y2="21.94"></line>
                        </svg>
                        <span class="menu-title">Icons</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="icons">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="font-awesome.html">Font Awesome</a></li>
                            <li class="nav-item"> <a class="nav-link" href="pe-7-stroke.html">Pe-7 stroke</a></li>
                            <li class="nav-item"> <a class="nav-link" href="matarial-icons.html">Materialize</a></li>
                            <li class="nav-item"> <a class="nav-link" href="themify-icons.html">Themify</a></li>
                            <li class="nav-item"> <a class="nav-link" href="elegant-icons.html">Elegant</a></li>
                            <li class="nav-item"> <a class="nav-link" href="et-line-icons.html">Et-line</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin link-icon">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <span class="menu-title">Maps</span>
                        <i class="ti-angle-right"></i>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="vector-map.html">Vector</a></li>
                            <li class="nav-item"> <a class="nav-link" href="google-map.html">Google</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>

        <!-- Mani Page -->
        <div class="main-panel">
            <div class="content-wrapper">
                <!-- Basic Form area Start -->
                <div class="container-fluid">
                    <!-- Form row -->
                    <div class="row">


                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" align="center">Ajouter Pharmacie</h4>
                                    <form class="forms-sample" action="addBesoin.php" method="post">
                                        <div class="form-group">
                                            <label class="form-label">Capture:</label>
                                            <input type="text" name="capture" class="form-control" placeholder="La capture">
                                            <small class="form-text text-muted">Enter the full Code</small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Message vocal Ecrit:</label>
                                            <textarea class="form-control" name="msg_vocale"  placeholder="Exprimez-vous"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">ID Patient:</label>
                                            <input type="text" name="patientid" list="patientid_" name="post3" class="form-control" autocomplete="on">
                                            <datalist id="patientid_">
                                                <?php foreach ($patient as $item){ ?>
                                                    <option value="<?php echo $item['id']?>"><?php echo $item['nom'].' '.$item['prenom'] ?> </option>
                                                <?php } ?>
                                            </datalist>
                                        </div>
                                        <div align="center"> <button type="submit" class="btn btn-primary mr-2">Envoyer</button>
                                            <button class="btn btn-light mr-2"> annuler  </button></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div>
            </div>
            <!-- end row -->
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
                            <p>Smart Home &copy; 2020 created by <a href="#">-UPM-</a></p>
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
<script src="../js/default-assets/file-upload.js"></script>
<script src="../js/default-assets/basic-form.js"></script>

</body>


<!-- Mirrored from demo.riktheme.com/nijar/side-menu-3/basic-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 12 Mar 2021 17:18:49 GMT -->
</html>
