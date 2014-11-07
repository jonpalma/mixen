<?php include(TEMPLATEPATH. '/header_project.php'); ?>
<body>
    <div id="transmitter">
        <section id="singlePageIntro">
            <div class="container">
                <div class="row text-center">
                    <h1><?php the_title(); ?></h1>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <p><?php echo CFS()->get('tags'); ?></p>
                    <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!--section-->
        <section id="singlePageContent" class="white">
            <div class="container">
                <!--content-->
                <div class="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <!-- article-->
                            <div id="post">
                                <div id="caption">
                                    <div class="excerpt"><?php the_content();?></div>
                                </div>
                            </div>
                            <!-- end article-->
                        </div>
                        <!--  info -->
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="singleProjectInfo">
                                <ul class="list">
                                    <li>
                                        <i class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Fecha: <p class="bold"><?php echo CFS()->get('fecha_de_inicio'); ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;Cliente: <p class="bold"><?php echo CFS()->get('cliente'); ?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-info-circle"></i>&nbsp;&nbsp;&nbsp;Sitio Web: <p class="bold"><?php echo CFS()->get('sitio'); ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--  end info -->
                    </div>
                    <div class="row singleImageWrapper" data-scroll-reveal="enter top move 30px over 1s after 0.2s">
                        <div class="col-md-6">
                            <img src="<?php echo CFS()->get('imagen1'); ?>" alt="" class="img-responsive center-block border">
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo CFS()->get('imagen2'); ?>" alt="" class="img-responsive center-block border">
                        </div>
                    </div>
                    <div class="row singleImageWrapper" data-scroll-reveal="enter top move 30px over 1s after 0.2s">
                        <div class="col-md-6">
                            <img src="<?php echo CFS()->get('imagen3'); ?>" alt="" class="img-responsive center-block border">
                        </div>
                        <div class="col-md-6">
                            <img src="<?php echo CFS()->get('imagen4'); ?>" alt="" class="img-responsive center-block border">
                        </div>
                    </div>
                </div>
                <?php endwhile; else: ?>
                    <h1>No se encontraron articulos</h1>
                <?php endif ?>
                <!--end content-->
            </div> <!-- /container -->
        </section>
        <!--end section-->
    </div>
<?php include(TEMPLATEPATH. '/footer_project.php'); ?>