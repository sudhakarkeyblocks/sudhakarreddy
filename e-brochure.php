<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All projects of Tricolour Properties in India</title>
	<meta name="description" content="Tricolour properties completed many projects in hyderabad like Los Cabos, Loreal Park, Loreal Park Annex. And also completed Pleasure Bay in visakhapatnam summer brook in Darbhanga and many more." />
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
</head>
<style>
	.top-bar{
		margin-top: 100px;
	}
    .single-project-section{
        margin-top: 20px !important;
        margin-bottom: 50px !important;
    }
    /* Portfolio-Post */
    section.portfolio-section .portfolio-box .portfolio-post {
    width: 33.3333%;
    padding: 15px;
    }
    @media (max-width: 1239px) {
    section.portfolio-section .portfolio-box .portfolio-post {
        width: 50%;
    }
    }
    @media (max-width: 767px) {
    section.portfolio-section .portfolio-box .portfolio-post {
        width: 100%;
    }
    }
    section.portfolio-section .portfolio-box.colum4 .portfolio-post {
    width: 25%;
    }
    @media (max-width: 1239px) {
    section.portfolio-section .portfolio-box.colum4 .portfolio-post {
        width: 50%;
    }
    }
    @media (max-width: 767px) {
    section.portfolio-section .portfolio-box.colum4 .portfolio-post {
        width: 100%;
    }
    }
    section.portfolio-section .portfolio-box.colum4 .portfolio-post.with-large-size {
    width: 50%;
    }
    @media (max-width: 767px) {
    section.portfolio-section .portfolio-box.colum4 .portfolio-post.with-large-size {
        width: 100%;
    }
    }
    section.portfolio-section .portfolio-box.colum5 .portfolio-post {
    width: 20%;
    }
    @media (max-width: 1239px) {
    section.portfolio-section .portfolio-box.colum5 .portfolio-post {
        width: 25%;
    }
    }
    @media (max-width: 1023px) {
    section.portfolio-section .portfolio-box.colum5 .portfolio-post {
        width: 33.3333%;
    }
    }
    @media (max-width: 767px) {
    section.portfolio-section .portfolio-box.colum5 .portfolio-post {
        width: 100%;
    }
    }
    section.portfolio-section .portfolio-box.joined {
    margin: 0;
    }
    section.portfolio-section .portfolio-box.joined .portfolio-post {
    padding: 0;
    }

    /* Common style */
    .portfolio-post figure {
    position: relative;
    float: left;
    overflow: hidden;
    margin: 0;
    width: 100%;
    }
    .portfolio-post figure:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 2;
    }

    .portfolio-post figure img {
    position: relative;
    display: block;
    width: 110%;
    }

    .portfolio-post figure figcaption {
    padding: 30px;
    color: #fff;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    z-index: 3;
    }

    .portfolio-post figure figcaption::before,
    .portfolio-post figure figcaption::after {
    pointer-events: none;
    }

    .portfolio-post figure figcaption,
    .portfolio-post figure figcaption > a {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    }

    .portfolio-post figure.hover2 figcaption {
    bottom: 10px;
    left: 10px;
    right: 10px;
    top: inherit;
    width: auto;
    height: auto;
    background-color: #3d3d3d;
    }

    /* Anchor will cover the whole item by default */
    /* For some effects it will show as a button */
    .portfolio-post figure figcaption > a {
    z-index: 1000;
    top: 30px;
    left: initial;
    right: 30px;
    width: 60px;
    height: 60px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    border: 2px solid #ffffff;
    line-height: 56px;
    text-align: center;
    }
    .portfolio-post figure figcaption > a span {
    position: relative;
    z-index: 2;
    font-size: 20px;
    line-height: 60px;
    color: #ffffff;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    }
    .portfolio-post figure figcaption > a:hover span {
    color: #E31E24;
    }
    .portfolio-post figure figcaption > a:after {
    content: "";
    position: absolute;
    top: 50%;
    bottom: 50%;
    left: 50%;
    right: 50%;
    background-color: #fff;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    border-radius: 50%;
    transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    }
    .portfolio-post figure figcaption > a:hover:after {
    top: 0%;
    bottom: 0%;
    left: 0%;
    right: 0%;
    }

    .portfolio-post figure.hover2 figcaption > a {
    border: 5px solid #E31E24;
    background-color: #3d3d3d;
    top: -30px;
    right: 20px;
    }
    .portfolio-post figure.hover2 figcaption > a span {
    line-height: 50px;
    }

    .portfolio-post figure h4,
    .portfolio-post figure p {
    margin: 0;
    }
    .portfolio-post figure h4 a,
    .portfolio-post figure p a {
    color: #ffffff;
    }
    .portfolio-post figure h4 a:hover,
    .portfolio-post figure p a:hover {
    color: #E31E24;
    }

    /*---------------*/
    /***** Milo *****/
    /*---------------*/
    figure.effect-milo {
    background: #888888;
    }

    figure.effect-milo img {
    max-width: none;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(-30px, 0, 0) scale(1.12);
    transform: translate3d(-30px, 0, 0) scale(1.12);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    }

    figure.effect-milo:hover img {
    opacity: 0;
    -webkit-transform: translate3d(0, 0, 0) scale(1);
    transform: translate3d(0, 0, 0) scale(1);
    }

    figure.effect-milo.hover2:hover img {
    opacity: 1;
    }

    figure.effect-milo figcaption > a {
    opacity: 0;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: translate3d(-40px, 0, 0);
    transform: translate3d(-40px, 0, 0);
    }

    figure.effect-milo:hover figcaption > a {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    }

    figure.effect-milo p {
    color: #ffffff;
    font-size: 14px;
    text-transform: lowercase;
    }

    figure.effect-milo.hover2 p {
    font-size: 13px;
    text-transform: uppercase;
    }

    .portfolio-post figure.effect-milo.hover2 h4 {
    font-size: 16px;
    margin-top: 2px;
    }

    figure.effect-milo.hover2 figcaption > a {
    -webkit-transform: translate3d(40px, 0, 0);
    transform: translate3d(40px, 0, 0);
    }

    figure.effect-milo.hover2:hover figcaption > a {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    }

	@media(max-width: 480px){
		.top-bar{
		margin-top: 0px;
	}
	.contact-form-box{
		overflow-x: hidden !important;
	}
	.carrer-img{
		width: 100% !important;
	}
    .blog-img{
        width: 100%;
    }
	}
    .project-head{
        padding-top:30px;
        color:#f31e24;
    }
    
</style>
<body>
<?php include'mainheader.php'; ?>
<section class="main-banner">
    <div class="">
        <div class="top-bar">
            <div class="col-md-12 bg-container">
                <div>
                    <h2 class="text-center">Tricolour e-Brochures</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- single-project-section 
================================================== -->
<section class="portfolio-section single-project-section">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-12 bg-container " style="padding-right: 0px;">
                <div>
                    <h2 class="text-center">Completed Projects</h2>
                </div>
            </div> -->

        </div>
        
        <!-- Hyderabad Projects Started -->

        <h3 class="project-head">Hyderabad</h3>
   
        <div class="portfolio-box iso-call">
            <div class="portfolio-post">
                <figure class="effect-milo">
                    <img src="images/pincode_1.jpg" alt="silver-coast"/>
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>The Pincode</h4>
                        <a href="#" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                    <img src="images/autumn-exotica-banner.jpg" alt="autumn"/>
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Autumn Exotica</h4>
                        <a href="assets/Broucher/Autumn-Exatica-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Palm-Cove-New-Banner.jpg" alt="palm">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Palm Cove</h4>
                        <a href="assets/Broucher/Palm-Cove-brocher.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Silver-Coast-New-Banner.jpg" alt="silver">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Silver Coast</h4>
                        <a href="assets/Broucher/silver-coast-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/hill-waves-new-banner.jpeg" alt="hill-waves">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Hill Waves</h4>
                        <a href="assets/Broucher/hill_waves_brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Blue-Heaven-New-Banner.jpg" alt="blue-heaven">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Blue Heaven</h4>
                        <a href="assets/Broucher/Blue-Heaven-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Rising-Courtyard-New-Banner.jpg" alt="rising-courtyard">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Rising Courtyard</h4>
                        <a href="assets/Broucher/rising-Courtyard-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/loureal-park-annex-new-banner-1.jpg" alt="loureal-park">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Loureal Park Annex</h4>
                        <a href="assets/Broucher/loureal_park_annex.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/LourealPark-New-Banner.jpg" alt="loureal-park">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Loureal Park</h4>
                        <a href="assets/Broucher/LourealPark_Brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Los-Cabos-New-Banner.jpg" alt="los-cabos">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Los Cabos</h4>
                        <a href="assets/Broucher/loscabos_brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Brown-Valley-New-Banner.jpg" alt="brown-valley">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Brown Valley</h4>
                        <a href="assets/Broucher/Brown-Valley_brouchers.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Saffron-Rise-New-Banner.jpg" alt="saffron">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Saffron Rise</h4>
                        <a href="assets/Broucher/Saffron-Rise-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Treasure-hunt-New-Banner.jpg" alt="treasure">
                    <figcaption>
                         <p>Hyderabad</p>
                        <h4>Treasure Hunt</h4>
                        <a href="assets/Broucher/treasure-hunt-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
        </div>

        <!-- hyderabad ended -->

        <!-- vishakapatnam started -->
        <h3 class="project-head">Visakhapatnam</h3>
   
        <div class="portfolio-box iso-call">
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Coral-Bay-New-Banner.jpg" alt="coral bay">
                    <figcaption>
                         <p>Visakhapatnam</p>
                        <h4>Corals Bay</h4>
                        <a href="assets/Broucher/coral_bay_brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/sea-walk.jpg" alt="sea walk">
                    <figcaption>
                         <p>Visakhapatnam</p>
                        <h4>Sea Walk</h4>
                        <a href="assets/Broucher/seawalk_brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Pleasure-Bay-New-Banner.jpg" alt="los-cabos">
                    <figcaption>
                         <p>Visakhapatnam</p>
                        <h4>Pleasure Bay</h4>
                        <a href="assets/Broucher/Pleasure-Bay-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Salt-Box.jpeg" alt="salt Box">
                    <figcaption>
                         <p>Visakhapatnam</p>
                        <h4>Salt Boxz</h4>
                        <a href="assets/Broucher/salt_boxz-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>

        </div>
        <!-- Vishakapatnam Ended -->

         <!--Darbhanga started  -->

         <h3 class="project-head">Darbhanga</h3>

        <div class="portfolio-box iso-call">
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/valentine-key-banner.jpg" alt="Valentine-key">
                    <figcaption>
                         <p>Darbhanga</p>
                        <h4>Valentine Key</h4>
                        <a href="assets/Broucher/Valentine-Key-Brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Imperial-Park-New-Banner.jpg" alt="Imperial-Park">
                    <figcaption>
                         <p>Darbhanga</p>
                         <h4>Imperial Park</h4>
                        <a href="assets/Broucher/Imperial-Park-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Central-Park-New-Banner.jpg" alt="Imperial-Park">
                    <figcaption>
                         <p>Darbhanga</p>
                        <h4>Central Park</h4>
                        <a href="assets/Broucher/Central-Park-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Tricolour-Sparrow-Woods-Logo-1170x650-1.jpg" alt="Sparrow-woods">
                    <figcaption>
                         <p>Darbhanga</p>
                        <h4>Sparrow Woods</h4>
                        <a href="#" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/summer-brook-new-banner.jpg" alt="Summer-Brook">
                    <figcaption>
                         <p>Darbhanga</p>
                        <h4>Summer Brook</h4>
                        <a href="assets/Broucher/Summer_Brook-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            

        </div>
        <!--Darbhanga Ended  -->

        <!--patna started  -->

        <h3 class="project-head">Patna</h3>

       <div class="portfolio-box iso-call">
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/springfields-cosmos-new-banner.jpg" alt="Spring-fields-cosmos">
                    <figcaption>
                         <p>Patna</p>
                        <h4>Spring Fields Cosmos</h4>
                        <a href="assets/Broucher/Spring-Fields-Cosmos.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/spring-fields-banner-new.jpg" alt="Spring-fields">
                    <figcaption>
                         <p>Patna</p>
                        <h4>Spring Fields</h4>
                        <a href="assets/Broucher/Spring-Fields_Brouchure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            
       </div>
       <!--patna Ended -->

        <!-- Bangalore started -->
        <h3 class="project-head">Bangalore</h3>

        <div class="portfolio-box iso-call">
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Sunflower-New-Banner.jpg" alt="sunflower">
                    <figcaption>
                         <p>Patna</p>
                        <h4>Sunflower</h4>
                        <a href="assets/Broucher/Sunflower-brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/lakeshore-new-banner-1.jpg" alt="lakeshore">
                    <figcaption>
                         <p>Patna</p>
                        <h4>Lakeshore</h4>
                        <a href="assets/Broucher/lakeshore_brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/Cally-Groove-New-Banner.jpg" alt="Clay Groove">
                    <figcaption>
                         <p>Patna</p>
                        <h4>Clay Groove</h4>
                        <a href="assets/Broucher/clay_groove_brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
        </div>
        <!-- Bangalore ended -->

        <!--Mumbai started  -->

        <h3 class="project-head">Mumbai</h3>

        <div class="portfolio-box iso-call">
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/oscar-valley-new-banner.jpg" alt="Oscar Valley">
                    <figcaption>
                         <p>Mumbai</p>
                        <h4>Oscar Valley</h4>
                        <a href="assets/Broucher/Oscar-Valley-Brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
        </div>
        <!-- mumbai ended -->

        <!-- Muzaffarpur started -->
        <h3 class="project-head">Muzaffarpur</h3>

        <div class="portfolio-box iso-call">
            <div class="portfolio-post">
                <figure class="effect-milo">
                <img src="images/RepublicSquare-New-Banner.jpg" alt="Republic Valley">
                    <figcaption>
                         <p>Muzaffarpur</p>
                        <h4>Republic Square</h4>
                        <a href="assets/Broucher/Republic-Square-Brochure.pdf" target="_blank">
                            <span>
                                <i class="fa fa-download" aria-hidden="true"></i>
                            </span>
                        </a>
                    </figcaption>			
                </figure>
            </div>
        </div>
        

    </div>
</section>
<!-- End single-project-section -->


<?php include'mainfooter.php'; ?>
</body>
</html>
