<section id="blogIntro-info">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-md-12 col-sm-12 col-xs-12 text-separator-title text-center">
                        <h3 data-scroll-reveal="enter left move 10px over 1s after 0.2s">
                            <span>Blog</span>
                        </h3>
                    </div> -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div id="owl-testimonials" class="owl-carousel" style="height:480px; margin-top:100px;">
                                <?php query_posts('category_name=blog&showposts=6'); ?>
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <div class="review" data-scroll-reveal="enter right move 10px over 1s after 0.2s">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4">
                                                <a href="<?php the_permalink();?>">
              <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs', array( 'class' => 'img-responsive' ) ); }?></a>
                                            </div>
                                            <div class="col-md-8 col-sm-8">
                                                <a href="<?php the_permalink();?>"><h4><?php the_title();?></h4></a>
                                                <p class="titulation"><?php echo get_the_date('d-m-y');?></p>
                                                <br>
                                                <p><?php the_excerpt(); ?></p>
                                                <br>
                                            </div>
                                        </div>
                                </div>
                                <?php endwhile; else: ?>
                                <h1>No se encontraron articulos</h1>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
</section>