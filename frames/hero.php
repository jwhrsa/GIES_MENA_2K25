<?php 

if($_GET['lang'] == "en")
    $dict = loadDict("lang/home/trans_fr_en.txt");
else
    $dict = loadDict("lang/home/trans_fr_ar.txt");

?>

<div id="hero" class="container-fluid bg-light py-6 my-6 mt-0" style="margin-top: -50px !important;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div style="text-align: center !important; " class="col-lg-4 col-md-12">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown"><?php echo trans($dict,"Donner de la voix à chacun, façonner un avenir uni");?></small>
                <h1 style="font-size:45pt !important; align: center !important" class="display-1 mb-4 animated bounceInDown"><?php echo trans($dict,'TUNISIA POLICY CIRCLE');?></h1>
                <a style="color : white" href="#aboutus" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft"><?php echo trans($dict,'Plus');?></a>
                <a style="color : white" href="#contactus" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft"><?php echo trans($dict,'Contactez nous');?></a>
            </div>
            <div class="col-lg-2 col-md-12"></div>
            <div class="col-lg-6 col-md-12" style="margin-left: -30px;">
                <!-- WRAPPER SLIDER -->
                <div class="wrapper_slide">
    <div class="container_slide">
        <input type="radio" name="slide" id="c1" checked>
        <label for="c1" class="card_slide" onclick="if(document.getElementById('c1').checked){ window.open('https://managers.tn/2023/11/29/impact-nights-tunisie-reflexions-sur-lia-pour-un-changement-societal-ethique-et-entrepreneurial/?fbclid=IwY2xjawIjKw5leHRuA2FlbQIxMAABHZeRnWZRzKqNurVsIrI40mkA70BT8vK7C7LKNijIIhH0P7P1weh2gTJtTQ_aem_ewFaWVk-kL7AE67sUHxleQ', '_blank'); }">
            
            <div class="row">
                <div class="description">
                    <!-- Optional description content -->
                </div>
            </div>
        </label>
                        <input type="radio" name="slide" id="c2" >
                        <label for="c2" class="card_slide">
                            <div class="row">
                                
                                <div class="description">
                                    <!--h4>Digital Technology</h4>
                                    <p>Gets better every day -
                                    stay tuned</p-->
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="c3" >
                        <label for="c3" class="card_slide">
                            <div class="row">
                              
                                <div class="description">
                                    <!--h4>Globalization</h4>
                                    <p>Help people all over the world</p-->
                                </div>
                            </div>
                        </label>
                        <input type="radio" name="slide" id="c4" >
                        <label for="c4" class="card_slide">
                            <div class="row">
                                
                                <div class="description">
                                    <!--h4>New technologies</h4>
                                    <p>Space engineering becomes
                                    more and more advanced</p-->
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
                <!-- FIN WRAPPER SLIDER-->

                <!-- SLIDER CONTAINER -->
               <link rel="stylesheet" href="css/slider_container.css">
                
                <div class="slider_container">
                    <div class="list">
                        <div class="item">
                            <img src="css/1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="css/2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="css/3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="css/4.jpg" alt="">
                        </div>
                    </div>
                    <div class="buttons">
                        <button id="prev"><</button>
                        <button id="next">></button>
                    </div>
                    <ul class="dots">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/slider_container.js"></script>
<script>
  jQuery(document).ready(function ($) {
    $(".slider-img").on("click", function () {
      $(".slider-img").removeClass("active");
      $(this).addClass("active");
  });
});
</script>
