<?php get_header();?>
<!--preloader --
        <div class="ip-header">
            <div class="ip-logo">
                <img class="img-responsive preloaderLogo center-block" src="<?php bloginfo('template_url');?>/img/logo-mixen.png" alt="preloader">
            </div>

            <div class="ip-loader">
                <svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
                    <path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                    <path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
                </svg>
            </div>
        </div>
        <!--end preloader-->

        <!--OVERLAY FOR THE PORTFOLIO MENU // DONT' DELETE IF YOU PLAN TO USE THIS OPTION-->
        <div class="container overlay overlay-slidedown">
            <div class="row">
                <div class="overlay-section"></div>
                <div class="col-md-12 ">
                    <a class="overlay-close">
                        <br><br>
                        <img class="img-responsive center-block" src="<?php bloginfo('template_url')?>/img/xsep.png" alt="close image"  data-toggle="tooltip" title="Close">
                    </a>
                </div>
            </div>
        </div>
        <!--end OVERLAY FOR THE PORTFOLIO MENU // DONT' DELETE IF YOU PLAN TO USE THIS OPTION-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* Intro  */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="intro">
            <div class="black-overlay"></div>
            <div class="container valign">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php bloginfo('template_url')?>/img/logo-mixen.png" class="img-responsive center-block introLogo" alt="Intro Logo">
                    </div>
                    <div class="col-md-12 text-center">
                        <h1>Communication & Web Technology</h1>
                    </div>
                    <div id="large-header" class="large-header" class="col-md-12 text-center">
                        <canvas id="demo-canvas"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END Intro  */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* about SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="about">
            <div class="container">
                <!--header-->
                <div class="row sectionIntro">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 data-scroll-reveal="enter top move 10px over 1s after 0.2s">
                            <span>Nosotros</span>
                        </h2>
                        <p data-scroll-reveal="enter bottom move 10px over 1s after 0.2s">
                            La comunicación es el vínculo que existe entre su marca y el mundo. Este vínculo deberá construirse sobre plataformas sólidas de constante entendimiento de los hábitos, deseos, tendencias y características propias de su público. </p>
                    </div>
                </div>
                <!--end header-->
                <!--content-->
                <div class="row content">
                    <!--item-->
                    <div class="aboutItem col-md-6 col-sm-6 col-xs-12 clearfix" data-scroll-reveal="enter left move 5px over 1s after 0.2s">
                        <div class="aboutIconWrapper" data-stellar-ratio="1.05">
                            <i class="aboutIcon"></i>
                        </div>
                        <div class="aboutText">
                            <h4>Desarrollo Web</h4>
                            <div class="aboutSeparator"></div>
                            <p>
                                · Manejo de lenguajes HTML5, CSS3 jQUERY, PHP, MySQL, POO. <br>
                                · Análisis de usabilidad. <br>
                                · Posicionamiento orgánico o adquirido.<br>
                                · Diseño responsivo.<br>
                                · Dominio & hosting.<br>
                                · Mapas de calor.
                            </p>
                        </div>
                    </div>
                    <!--end item-->
                    <!--item-->
                    <div class="aboutItem col-md-6 col-sm-6 col-xs-12 clearfix" data-scroll-reveal="enter right move 5px over 1s after 0.4s">
                        <div class="aboutIconWrapper" data-stellar-ratio="1.05">
                            <i class="aboutIcon" ></i>
                        </div>
                        <div class="aboutText">
                            <h4>Comunicación</h4>
                            <div class="aboutSeparator"></div>
                            <p>
                                · Manejo de redes sociales. <br>
                                · Diseño de identidad gráfica.<br>
                                · Arquitectura de marca.<br>
                                · Control de medios.<br>
                                · Campañas 360° / Modelación de productos 3D.<br>
                                · Notificaciones vía SMS.
                            </p>
                        </div>
                    </div>
                    <!--end item-->
                    <!--item-->
                    <div class="aboutItem col-md-6 col-sm-6 col-xs-12 clearfix" data-scroll-reveal="enter left move 5px over 1s after 0.6s">
                        <div class="aboutIconWrapper" data-stellar-ratio="1.05">
                            <i class="aboutIcon" ></i>
                        </div>
                        <div class="aboutText">
                            <h4>Aplicaciones</h4>
                            <div class="aboutSeparator"></div>
                            <p>
                                · Desarrollos en la nube. <br>
                                · Desarrollo de aplicaciones nativas: IOS / Android / Windows.<br>
                                · Desarrollo de plataformas en HTML5.<br>
                                · Diseño de interfaz móvil.
                            </p>
                        </div>
                    </div>
                    <!--end item-->
                    <!--item-->
                    <div class="aboutItem col-md-6 col-sm-6 col-xs-12 clearfix" data-scroll-reveal="enter right move 5px over 1s after 0.8s">
                        <div class="aboutIconWrapper" data-stellar-ratio="1.05">
                            <i class="aboutIcon" ></i>
                        </div>
                        <div class="aboutText">
                            <h4>Software</h4>
                            <div class="aboutSeparator"></div>
                            <p>
                                · Desarrollo a la medida. <br>
                                · Diseño y usabilidad de software. <br>
                                · Análisis de base de datos. <br>
                                · Automatización de procesos.
                            </p>
                        </div>
                    </div>
                    <!--end item-->
                </div>
                <!--end content-->
            </div>

        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END about SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* portfolio SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="portfolio">
            <div class="portfolioIntro text-center">
                <div class="black-overlay"></div>
                <h2 data-scroll-reveal="enter top move 10px over 1s after 0.2s">
                    <span>Portafolio</span>
                </h2>
            </div>
            <div class="portfolioFilters text-center">
                <div class="" id="filters">
                    <div class="col-md-2 col-sm-2 col-xs-12"><button class="btn btn-default" data-filter="*" data-toggle="tooltip" data-placement="top" title="" data-original-title="18" data-scroll-reveal="enter bottom move 10px over 1s after 0.2s">All</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-12"><button class="btn btn-default" data-filter=".web" data-toggle="tooltip" data-placement="top" title="" data-original-title="4" data-scroll-reveal="enter bottom move 10px over 1s after 0.3s">Diseño Web</button></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><button class="btn btn-default" data-filter=".comunicacion" data-toggle="tooltip" data-placement="top" title="" data-original-title="5" data-scroll-reveal="enter bottom move 10px over 1s after 0.5s">Comunicación</button></div>
                    <div class="col-md-2 col-sm-2 col-xs-12"><button class="btn btn-default" data-filter=".fotografia" data-toggle="tooltip" data-placement="top" title="" data-original-title="6" data-scroll-reveal="enter bottom move 10px over 1s after 0.6s">Fotografía</button></div>
                    <div class="col-md-3 col-sm-3 col-xs-12"><button class="btn btn-default" data-filter=".software" data-toggle="tooltip" data-placement="top" title="" data-original-title="6" data-scroll-reveal="enter bottom move 10px over 1s after 0.6s">App/Software</button></div>
                </div>
            </div>
            <div class="gallery js-isotope" data-isotope-options='{ "itemSelector": ".gallery-inner", "masonry": { "columnWidth": ".grid-sizer-four-columns" } }'>
                <!--grid sizer for columns to be used in the data-isotope-options-->
                <div class="grid-sizer-four-columns"></div>
                <!--item -->
                <div class="gallery-inner web comunicacion software">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/ford-chihuahua-motors.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Marketing / Web / Software / Redes Sociales</p>
                                    <h4>Ford Chihuahua Motors</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/ford-chihuahua-motors.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web comunicacion software">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/grupo-bafar.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Software</p>
                                    <h4>Grupo Bafar</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/grupo-bafar.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web software">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-four" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/isad.php" data-toggle="modal">
                                <div class="caption-heading">
                                    <p>Estrategia Digital / Web</p>
                                    <h4>ISAD</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/isad.jpg">
                </div>
                <!--end item -->

                <!--item -->
                <div class="gallery-inner web software">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-six" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/send-now.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Software</p>
                                    <h4>Send Now</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/send-now.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-seven" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/sapisa.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Fotografía</p>
                                    <h4>SAPISA</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/sapisa.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/pinturas-mas-colors.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Fotografía</p>
                                    <h4>Pinturas MasColors</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/pinturas-mas-colors.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web comunicacion">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/menusandplaces.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Comunicación / Software</p>
                                    <h4>Menus And Places</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/menusandplaces.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/perchisa.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web</p>
                                    <h4>Perchisa</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/perchisa.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/qam.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Fotografía</p>
                                    <h4>QAM</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/qam.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/real-skin-care.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web</p>
                                    <h4>Real Skin Care</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/real-skin-care.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web comunicacion software fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/sonar-bit.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Comunicación / Fotografía / Software</p>
                                    <h4>Sonar Bit</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/sonar-bit.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/rohi.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Fotografía</p>
                                    <h4>RoHi</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/rohi.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/her-secret-dream.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Fotografía</p>
                                    <h4>Her Secret Dream</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/her-secret-dream.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web comunicacion">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/expogan.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Comunicacón</p>
                                    <h4>Expogan 2012</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/expogan.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web comunicacion">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/abrasive-solutions.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Comunicación</p>
                                    <h4>Abrasive Solutions</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/abrasive-solutions.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/refaccionaria-octavio-vazquez.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Fotografía</p>
                                    <h4>Refacccionaria Octavio Vázquez</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/refaccionaria-octavio-vazquez.jpg">
                </div>
                <!--end item -->
                <!--item -->
                <div class="gallery-inner web fotografia">
                    <!-- caption -->
                    <div class="caption text-center ">
                        <div class="captionWrapper valign">
                            <a id="trigger-overlay-two" class="overlay-ajax" href="<?php bloginfo('template_url')?>/proyectos/hair-studio.php" data-toggle="modal" >
                                <div class="caption-heading">
                                    <p>Web / Fotografía</p>
                                    <h4>Hair Studio</h4>
                                    <div class="btn btn-default">Ver más...</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- end caption -->
                    <img alt="thumbnail" class="galleryImage" src="<?php bloginfo('template_url')?>/img/proyectos/hair-studio.jpg">
                </div>
                <!--end item -->
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* end portfolio SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* TEXT SEPARATOR */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="blogIntro">
            <div class="container">
                <div class="row sectionIntro">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 data-scroll-reveal="enter top move 10px over 1s after 0.2s">
                            <span>Blog</span>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <?php include(TEMPLATEPATH. '/slideshow.php'); ?>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END TEXT SEPARATOR */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* contact SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="contact">
            <div class="container container-360">
                <!--header-->
                <div class="row sectionIntro">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 data-scroll-reveal="enter top move over 1s after 0.2s">
                            <span>Contacto</span>
                        </h2>
                        <p></p>
                    </div>
                </div>
                <!--end header-->

                <!--content-->
                <div class="row bg-contacto">
                    <div class="col-md-6 col-sm-6 col-xs-12" data-scroll-reveal="enter left move over 1s after 0.2s">
                        <p class="bold">Dont hesitate to contact us.</p>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 listwrapper">
                                <ul class="infoContact">
                                    <li><i class="fa fa-location-arrow"></i>PIT3</li>
                                    <li>2do. Piso / Av. Heroico Colegio Militar 4700</li>
                                    <li>Chihuahua, México</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 listwrapper">
                                <ul class="infoContact">
                                    <li><i class="fa fa-phone"></i> 01 (614) 424 6161</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6 listwrapper">
                                <ul class="infoContact">
                                    <li><i class="fa fa-envelope-o"></i> hola@mixen.mx</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6 listwrapper">
                                <ul class="infoContact">
                                    <li><i class="fa fa-clock-o"></i> M-F: 9 AM - 6 PM</li>
                                    <li>Sa: 10 AM - 2 PM</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="socialContact">
                            <li><a class="fa fa-facebook" href="#"></a></li>
                            <li><a class="fa fa-twitter" href="#"></a></li>
                            <li><a class="fa fa-google-plus" href="#"></a></li>
                        </ul>
                    </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 text-center" data-scroll-reveal="enter right move over 1s after 0.2s">
                                <div id="result"></div>
                                <?php echo do_shortcode('[contact-form-7 id="10" title="Contacto"]'); ?>
                            </div>
                </div>
                <!--end content-->
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END contact SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* googleMap SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="googleMap"></section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* googleMap SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php get_footer();?>