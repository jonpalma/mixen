<?php include(TEMPLATEPATH. '/header_2.php'); ?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* blog intro SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="blogIntro">
            <div class="container">
                <!--header-->
                <div class="row sectionIntro">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <h2 data-scroll-reveal="enter top move 10px over 1s after 0.2s">
                            <span>Blog</span>
                        </h2>
                    </div>
                </div>
                <!--end header-->
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END blog intro SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* blog content SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="blogContent">

            <div class="container">

                <!--content-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row content">
                    <div class="col-md-9">
                        <div class="blogPost3">
                                <div class="post-thumbnail">
                                    <div class="img-responsive"><?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs', array( 'class' => 'img-responsive' ) ); }?></div>
                                </div>
                                <div class="post-content">
                                    <div class="post-title">
                                        <h2><?php the_title();?></h2>
                                    </div>
                                    <div class="post-info">
                                        <div class="postBy">
                                            <p><?php the_date();?></p>
                                        </div>
                                    </div>
                                    <div class="excerpt">
                                        <?php the_content();?>
                                </div>
                            </div>
                        <hr>

                        <div class="row">
                            <br><br>
                            <div class="col-xs-6">
                            	<?php $prev_post = get_previous_post();
									if (!empty( $prev_post )): ?>
									  <a class="btn btn-default btn-black" href="<?php echo get_permalink( $prev_post->ID ); ?>">&lt; Anterior</a>
								<?php endif; ?>
                            </div>
                            <div class="col-xs-6 text-right">
                            	<?php $next_post = get_next_post();
									if (!empty( $next_post )): ?>
								  <a class="btn btn-default btn-black" href="<?php echo get_permalink( $next_post->ID ); ?>">Siguiente &gt;</a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php get_sidebar();?>
				<?php endwhile; else: ?>
             	<h1>No se encontraron articulos</h1>
          		<?php endif ?>
                <!--end content-->

            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END blog content SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<?php get_footer();?>