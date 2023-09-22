@extends('front.layouts.app')


@section('content')

<section id="contacts" class="ds columns_margin_0 columns_padding_0 table_section table_section_lg overflow-hidden">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 text-center">
                <div class="with_icon_bg with_padding_small with_skew_bg skew_right main_bg_color cs">
                    <div class="background-icon-wrap">
                        <i class="towyicon-clock background-icon"></i>
                    </div>
                    <div class="teaser media small-teaser topmargin_0 inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon main_bg_color round size_small" style="display: flex; justify-content:center; align-items:center !important;">
                                <img src="{{ asset('font-assets/images/epave/clock_2_e@2x.png') }}" alt="" style="width: 60%;"/>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <h3 class="text-uppercase grey margin_0">
                                Moins de
                                <strong>30 min</strong> à arriver
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="with_padding_small">
                    <div class="teaser">
                        <h3 class="text-uppercase big margin_0">
                           0(800)
                            <strong> 07 77 45 93 89</strong>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="with_icon_bg with_padding_small with_skew_bg skew_left main_bg_color cs">
                    <div class="background-icon-wrap">
                        <i class="towyicon-phone background-icon"></i>
                    </div>
                    <div class="teaser media small-teaser topmargin_0 inline-block">
                        <div class="media-left media-middle">
                            <div class="teaser_icon main_bg_color with_shadow round size_small" style="display: flex; justify-content:center; align-items:center !important;">
                                <img src="{{ asset('font-assets/images/epave/phone-call_3.png') }}" alt=""/>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <h3 class="text-uppercase grey margin_0">
                                <strong>24h/24 7j/7</strong> Epave-Direct
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class=" aboutSection ls section_padding_top_150 section_padding_bottom_150 table_section table_section_md columns_padding_25 columns_margin_bottom_30">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="card cardFormEvent">
                    <div class="card-header">
                        <h3> demande un évènement d'épave</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <input type="text" name="" id="" placeholder="Nom et Prénom">
                        </div>
                        <div class="form-group mb-2">
                            <input type="tel" name="" id="" placeholder="Téléphone">
                        </div>
                        <div class="form-group mb-2">
                            <textarea name="" id="" cols="30" rows="3" placeholder="Votre vihécule, lieux, état,..."></textarea>
                        </div>
                        <div class="form-group btnBox mb-2">
                            <button class="btnForm"> Envoyer la demande</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <h2 class="section_header numbered-header">Nos
                    <strong  style="color: #bb2d2d;">engagements</strong>
                </h2>
                <p class="small-text">ÉPAVISTE AGRÉÉ en Ile-De-France</p>
                <hr class="divider_30_3 zebra_bg">
                <p>
                    Direct Epave comprend l'urgence de votre situation et nous nous efforçons à rendre un service efficace, professionnel et respectueux de l'environnement, le tout sans frais pour le client.
                </p>
                <div class="inline-block topmargin_10">
                    <ul class="list1 checklist grey">
                        <li>Intervention
                            <strong>rapide</strong> en moins de 30 minutes chrono.
                        </li>
                        <li>Intervention
                            <strong>d'un expert</strong> pour traiter votre épave en toute sécurité.
                        </li>
                        <li>Intervention respectant
                            <strong>l'environnement</strong>
                        </li>
                        <li>Intervention
                            <strong>GRATUITE</strong> sans frais caché</li>
                        <li>Une équipe disponible
                            <strong>24h/24</strong>,
                            <strong>7j/7</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features" class="features ds section_counters">
    <div class="container-fluid">
        <div class="col-md-3 col-sm-6 featureBox ">
            <div class="teaser text-center">
                <div class="teaser_icon highlight">
                    <i class="towyicon-star"></i>
                </div>
                <h3 class="counter grey" data-from="0" data-to="10" data-speed="2100">0</h3>
                <p class="lightfont">Années d'expèrience</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 featureBox">
            <div class="teaser text-center">
                <div class="teaser_icon highlight">
                    <i class="towyicon-buildings"></i>
                </div>
                <h3 class="counter grey" data-from="0" data-to="74" data-speed="2100">5</h3>
                <p class="lightfont">Partenaires</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 featureBox">
            <div class="teaser text-center">
                <div class="teaser_icon highlight">
                    <i class="towyicon-truck"></i>
                </div>
                <h3 class="counter grey" data-from="0" data-to="3000" data-speed="2100">0</h3>
                <p class="lightfont">Interventions</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 featureBox">
            <div class="teaser text-center">
                <div class="teaser_icon highlight ">
                    <i class="towyicon-group"></i>
                </div>
                <h3 class="counter grey" data-from="0" data-to="15" data-speed="2100">0</h3>
                <p class="lightfont">Collaborateurs</p>
            </div>
        </div>
    </div>
</section>

<div class="mt-5 partenaireContainer">
    <div uk-slider>

        <div class="uk-position-relative uk-visible-toggle uk-light sliderEntreprise" tabindex="-1">

            <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/ministere-transition-logo.png') }}" class="ent1" alt="" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/cnpa-1-logo-png-transparent.png') }}" class="ent2" alt="" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/1572864055_centre-vhu.png') }}" class="ent3" alt="" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/Région_Île-de-France_(logo).svg.png') }}" class="ent4" alt="" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/ministere-transition-logo.png') }}" class="ent1" alt="" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/cnpa-1-logo-png-transparent.png') }}" class="ent2" alt="" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/1572864055_centre-vhu.png') }}" class="ent3" alt="" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/Région_Île-de-France_(logo).svg.png') }}" class="ent4" alt="" />
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

        </div>

        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

    </div>

</div>

<section id="services" class="services ls section_padding_top_150 section_padding_bottom_120 columns_margin_0">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header numbered-header">Comment
                    <strong style="color: #bb2d2d;">ça marche ?</strong>
                </h2>
                <p class="small-text">ÉPAVISTE AGRÉÉ en Ile-De-France</p>
            </div>
        </div>
        <div class="row topmargin_30">
            <div class="col-md-4">
                <div class="with_padding">
                    <div class="teaser text-center" style="position: relative;">
                        <div class="contactImgBox">
                            <img src="{{ asset('font-assets/images/epave/smartphone.png') }}" alt="" id="smartphone" />
                            <img src="{{ asset('font-assets/images/epave/car_26.png') }}" alt="" id="car_26" />
                        </div>
                        <h4 class="regular">
                            <a href="service-single.html">Vous nous contactez</a>
                        </h4>
                        <p>Vous nous appeler au 07 77 45 93 89 ou via le formulaire ci-dessous.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="with_padding">
                    <div class="teaser text-center">
                        <img src="{{ asset('font-assets/images/epave/car_23_fi.png') }}" alt="" id="car_23_fi"/>
                        <h4 class="regular">
                            <a href="service-single.html">La prise en charge</a>
                        </h4>
                        <p>Nous pouvons intervenir en moins de 30 min ou selon vos disponibilités.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="with_padding">
                    <div class="teaser text-center">
                        <img src="{{ asset('font-assets/images/epave/checklist.png') }}" alt="" id="checklist" />
                        <h4 class="regular">
                            <a href="service-single.html">Vous complèter un document</a>
                        </h4>
                        <p>Permet de pouvoir légalement retirer votre épave.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="with_padding">
                    <div class="teaser text-center">
                        <img src="{{ asset('font-assets/images/epave/car_23.png') }}" alt="" id="car_23"/>
                        <h4 class="regular">
                            <a href="service-single.html">Le transport</a>
                        </h4>
                        <p>Vers un centre VHU pour dépollution de la carcasse.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="with_padding">
                    <div class="teaser text-center">
                        <img src="{{ asset('font-assets/images/epave/car_29.png') }}" alt="" id="car_29" />
                        <h4 class="regular">
                            <a href="service-single.html">Le démontage et broyage</a>
                        </h4>
                        <p>La réglementation impose que 3.6% de la masse moyenne soit recyclée.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="with_padding">
                    <div class="teaser text-center">
                        <img src="{{ asset('font-assets/images/epave/documents.png') }}" alt="" id="documents" />
                        <h4 class="regular">
                            <a href="service-single.html">Remise d'un certificat de destruction</a>
                        </h4>
                        <p>Epave-Direct vous fait parvenir un certification de destruction et transmet une attestation de destruction à la préfecture concernée.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="quote" class="quote parallax get_quote section_padding_0 columns_margin_0">
    <div class="container-fluid">
        <div class="row row_columns_padding_0 display_table_md">

            <div class="cs leftSide col-md-6 section_padding_top_50 section_padding_bottom_50 display_table_cell_md vertical_top">
                <div class="container-left-half horizontal-center">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="section_header">Join our
                                <strong> team</strong>
                            </h2>
                            <p class="small-text">Fast and Courteous specialists</p>
                            <hr class="divider_30_3 zebra_bg">
                            <p class="topmargin_50 bottommargin_90 grey p-quote">
                                Doner hamburger elit magna fatback salami. Picanha ad reprehenderit anim pancetta alcatra ham tempor meatloaf shankle do sunt drumstick. Venison bresaola laboris, jowl do labore pastrami magna voluptate fatback sed cow. In beef ribs shankle hamburger
                                beef, ea turkey cupim venison Jowl pig ut biltong sint do capicola ham.
                            </p>
                            <div class=" btnBox d-flex justify-content-center">
                                <a href="#" class="theme_button">Apply today</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ds col-md-6 rightSide section_padding_top_60 section_padding_bottom_65 display_table_cell_md vertical_top">
                <div class="container-right-half horizontal-center wide-half-container">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <h2 class="section_header">Get a quote
                            </h2>
                            <p class="small-text grey">Delivers the best</p>
                            

                            <form class="" method="post" action="./">
                                <div class="formContainer">
                                    <div class="formBox">
                                        <div class="row columns_margin_bottom_15" style="width: 80%;  margin-top:10px;">
                                            <div class="col-sm-6" style="padding:0px 0px ;">
                                                <div class="form-group">
                                                    <label for="full-name" class="sr-only">Full Name
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="full-name" id="full-name" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding:0px 0px ;">
                                                <div class="form-group">
                                                    <label for="phone-number" class="sr-only">Phone Number
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="phone-number" id="phone-number" class="form-control" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding:0px 0px ; margin-top:-30px;">
                                                <div class="form-group">
                                                    <label for="start-address" class="sr-only">Tow From
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="start-address" id="start-address" class="form-control" placeholder="Tow From">
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding:0px 0px ; margin-top:-30px;">
                                                <div class="form-group">
                                                    <label for="end-address" class="sr-only">Tow To
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="end-address" id="end-address" class="form-control" placeholder="Tow To">
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding:0px 0px; margin-top:-30px;">
                                                <div class="form-group select-group">
                                                    <label for="vechicle" class="sr-only">Vechicle Type
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <select aria-required="true" id="vechicle" name="vechicle" class="form-control">
                                                            <option value="" disabled selected data-default>Vechicle Type</option>
                                                            <option value="january">Type 1</option>
                                                            <option value="february">Type 2</option>
                                                            <option value="march">Type 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6"  style="padding:0px 0px; margin-top:-30px;">
                                                <div class="form-group">
                                                    <label for="tow-date" class="sr-only">Date
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" name="tow-date" id="tow-date" value="" class="form-control" placeholder="Date">
                                                    <i class="fa fa-calendar grey" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btnBox">
                                    <p class="form-submit">
                                        <button type="submit" id="submit" name="submit" class="theme_button color1">Submit now</button>
                                    </p>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <img src="{{ asset('font-assets/images/hook.png') }}" alt="" class="top_image" />
</section>

<section id="blog" class=" blog ls section_padding_top_150 section_padding_bottom_130 columns_margin_bottom_20">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="section_header numbered-header">Our
                    <strong style="color: #bb2d2d;">Blog</strong>
                </h2>
                <p class="small-text" style="color: black;">anywhere, anytime towing</p>
            </div>
        </div>
        <div class="row topmargin_20">
            <div class="col-md-4 col-sm-6">

                <article class="vertical-item content-padding post format-standard with_border text-center">

                    <div class="item-media entry-thumbnail">
                        <img src="{{ asset('font-assets/images/epave/camion-porte-voiture-accident.png') }}" alt="">
                        <div class="media-links">
                            <a class="abs-link" title="" href="blog-single-right.html"></a>
                        </div>
                    </div>

                    <div class="item-content entry-content">
                        <header class="entry-header">

                            <h3 class="entry-title">
                                <a href="blog-single-right.html" rel="bookmark">What You Should Know About Towing Capacity</a>
                            </h3>

                        </header>
                        <!-- .entry-header -->

                        <p>Your automobile is bound to run into
                            issues, whether it be the brakes
                            or the engine, cars somply are
                            not meant..     
                        </p>

                    </div>
                    <!-- .item-content.entry-content -->
                </article>

            </div>

            <div class="col-md-4 col-sm-6">

                <article class="vertical-item content-padding post format-standard with_border text-center">

                    <div class="item-media entry-thumbnail">
                        <img src="{{ asset('font-assets/images/epave/camion-porte-voiture-accident.png') }}" alt="">
                        <div class="media-links">
                            <a class="abs-link" title="" href="blog-single-right.html"></a>
                        </div>
                    </div>

                    <div class="item-content entry-content">
                        <header class="entry-header">

                            <h3 class="entry-title">
                                <a href="blog-single-right.html" rel="bookmark">Towing Service - How to Choose a Quality Service</a>
                            </h3>

                        </header>
                        <!-- .entry-header -->

                        <p>Your automobile is bound to run into
                            issues, whether it be the brakes
                            or the engine, cars somply are
                            not meant..     
                        </p>

                    </div>
                    <!-- .item-content.entry-content -->
                </article>

            </div>

            <div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0">

                <article class="vertical-item content-padding post format-standard with_border text-center">

                    <div class="item-media entry-thumbnail">
                        <img src="{{ asset('font-assets/images/epave/camion-porte-voiture-accident.png') }}" alt="">
                        <div class="media-links">
                            <a class="abs-link" title="" href="blog-single-right.html"></a>
                        </div>
                    </div>

                    <div class="item-content entry-content">
                        <header class="entry-header">

                            <h3 class="entry-title">
                                <a href="blog-single-right.html" rel="bookmark">4 Reasons You May Need Heavy Towing For Your Car</a>
                            </h3>

                        </header>
                        <!-- .entry-header -->

                        <p>Your automobile is bound to run into issues, whether it be the brakes or the engine, cars simply are not meant...</p>

                    </div>
                    <!-- .item-content.entry-content -->
                </article>

            </div>

        </div>
    </div>
</section>

<section class="ds background_cover page_testimonials section_padding_50">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="owl-carousel" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="true" data-margin="0">
                    <blockquote>
                        <img src="{{ asset('font-assets/images/epave/n_60_F_224869519_aRaeLneqALfPN.png') }}" alt="" /> Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim. Officia
                        tongue bacon mollit esse. Ipsum deserunt salami jowl short ribs veniam.
                        <div class="item-meta">
                            <h5 class="highlight">Curtis Harrington</h5>
                            <p>Manager</p>
                        </div>
                    </blockquote>

                    <blockquote>
                        <img src="{{ asset('font-assets/images/epave/n_60_F_224869519_aRaeLneqALfPN.png') }}" alt="" /> Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim. Officia
                        tongue bacon mollit esse. Ipsum deserunt salami jowl short ribs veniam.
                        <div class="item-meta">
                            <h5 class="highlight">Curtis Harrington</h5>
                            <p>Manager</p>
                        </div>
                    </blockquote>

                    <blockquote>
                        <img src="{{ asset('font-assets/images/epave/n_60_F_224869519_aRaeLneqALfPN.png') }}" alt="" /> Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim. Officia
                        tongue bacon mollit esse. Ipsum deserunt salami jowl short ribs veniam.
                        <div class="item-meta ">
                            <h5 class="highlight">Curtis Harrington</h5>
                            <p>Manager</p>
                        </div>
                    </blockquote>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="faq" class="faq ls section_padding_top_150 section_padding_bottom_130 columns_margin_bottom_30 table_section table_section_md">
    <div class="container">
        <div class="text-center">
            <h2 class="section_header numbered-header">General
                <strong style="color: #bb2d2d;">FAQ'S</strong>
            </h2>
            <p class="small-text" style="color: black;">Relocation of any vehicle type</p>
        </div>
        
        <div class="row">
            <div class="col-lg-7">
                <img src="{{ asset('font-assets/images/epave/Groupe 1.png') }}" alt="" style="width: 80% !important; margint-top:50px !important;">
            </div>
            <div class="col-md-4">
                <div class="panel-group topmargin_60 bottommargin_0" id="accordion1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse1">
                                    Lorem Ipsum
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium amet ea dicta neque, ut quis omnis quos nam, pariatur, minus, fugit suscipit aspernatur sint ullam quas explicabo. Alias, officiis, dolor!
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse2" class="collapsed">
                                    Dolor Sit Amet
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facere doloremque ut dolores laudantium nihil at, repudiandae est numquam fuga tempora totam sequi quidem saepe officiis sint beatae, magni fugit.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse3" class="collapsed">
                                    Corporis Iste
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion1" href="#collapse4" class="collapsed">
                                    Adipisicing Elit
                                </a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nobis omnis delectus, asperiores quo obcaecati et iste corporis necessitatibus tempora aspernatur doloribus. Ut deleniti commodi dicta distinctio sit enim quidem!
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<section class="homeFooter ds columns_margin_0 columns_padding_0 table_section table_section_lg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 text-center with_skew_bg skew_right main_bg_color cs">
                <div class="with_icon_bg with_padding_small">
                    <i class="fa fa-envelope background-icon"></i>
                    <h3 class="logoText1 text-uppercase grey margin_0">
                        register for
                        <strong>our newsletter</strong>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="with_padding_small">
                    <div class="content-justify vertical-center middleBox">
                        <h3 class="logoText1 text-uppercase highlight margin_0">
                            enter
                            <strong>e-mail address</strong>
                        </h3>
                        <a href="#" class="theme_button color1 margin_0">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center with_skew_bg skew_left main_bg_color cs">
                <div class="with_icon_bg with_padding_small">
                    <i class="towyicon-newspaper background-icon"></i>
                    <h3 class="logoText1 text-uppercase grey margin_0">
                        get latest
                        <strong>company news</strong>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

