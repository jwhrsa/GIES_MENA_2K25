<?php 

if($_GET['lang'] == "en")
    $dict = loadDict("lang/aboutus/trans_fr_en.txt");
else
    $dict = loadDict("lang/aboutus/trans_fr_ar.txt");

?>

<div id="aboutus" class="container-fluid py-6" style="margin-top: -50px !important;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="img/logo.png" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3"><?php echo trans($dict,"À PROPOS DE NOUS");?></small>
                <h1 class="display-5 mb-4">TUNISIA POLICY CIRCLE</h1>
                <p class="mb-4"><?php echo trans($dict,"Nous sommes la première représentation internationale de l'ONG américaine The Policy Circle, établie en Tunisie et en Afrique. Cette initiative rassemble des femmes leaders désireuses de trouver des solutions pour leurs communautés en s'appuyant sur des politiques qui encouragent la créativité et l'initiative.Notre objectif principal est de promouvoir le rôle des femmes dans la vie socio-économique.");?></p>
                <div class="row g-4 text-dark mb-5">
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?php echo trans($dict,"Promotion du leadership féminin");?>
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?php echo trans($dict,"Éducation et sensibilisation");?>
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?php echo trans($dict,"Création de réseaux et opportunités");?>
                    </div>
                    <div class="col-sm-6">
                        <i class="fas fa-share text-primary me-2"></i><?php echo trans($dict,"Plaidoyer pour l’inclusion");?>
                    </div>
                </div>
                <!--a style="color:white" href="" class="btn btn-primary py-3 px-5 rounded-pill">À PROPOS DE NOUS<i class="fas fa-arrow-right ps-2"></i></a-->
            </div>
        </div>
    </div>
</div>

<!--div class="container-fluid faqt py-6">
    <div class="container">
        <div class="row g-4 align-items-center">
        <div class="col-lg-7">
             <div class="row g-4">
                <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.3s">
                    <div class="faqt-item bg-primary rounded p-4 text-center">
                        <i class="fas fa-users fa-4x mb-4 text-white"></i>
                        <h1 style="color: white;" class="display-4 fw-bold" data-toggle="counter-up">2752</h1>
                        <p style="color: white !important;" class="text-dark text-uppercase fw-bold mb-0">Clients Satisfaits</p>
                    </div>
                </div>
                <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.5s">
                    <div class="faqt-item bg-primary rounded p-4 text-center">
                        <i class="fas fa-users-cog fa-4x mb-4 text-white"></i>
                        <h1 style="color: white !important;" class="display-4 fw-bold" data-toggle="counter-up">84</h1>
                        <p style="color: white !important;" class="text-dark text-uppercase fw-bold mb-0">Employés Dévoués</p>
                    </div>
                </div>
                <div class="col-sm-4 wow bounceInUp" data-wow-delay="0.7s">
                    <div class="faqt-item bg-primary rounded p-4 text-center">
                        <i class="fas fa-check fa-4x mb-4 text-white"></i>
                        <h1 style="color: white !important;" class="display-4 fw-bold" data-toggle="counter-up">13</h1>
                        <p style="color: white !important;" class="text-dark text-uppercase fw-bold mb-0">Saisons de Succès</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
            <div class="video">
                <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=LtB7BpojidU&ab_channel=Soci%C3%A9t%C3%A9Chebla" data-bs-target="#videoModal">
                    <span></span>
                </button>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                    allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div-->