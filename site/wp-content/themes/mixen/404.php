<?php include(TEMPLATEPATH. '/header_2.php'); ?>
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
                        <h1>404 Error! </h1>
                        <h5 style="color:white">The page you are looking for doesn't exist.</h5>
                    </div>


                    <div class="col-md-6 col-md-offset-3 text-center">
                    	<?php 
                    		$url = wp_get_referer();
							$path_parts = pathinfo($url);
                    	?>
                        <a class="btn btn-default btn-white" href="<?php echo $path_parts['filename']; ?>">Go Back!</a>
                    </div>

                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END Intro  */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php get_footer();?>