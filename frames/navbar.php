
<?php 

if($_GET['lang'] == "en")
    $dict = loadDict("lang/navbar/trans_fr_en.txt");
else
    $dict = loadDict("lang/navbar/trans_fr_ar.txt");
?>


<body>
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>


    <div class="container-fluid nav-bar">
        <div class="container">
            <nav class="navbar navbar-light navbar-expand-lg py-4">
                <style>

                    /* Make nav links bigger and bold */
                    .navbar-nav .nav-link {
                        font-size: 1.2rem;
                        font-weight: 600;
                        padding-left: 1.2rem;
                        padding-right: 1.2rem;
                        color: #222 !important;
                        letter-spacing: 0.5px;
                        transition: color 0.2s;
                    }
                    .navbar-nav .nav-link.active,

                    /* Center nav items vertically */
                    .navbar-nav {
                        align-items: center;
                    }
                    /* Optional: Make dropdown menu font bigger */
                    .dropdown-menu .dropdown-item {
                        font-size: 1.1rem;
                    }
                </style> <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                     <img src="img/logo.png" class="img-fluid rounded" alt=""> 
                 </div>
                </a>
                <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="#hero" class="nav-item nav-link active"><?php echo trans($dict,"Page d'accueil");?></a>
                        <a href="#aboutus" class="nav-item nav-link"><?php echo trans($dict,'Qui sommes-nous');?></a>
                        
                        <!--a href="service.html" class="nav-item nav-link"><?php echo trans($dict,'Prix');?></a-->
                        <!--a href="event.html" class="nav-item nav-link"><?php echo trans($dict,'Videos');?></a-->
                        <a href="#photos" class="nav-item nav-link"><?php echo trans($dict,'Photos');?></a>
                        <a href="contact.html" class="nav-item nav-link"><?php echo trans($dict,'Contactez-nous');?></a>
                        <a href="#ourprojects" class="nav-item nav-link"><?php echo trans($dict,'Nos projects');?></a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo trans($dict,'langue');?></a>
                            <div class="dropdown-menu bg-light">
                                <!--a href="index.php?lang=ar" class="dropdown-item"><?php echo trans($dict,'arabe');?></a-->
                                <a href="index.php?lang=fr" class="dropdown-item"><?php echo trans($dict,'francais');?></a>
                                <a href="index.php?lang=en" class="dropdown-item"><?php echo trans($dict,'anglais');?></a>
                            </div>
                        </div>
                    </div>
                    <!--button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a-->
                </div>
            </nav>
        </div>
    </div>