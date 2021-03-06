<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Campari Red Diaries</title>

    <!-- STYLES -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?=assets_url()?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=assets_url()?>css/owl.theme.default.css">
    <link rel="stylesheet" href="<?=assets_url()?>css/animate.css">
    <link rel="stylesheet" href="<?=assets_url()?>css/preloader.css">
    <link rel="stylesheet" href="<?=assets_url()?>css/style.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?=assets_url()?>img/favicon.ico" type="image/x-icon">

    <!-- META -->
    <meta property="og:title" content="Campari Red Diaries">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W3BC4TN');</script>
    <!-- End Google Tag Manager -->
</head>

<body class="h-100">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3BC4TN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="loader-box">
        <div class="loader">
            
            <div class="element-animation">
                <img src="<?=assets_url()?>img/preloader.png" width="480" height="100" ;>
            </div>
        </div>
        <ul class="labels">
        <li class="label">Gin</li>
            <li class="label">Campari</li>
            <li class="label">Vermouth Rosso</li>
            <li class="label">Rodaja de Naranja</li>
        </ul>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md fixed-top">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <img src="<?=assets_url()?>img/menu.svg" alt="">
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#title">Corto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#slide1">Actores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#slide2">Behind de Scenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#slide3">Cocktails</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>


    <ul id="sticky-bar" class="landing">
        <li><a target="_blank" href="https://www.facebook.com/CampariArg/"><i class="fab fa-facebook-f"></i></a></li>
        <li><a target="_blank" href="https://www.instagram.com/campariarg/"><i class="fab fa-instagram"></i></a></li>
        <li><a target="_blank" href="https://twitter.com/campariarg"><i class="fab fa-twitter"></i></a></li>
    </ul>

    <div class="content">

        <div id="title" class="slide contenedores">
            <div class="container">
                <img class="logo" src="<?=assets_url()?>img/logo_w.png" alt="">
                <div class="train">
                    <div class="title-short">
                        <h3 class="name">ENTERING RED</h3>
                        <div class="cast">
                            <div class="cast-1">
                                <h6>STARRING</h6>
                                <h5>ANA DE ARMAS</h5>
                            </div>
                            <div class="cast-2">
                                <h6>DIRECTED BY</h6>
                                <h5>MATTEO GARRONE</h5>
                            </div>
                        </div>
                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <div id="cortos" class="false-button f-1 pt-5">
                        <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/xC93AYiC4kQ"
                            data-target="#videoModal">
                            <img src="<?=assets_url()?>img/play.svg" alt="">
                        </button>
                    </div>
                </div>

                <img src="<?=assets_url()?>img/bottles.png" alt="">
            </div>

        </div>

        <div id="slide1" class="slide">
            <div class="container p-0">
                <div class="title-section">
                    <h3>ACTORES</h3>
                </div>
                <div class="row mx-auto w-100">
                    
                    <div class="col-12">
                        <div class="actores reverse">
                            <div class="character a-2">
                                <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/CW8cPYRWALM"
                                    data-target="#videoModal">
                                    <img src="<?=assets_url()?>img/play.png" alt="">
                                </button>
                                <img class="sub" src="<?=assets_url()?>img/pachano_sub.png" alt="">
                            </div>
                            <div class="description">
                                <div class="name">
                                    <h3>SOFÍA PACHANO</h3>
                                    <h6>ACTRIZ/INFLUENCER</h6>
                                    <p>Sofía es una actriz, chef y lifestyle influencer. Es una apasionada del mundo de
                                        la coctelería, la moda y los viajes.
                                        Ama la cultura gastronómica y coctelera italiana, y es muy cercana a
                                        la comunidad de bartenders.</p>
                                </div>
                                <ul class="redes">
                                    <!-- <li><a target="_blank" href=""><i class="fab fa-facebook-f"></i></a></li> -->
                                    <li><a target="_blank" href="https://www.instagram.com/sofipachano/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <div class="actores">
                            <div class="character a-1">
                                <button type="button" class="btn video-btn" data-toggle="modal" data-src="https://www.youtube.com/embed/9h56hlHWBFk"
                                    data-target="#videoModal">
                                    <img src="<?=assets_url()?>img/play.png" alt="">
                                </button>
                                <img class="sub" src="<?=assets_url()?>img/seba_sub.png" alt="">
                            </div>
                            <div class="description">
                                <div class="name">
                                    <h3>SEBA GARCÍA</h3>
                                    <h6>BARTENDER</h6>
                                    <p>Seba es un joven bartender, manager de Presidente Bar y amante de los cocktails clásicos. Es uno de los más destacados de la nueva generación de bartenders en Argentina.</p>
                                </div>
                                <ul class="redes">
                                    <!-- <li><a target="_blank" href=""><i class="fab fa-facebook-f"></i></a></li> -->
                                    <li><a target="_blank" href="https://www.instagram.com/soyelcantinero/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="gallery">
                <h3 class="txt-red text-center mt-3">GALERÍA</h3>
                <div class="loop owl-carousel">
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_2.jpg" alt="">
                    </div>
                    
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_4.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_5.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_6.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_7.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_8.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_9.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_10.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_11.jpg" alt="">
                    </div>
                    <div class="item">
                        <div class="overlay h-100 w-100"></div>
                        <img src="<?=assets_url()?>img/gallery/gallery_12.jpg" alt="">
                    </div>
                    

                </div>
            </div>





        </div>

        <div id="slide2" class="slide">
            <div class="container scroll-behind px-0 pt-5">
                <div class="title-section vertical">
                    <h3 class="text-white">BEHIND THE SCENES</h3>
                </div>
                <div class="row mx-auto w-100">
                    <div class="col-12 col-md-6 p-0 p-md-3">
                        <div class="behind b-3">
                            <button type="button" class="btn video-btn animated " data-toggle="modal" data-src="https://www.youtube.com/embed/NvdWLSBQg-g"
                                data-target="#videoModal">
                                <img src="<?=assets_url()?>img/play.png" alt="">
                            </button>
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 p-0 p-md-3 d-flex flex-column justify-content-between">
                        <div class="behind b-2">
                            <button type="button" class="btn video-btn animated " data-toggle="modal" data-src="https://www.youtube.com/embed/XOVr8405gC4"
                                data-target="#videoModal">
                                <img src="<?=assets_url()?>img/play.png" alt="">
                            </button>
                            <div class="overlay"></div>
                        </div>
                        <div class="behind b-1">
                            <button type="button" class="btn video-btn animated " data-toggle="modal" data-src="https://www.youtube.com/embed/Y_JbM4_AxUs"
                                data-target="#videoModal">
                                <img src="<?=assets_url()?>img/play.png" alt="">
                            </button>
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>

        <div id="slide3" class="slide">
            <div class="title-section vertical">
                <h3 class="text-white">RED HANDS 2019 <br> Cocktails y Bartenders</h3>
            </div>
            <div class="container p-0">
                <div class="cocktails">
                    <ul id="menu" class="tab-header nav nav-tabs" role="tablist">
                        <li role="presentation">
                                <a href="#seba" aria-controls="#seba" role="tab" class="active" data-toggle="tab">
                                    <img src="<?=assets_url()?>img/cocktail_2.png" alt="">
                                </a>
                            </li>
                        <li role="presentation">
                            <a href="#andreas" aria-controls="#andreas" role="tab" data-toggle="tab">
                                <img src="<?=assets_url()?>img/cocktail_1.png" alt="">
                            </a>
                        </li>
                        
                        <li role="presentation">
                            <a href="#jessica" aria-controls="#jessica" role="tab" data-toggle="tab">
                                <img src="<?=assets_url()?>img/cocktail_3.png" alt="">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#joe" aria-controls="#joe" role="tab" data-toggle="tab">
                                <img src="<?=assets_url()?>img/cocktail_4.png" alt="">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#stacy" aria-controls="#stacy" role="tab" data-toggle="tab">
                                <img src="<?=assets_url()?>img/cocktail_5.png" alt="">
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#tomasso" aria-controls="#tomasso" role="tab" data-toggle="tab">
                                <img src="<?=assets_url()?>img/cocktail_6.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane " id="andreas">
                            <div class="row mx-auto w-100">
                                <div class="col-12 col-lg-4 p-0">
                                    <div class="trago">
                                        <img src="<?=assets_url()?>img/bartenders/campari_andreas_a_cut.png" alt="">
                                        <h6 class="text-white">NEGRONI 1808</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 p-0">
                                    <div class="bartender">
                                        <div class="foto">
                                            <div class="owl-carousel owl-bartenders owl-theme">
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/andreas_a.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/andreas_b.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/andreas_c.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bartender-txt">
                                            <h3 class="name text-white">ANDREAS TILL</h3>
                                            <p class="paragraph text-white">“El proceso que seguí para crear esta
                                                variación en un cocktail legendario como el Negroni fue lineal, se
                                                podría decir que era inevitable.”</p>
                                            <ul class="ingredientes p-0 text-white">
                                                <h5 class="text-white">Ingredientes</h5>
                                                <li>30 ml Campari</li>
                                                <li>20 ml Cinzano 1757 Vermouth Rosso</li>
                                                <li>20 ml Bulldog Gin</li>
                                                <li>20 ml Soda de limón</li>
                                                <li>Aguardiente de frambuesa</li>
                                            </ul>
                                            <h5 class="text-white">Sabor</h5>
                                            <p class="paragraph text-white">
                                                Al acercarse al vaso, un sabor afrutado de frambuesa despierta
                                                curiosidad. El primer sorbo se abre con impresiones picantes y herbales
                                                del vermut y la ginebra y termina en la amarga elegancia de Campari, al
                                                igual que la resolución de un solista de jazz bien tocado.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="tomasso">
                            <div class="row mx-auto w-100">
                                <div class="col-12 col-lg-4 p-0">
                                    <div class="trago">
                                        <img src="<?=assets_url()?>img/bartenders/campari_tommaso_bianco_d_cut.png" alt="">
                                        <h6 class="text-white">L’AGE D’OR NEGRONI</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 p-0">
                                    <div class="bartender">
                                        <div class="foto">
                                            <div class="owl-carousel owl-bartenders owl-theme">
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/tommaso_a.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/tommaso_b.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/tommaso_c.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bartender-txt">
                                            <h3 class="name text-white">TOMMASO CECCA</h3>
                                            <p class="paragraph text-white">“No es fácil concentrar cien años de
                                                historia en un cocktail. Por eso decidí crear uno que tuviera almas
                                                diferentes,
                                                cada una capaz de contener una de las muchas facetas de los Negroni.”</p>
                                            <ul class="ingredientes p-0 text-white">
                                                <h5 class="text-white">Ingredientes</h5>
                                                <li>40 ml Campari</li>
                                                <li>40 ml Bulldog Gin</li>
                                                <li>20 ml Cinzano 1757 Vermouth Rosso</li>
                                                <li>20 ml Grand Marnier Cuvée Louis Alexandre</li>
                                                <li>Gotas de incienso y extracto de mirra.</li>
                                            </ul>
                                            <h5 class="text-white">Sabor</h5>
                                            <p class="paragraph text-white">
                                                Un Negroni con un cuerpo intenso y notas de sabores antiguos: incienso
                                                y mirra mezclados con el sabor amargo de Campari y la esencia
                                                primordial de la botánica.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="jessica">
                            <div class="row mx-auto w-100">
                                <div class="col-12 col-lg-4 p-0">
                                    <div class="trago">
                                        <img src="<?=assets_url()?>img/bartenders/campari_jessica_cut.png" alt="">
                                        <h6 class="text-white">DON'T KILL MY VIBE</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 p-0">
                                    <div class="bartender">
                                        <div class="foto">
                                            <div class="owl-carousel owl-bartenders owl-theme">
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/jessica_a.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/jessica_b.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/jessica_c.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bartender-txt">
                                            <h3 class="name text-white">JESSICA SANCHEZ</h3>
                                            <p class="paragraph text-white">“Decidí crear un menú basado exclusivamente
                                                en cócteles para beber en la playa, pero con un alma atemporal.”</p>
                                            <ul class="ingredientes p-0 text-white">
                                                <h5 class="text-white">Ingredientes</h5>
                                                <li>25 ml Bulldog Gin</li>
                                                <li>25 ml Cinzano 1757 Vermouth Rosso</li>
                                                <li>25 ml Campari</li>
                                                <li>50 ml Spiced Ginger Ale</li>
                                            </ul>
                                            <h5 class="text-white">Sabor</h5>
                                            <p class="paragraph text-white">
                                                Amargo y refrescante.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="joe">
                            <div class="row mx-auto w-100">
                                <div class="col-12 col-lg-4 p-0">
                                    <div class="trago">
                                        <img src="<?=assets_url()?>img/bartenders/campari_joe_cocktail_bianco_c_cut.png" alt="">
                                        <h6 class="text-white">NEGRONI SEGRETO</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 p-0">
                                    <div class="bartender">
                                        <div class="foto">
                                            <div class="owl-carousel owl-bartenders owl-theme">
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/joe_a.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/joe_b.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/joe_c.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bartender-txt">
                                            <h3 class="name text-white">JOE SCHOFIELD</h3>
                                            <p class="paragraph text-white">“Mi objetivo es que el Negroni Segreto sea
                                                memorable, recordando a las personas la coctelería clásica, pero
                                                sorprendiéndolos con sabores inesperados.”</p>
                                            <ul class="ingredientes p-0 text-white">
                                                <h5 class="text-white">Ingredientes</h5>
                                                <li>25 ml Bulldog Gin</li>
                                                <li>25 ml Campari</li>
                                                <li>10 ml Cinzano 1757 Vermouth Rosso</li>
                                                <li>4 Frambuesas</li>
                                                <li>3 cucharadas de agua de rosas</li>
                                            </ul>
                                            <h5 class="text-white">Sabor</h5>
                                            <p class="paragraph text-white">
                                                Dulce con una nota fragante y frutal.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="seba">
                            <div class="row mx-auto w-100">
                                <div class="col-12 col-lg-4 p-0">
                                    <div class="trago">
                                        <img src="<?=assets_url()?>img/bartenders/campari_seba_bianco_a_cut.png" alt="">
                                        <h6 class="text-white">PRESIDENTE NEGRONI</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 p-0">
                                    <div class="bartender">
                                        <div class="foto">
                                            <div class="owl-carousel owl-bartenders owl-theme">
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/seba_a.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/seba_b.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/seba_c.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bartender-txt">
                                            <h3 class="name text-white">SEBA GARCIA</h3>
                                            <p class="paragraph text-white">“Un cockatil debe ser elegante, como un
                                                presidente. Debe tener estilo. Debe emanar la fuerza de un ...
                                                Presidente.”</p>
                                            <ul class="ingredientes p-0 text-white">
                                                <h5 class="text-white">Ingredientes</h5>
                                                <li>30 ml Campari</li>
                                                <li>30 ml Barrel Aged Genever</li>
                                                <li>15 ml Medium Sherry</li>
                                                <li>15 ml Barolo Chinato</li>
                                            </ul>
                                            <h5 class="text-white">Sabor</h5>
                                            <p class="paragraph text-white">
                                                Cítricos y hierbas.
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane " id="stacy">
                            <div class="row mx-auto w-100">
                                <div class="col-12 col-lg-4 p-0">
                                    <div class="trago">
                                        <img src="<?=assets_url()?>img/bartenders/campari_cocktail_stacey_c_cut.png" alt="">
                                        <h6 class="text-white">GARNET SBAGLIATO</h6>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-8 p-0">
                                    <div class="bartender">
                                        <div class="foto">
                                            <div class="owl-carousel owl-bartenders owl-theme">
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/stacey_a.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/stacey_b.jpg')">
                                                </div>
                                                <div class="item" style="background-image:url('<?=assets_url()?>img/bartenders/stacey_c.jpg')">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bartender-txt">
                                            <h3 class="name text-white">STACY SWENSON</h3>
                                            <p class="paragraph text-white">“Este Negroni Sbagliato fue diseñado para
                                                celebrar el corazón del Negroni: Campari.”</p>
                                            <ul class="ingredientes p-0 text-white">
                                                <h5 class="text-white">Ingredientes</h5>
                                                <li>35 ml Campari</li>
                                                <li>28 ml Cinzano 1757 Vermouth Rosso</li>
                                                <li>14,2 ml shrub de naranja sanguínea, remolacha y granada</li>
                                                <li>8 gotas de alcaravea tostada</li>
                                                <li>3 rodajas de naranja roja</li>
                                                <li>Lambrusco</li>
                                            </ul>
                                            <h5 class="text-white">Sabor</h5>
                                            <p class="paragraph text-white">
                                                Caliente pero brillante, sabroso, robusto pero refrescante, tostado,
                                                complejo, herbáceo
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <footer class="f-lan">
            <div class="footer">
                <img src="<?=assets_url()?>img/campari.png" alt="">
                <p class="disclaim">Beber con moderación. <br> Prohibida su venta a menores de 18 años</p>
            </div>
        </footer >


    </div>


    

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="age" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body validator">
                    <img class="img-fluid mb-4" src="<?=assets_url()?>img/campari.png" alt="">
                    <h4>SOY MAYOR DE 18 AÑOS</h4>
                    <div class="buttons mx-auto mt-3 d-flex justify-content-center">
                        <button type="button" class="btn btn-c-out" onclick="javascript: es_menor();"><span><span><span>No</span></span></span></button>
                        <button type="button" class="btn btn-c-in" data-dismiss="modal"><span><span><span>Sí</span></span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Video -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">


                <div class="modal-body video">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen"
                            oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen" id="video"
                            allowscriptaccess="always"></iframe>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <!--script src="<?=assets_url()?>js/owl.carousel.min.js"></script-->
    <script src="<?=assets_url()?>js/owl.carousel.js"></script>
    <script src="<?=assets_url()?>js/events.js"></script>

    <script>
        function es_menor() {
            window.location = 'http://www.google.com';
        }
    </script>


</body>

</html>