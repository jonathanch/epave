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
                                Enlèvement
                                <strong>le jour même</strong>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="with_padding_small">
                    <div class="teaser">
                        <h3 class="text-uppercase big margin_0">

                            <strong> 07 53 39 07 93</strong>
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
                                <img src="{{ asset('font-assets/images/epave/phone-call_3.png') }}" alt="téléphone de l'entreprise"/>
                            </div>
                        </div>
                        <div class="media-body media-middle">
                            <h3 class="text-uppercase grey margin_0">
                                <strong>24h/24 7j/7</strong> Recyclemavoiture
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
                        <h3> Rappel en moins de 15 min</h3>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                        <div class="form-group mb-2">
                            <input type="text" name="name" id="name" placeholder="Nom et Prénom">
                        </div>
                        <div class="form-group mb-2">
                            <input type="tel" name="telephone" id="telephone" placeholder="Téléphone">
                        </div>
                        <div class="form-group mb-2">
                            <textarea name="description" id="description" cols="30" rows="3" placeholder="Votre véhicule, lieux, état,..."></textarea>
                        </div>
                        <div class="form-group btnBox mb-2">
                            <button type="submit" class="btnForm"> Envoyer la demande</button>
                        </div>

                    </div>
                </form>
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
                            <strong>rapide</strong> le jour même.
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
                <h3 class="counter grey" data-from="0" data-to="6" data-speed="2100">0</h3>
                <p class="lightfont">Années d'expèrience</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 featureBox">
            <div class="teaser text-center">
                <div class="teaser_icon highlight">
                    <i class="towyicon-buildings"></i>
                </div>
                <h3 class="counter grey" data-from="0" data-to="11" data-speed="2100">5</h3>
                <p class="lightfont">Partenaires</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 featureBox">
            <div class="teaser text-center">
                <div class="teaser_icon highlight">
                    <i class="towyicon-truck"></i>
                </div>
                <h3 class="counter grey" data-from="0" data-to="597" data-speed="2100">0</h3>
                <p class="lightfont">Interventions</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 featureBox">
            <div class="teaser text-center">
                <div class="teaser_icon highlight ">
                    <i class="towyicon-group"></i>
                </div>
                <h3 class="counter grey" data-from="0" data-to="6" data-speed="2100">0</h3>
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
                    <img src="{{ asset('font-assets/images/epave/ministere-transition-logo.png') }}" class="ent1" alt="notre partenaire 1" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/cnpa-1-logo-png-transparent.png') }}" class="ent2" alt="notre partenaire 2" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/1572864055_centre-vhu.png') }}" class="ent3" alt="notre partenaire 3" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/Région_Île-de-France_(logo).svg.png') }}" class="ent4" alt="notre partenaire 4" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/ministere-transition-logo.png') }}" class="ent1" alt="notre partenaire 5" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/cnpa-1-logo-png-transparent.png') }}" class="ent2" alt="notre partenaire 6" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/1572864055_centre-vhu.png') }}" class="ent3" alt="notre partenaire 7" />
                </li>
                <li class="boxEntreprise">
                    <img src="{{ asset('font-assets/images/epave/Région_Île-de-France_(logo).svg.png') }}" class="ent4" alt="notre partenaire 8" />
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
                            <img src="{{ asset('font-assets/images/epave/smartphone.png') }}" alt="smartphone" id="smartphone" />
                            <img src="{{ asset('font-assets/images/epave/car_26.png') }}" alt="voiture" id="car_26" />
                        </div>
                        <h4 class="regular">
                            <a href="service-single.html">Vous nous contactez</a>
                        </h4>
                        <p>Vous nous appeler au 07 53 39 07 93 ou via le formulaire ci-dessous.</p>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="with_padding">
                    <div class="teaser text-center">
                        <img src="{{ asset('font-assets/images/epave/car_23_fi.png') }}" alt="Enlèvement d'épave de voiture en Île-de-France et Haut-de-France" id="car_23_fi"/>
                        <h4 class="regular">
                            <a href="service-single.html">La prise en charge</a>
                        </h4>
                        <p>Nous pouvons intervenir le jour même ou selon vos disponibilités.</p>

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
                            <h2 class="section_header">Rejoindre notre
                                <strong> équipe</strong>
                            </h2>
                            <p class="small-text">Des experts de l'épave</p>
                            <hr class="divider_30_3 zebra_bg">
                            <p class="topmargin_50 bottommargin_90 grey p-quote">
                                Nous sommes constamment à la recherche de talents passionnés et dévoués pour rejoindre notre équipe. Si vous êtes motivé(e), désireux(se) de contribuer à notre mission et prêt(e) à relever de nouveaux défis, il vous suffit de postuler.
                            </p>
                            <div class=" btnBox d-flex justify-content-center">
                                <a href="#" class="theme_button">Postuler</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ds col-md-6 rightSide section_padding_top_60 section_padding_bottom_65 display_table_cell_md vertical_top">
                <div class="container-right-half horizontal-center wide-half-container">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <h2 class="section_header">Obtenir un rdv
                            </h2>
                            <p class="small-text grey">Service 100% gratuit</p>


                            <form method="POST" action="{{ route('users.store') }}">
                                @csrf
                                <div class="formContainer">
                                    <div class="formBox">
                                        <div class="row columns_margin_bottom_15" style="width: 80%;  margin-top:10px;">
                                            <div class="col-sm-6" style="padding:0px 0px ;">
                                                <div class="form-group">
                                                    <label for="full-name" class="sr-only">Nom et Prénom
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Nom">
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding:0px 0px ;">
                                                <div class="form-group">
                                                    <label for="phone-number" class="sr-only">Téléphone
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="telephone" id="telephone" class="form-control" placeholder="Téléphone">
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding:0px 0px ; margin-top:-30px;">
                                                <div class="form-group">
                                                    <label for="start-address" class="sr-only">Votre rue
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="start-address" id="start-address" class="form-control" placeholder="Votre rue">
                                                </div>
                                            </div>
                                            <div class="col-sm-6" style="padding:0px 0px ; margin-top:-30px;">
                                                <div class="form-group">
                                                    <label for="end-address" class="sr-only">Votre ville
                                                        <span class="required">*</span>
                                                    </label>
                                                    <input type="text" aria-required="true" size="30" value="" name="end-address" id="end-address" class="form-control" placeholder="Votre ville">
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
                                        <button type="submit" id="submit" name="submit" class="theme_button color1">Envoyez la demande</button>
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
                <h2 class="section_header numbered-header">Notre
                    <strong style="color: #bb2d2d;">Blog</strong>
                </h2>
                <p class="small-text" style="color: black;">Des articles utiles</p>
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
                                <a href="blog-single-right.html" rel="bookmark">L'interêt d'un épaviste</a>
                            </h3>

                        </header>
                        <!-- .entry-header -->

                        <p>Une panne ou un accident ? Cela peut être une expérience stressante. Les véhicules sont sujettes à des problèmes qui peuvent vous laisser en rade sur le bord de la route.
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
                                <a href="blog-single-right.html" rel="bookmark">A quoi sert un certificat de destruction ?</a>
                            </h3>

                        </header>
                        <!-- .entry-header -->

                        <p>Un certificat de destruction atteste de la destruction complète d'un véhicule hors d'usage, confirmant ainsi qu'il ne peut plus être utilisé sur la route.
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
                                <a href="blog-single-right.html" rel="bookmark">Privilégier un épaviste agréé</a>
                            </h3>

                        </header>
                        <!-- .entry-header -->

                        <p>Une Inscription en préfecture, des installations conformes, un respect des normes environnementales et des inspections régulières.</p>

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
                        <img src="{{ asset('font-assets/images/epave/n_60_F_224869519_aRaeLneqALfPN.png') }}" alt="" /> "Enlèvement d'épave, un geste pour demain."
                        <div class="item-meta">
                            <h5 class="highlight">Thomas</h5>
                            <p>Fondateur</p>
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
            <h2 class="section_header numbered-header">Nos zones
                <strong style="color: #bb2d2d;">d'enlèvement</strong>
            </h2>
            <p class="small-text" style="color: black;">Un service Français</p>
        </div>

        <div class="row">
              <div class="col-lg-7">
                <img src="{{ asset('font-assets/images/epave/Groupe 1.png') }}" alt="" style="width: 80% !important; margint-top:50px !important;">
            </div>
            <div class="col-md-4">
                {{--<div class="panel-group topmargin_60 bottommargin_0" id="accordion1">
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

                </div> --}}

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
                        S'incrire
                        <strong>à notre newsletter</strong>
                    </h3>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="with_padding_small">
                    <div class="content-justify vertical-center middleBox">
                        <h3 class="logoText1 text-uppercase highlight margin_0">
                            Entrer
                            <strong>votre adresse mail</strong>
                        </h3>
                        <a href="#about" class="theme_button color1 margin_0">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center with_skew_bg skew_left main_bg_color cs">
                <div class="with_icon_bg with_padding_small">
                    <i class="towyicon-newspaper background-icon"></i>
                    <h3 class="logoText1 text-uppercase grey margin_0">
                        Obtenir
                        <strong>les dernières actualités</strong>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

