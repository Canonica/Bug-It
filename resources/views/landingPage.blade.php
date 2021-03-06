<!DOCTYPE html>
<html lang="fr" class="no-js">
    
<head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BUG IT, L’APPLICATION ARG</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link href="{{ URL::asset('img/icone-01.ico') }}" rel="icon" type="image/ico" />

        <link rel="stylesheet" href=" {{ URL::asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href=" {{ URL::asset('css/main.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Hind+Guntur:' rel='stylesheet' type='text/css'>
        <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie9-and-down.css" />
        <![endif]-->

        <script src=" {{ URL::asset('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
        <script src=" {{ URL::asset('js/vendor/video.js') }}"></script>
    </head>
    <body>
        <div class="main">
            <section class="home">
                <div class="container">
                    {{\Debugbar::disable()}}
                    <div class="home-phone hide hidden-xs col-xs-12 col-sm-5">
                        <img src="img/iphone-3.png" class="iphone-3 " alt="">
                    </div>
                    <div class="row">
                        <div class="home-copy col-xs-12 col-sm-8 col-sm-offset-2 animated fadeInDown delay-1 ">
                            <h1 class="demo1">BUG IT<br> <span style = "font-size: 0.8em !important;"> L’APPLICATION ARG </span></h1>
                            <img style="margin-bottom:20px !important;" class="img-responsive center-block" src="img/pictos-appli.png"/>
                            <p class="p1">
                            Découvrez notre jeu à réalité alternée lors de votre première traque au festival I Love Transmedia, <br><b>du 29 Septembre au 2 Octobre à la Gaité Lyrique de Paris.</b><br><br>
                            Soyez les premiers testeurs et remportez des lunettes de réalité virtuelle grâce à Homido, notre partenaire sur cet événement !
                            </p>
                            <span class="text-center center-block hidden-xs">
                                <img class="img-responsive my-img center-block" src="img/homido-mini.png"/>
                                <img class="img-responsive my-img center-block" src="img/homido-logo.png"/>
                            </span>
                            <span class="take-a-look animated fadeInDown delay-3"><i class="fa fa-chevron-down"></i>Découvrir</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="slide-1 slide full-color">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-6 iphone-container ">
                            <img src="img/screen-scan.png" class="hide iphone-1" alt="">
                        </div>

                        <div class="col-xs-12 col-sm-4 copy">
                            <h2 class=" hide slide-1-title slide-titles"> Voici l’histoire… </h2>
                            <p class="slide-1-1 hide">
                                …de trois jeunes génies de l'informatique qui infiltrent des évènements en les piratant pour mettre un peu d’animation...
                            </p>

                            <p class="slide-1-2 hide hidden-xs">
                                Enfin, « génies ». Qualificatif très relatif, puisque le virus informatique qu'ils essayent de faire naître a développé une autonomie propre, et même une conscience. Devenue une créature numérique, celle-ci n’est pas spécialement enthousiaste à l’idée de travailler pour les trois nuisibles. 
                            </p>

                            <p class="slide-1-3 hide hidden-xs">
                                Elle se sert alors des informations topographiques et tout ce qu’ils lui ont donné pour s'infiltrer au mieux, afin d’essayer de faire signe aux visiteurs sur place que quelque chose cloche, et tant qu’à faire, trouver quelqu'un pour l'aider à se libérer... 
                            </p>
                            <img src="img/pirate-screen.png" class="img-responsive slide-1-3 hide hidden-xs hidden-sm"/>
                        </div>
                    </div>
                </div>
            </section>
            <section class="slide-2 slide full-color">
                <div style="height:100%;" class="container">
                    <div style="height:100%;" class="row">

                        <div style="height:100%;" class="col-xs-12 col-sm-4 copy">
                            <h2 class="hide slide-2-title slide-titles p3">Partez en quête !</h2>

                            <p class="slide-2-1 hide p3">
                                Parcourez un évènement piraté, et restez attentifs. Lors de l’apparition d’un des indices laissés par la créature, sortez vite votre smartphone et scannez-le !
                            </p>

                            <p class="slide-2-2 hide hidden-xs p3">
                                Celle-ci vous fera découvrir une anecdote, ou un secret, sur l’histoire du lieu dans lequel vous vous trouvez. Elle vous permettra également de glitcher votre environnement et de participer à l’élaboration d’une fresque collective numérique, afin de détourner l’attention des trois pirates…
                            </p>

                            <p class="slide-2-3 hide p3">
                                Arriverez-vous à trouver tous les indices laissés par la créature ? <b>Voici le premier de votre quête …</b>
                            </p>
                            <div class="col-xs-12 iphone-container">
                                <img src="img/screen-glitch.png" class="hide iphone-2" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 copy">
                            <div>
                                <img style="width:70% !important" src="img/repere-01.png" class="img-responsive slide-2-3 hide hidden-xs"/>
                            </div>
                            <div>
                                <img style="width:70% !important" src="img/fresque-vecto.png" class="img-responsive slide-2-3 hide hidden-xs"/>
                            </div>
                            <!--<i class="hide fa fa-chevron-down slide-2-scroll scroll-down hidden-xs"></i>-->
                        </div>
                    </div>
                </div>
            </section>
            <section class="slide-3 slide full-color">
                <div style="height:100%;" class="container">
                    <div style="height:100%;" class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-4 copy">
                            <h2 class=" hide slide-3-title slide-titles"> Libérez la… </h2>
                            <p class="slide-3-1 hide">Après un certain nombre d’indices capturés, vous êtes enrôlés dans l’une des deux factions du jeu : hacktiviste ou tr’hackeur.</p>

                            <p class="slide-3-2 hide hidden-xs">
                                Vous n’avez pas les mêmes atouts pour avancer dans votre quête, mais votre objectif reste commun : libérer la créature !
                            </p>
                            <!--<i class="hide fa fa-chevron-down slide-3-scroll scroll-down hidden-xs"></i>-->
                        </div>

                        <div class="col-xs-12 col-sm-4 iphone-container hidden-xs">
                            <img src="img/screen-indice1.png" class="hide iphone-3" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-4 iphone-container hidden-sm hidden-md hidden-lg">
                            <img src="img/screen-indice.png" class="hide iphone-3" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-4 copy">

                            <p class="slide-3-3 hide hidden-xs">
                            Plusieurs mini-jeux étapes vous permettront de progresser jusqu’à l’ultime phase d’action, jouable en réalité virtuelle.
                            </p>

                            <p class="slide-3-3 hide hidden-xs">
                                Arriverez-vous à percer le secret du lieu et libérer la créature de ses géniteurs ? À vos smartphones !
                            </p>
                            <!--<i class="hide fa fa-chevron-down slide-2-scroll scroll-down hidden-xs"></i>-->
                        </div>
                        </div>
                        <div class="col-xs-6  hidden-xs blason">
                            <img src="img/blason-hacktiviste.png" class="img-responsive slide-3-3 hide"/>
                        </div>
                        <div class="col-xs-6 hidden-xs blason">
                            <img src="img/blason-trhackeur.png" class="img-responsive slide-3-3 hide"/>
                        </div>
                    </div>

                </div>
            </section>
            <section class="contact full-color">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
                        <h2>Keep in touch</h2>
                        <!-- 
                            <div class="newsletter clearfix">
                                <div id="mc_embed_signup">
    
                                    
                                    form action must be set as url for mailchimp account. Ensure that it uses post-json and that you have a c=? on the end as below.
    
                                    example  action="//testusername.us3.list-manage.com/subscribe/post-json?u=75f4e1b40d3762253171e9d55&amp;id=c74a91dc25&amp;c=?"
                                    
    
                                    <form action="http://sambillingham.us3.list-manage.com/subscribe/post-json?u=75f4e1b90d3762255171e9d55&amp;id=c75a95dc25&amp;c=?" method="get" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Your Email" required>
                                        <button type="submit" class="btn submit btn-signup" value="" name="subscribe" id="mc-embedded-subscribe" class="button"><i class="fa fa-paper-plane"></i></button>
                                    </form>
                                </div>
                                <div class="sign-up-message hidden"></div>
                            </div>
                        -->
                        <span class="text-center center-block" style="margin-top:40%;">
                                <a class="a-contact" href="https://www.facebook.com/bugitapplication/?fref=ts" >
                                    <img class="img-responsive my-img center-block" src="img/icone-fb.png"/>
                                </a>
                                <a class="a-contact" href="https://twitter.com/bugit_arg" >
                                    <img class="img-responsive my-img center-block" src="img/icone-tw.png"/>
                                </a>
                                <a class="a-contact" href="https://www.instagram.com/bugit_arg/ " >
                                    <img class="img-responsive my-img center-block" src="img/icone-insta.png"/>
                                </a>
                            </span>
                    </div>
                </div>
            </section>

        </div> <!-- /main -->

        <!--
            <div class="settings animated fadeInLeft delay-4">
    
                <span class="settings-icon">
                    <i class="fa fa-cog"></i>
                </span>
                <h3 class="settings-title"> Settings </h3>
    
                <span class="settings-subtitle">Home</span>
                <span class="toggle-video hidden-xs">toggle video </span>
                <span class="toggle-phone hidden-xs">toggle phone</span>
                <span class="toggle-opacity-first">toggle opacity first</span>
                <span class="settings-subtitle">Global</span>
                <span class="toggle-opacity-all">toggle opacity all</span>
            </div>
         -->
        <script src=" {{ URL::asset('js/plugins.js') }}"></script>
        <script src=" {{ URL::asset('js/main.js ') }}"></script>
    </body>

<!-- Mirrored from adventurethemes.com/demo/showcase/v-1-3/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Aug 2016 14:11:56 GMT -->
</html>