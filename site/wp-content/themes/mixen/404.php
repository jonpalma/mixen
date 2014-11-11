<?php include(TEMPLATEPATH. '/header_2.php'); ?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* Intro  */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="intro">
            <div id="top"></div>
            <div class="black-overlay"></div>
            <div class="container valign">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php bloginfo('template_url')?>/img/logo-mixen.png" class="img-responsive center-block introLogo" alt="Intro Logo">
                    </div>
                    <div class="col-md-12 text-center">
                        <h1>Ups! Error 404</h1>
                        <h5 style="color:white">Disculpa la página que estas buscando no existe.</h5>
                    </div>

                    <div class="col-md-6 col-md-offset-3 text-center">
                        <a class="btn btn-default btn-white" href="<?php echo home_url(); ?>">Inicio</a>
                    </div>

                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END Intro  */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php get_footer();?>