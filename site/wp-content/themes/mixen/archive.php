<?php include(TEMPLATEPATH. '/header_2.php'); ?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* blog intro SECTION */-->
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
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END blog intro SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* blog content SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <section id="blogContent">
            <div class="container">
                <div class="row content">
                    <div class="col-md-12">

                        <div class="blogPostsWrapper">
                            <div class="grid-sizer-blog-3"></div>
                            <?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="blogPost">
                                <a href="<?php the_permalink();?>">
                                    <div class="post-thumbnail">
                                        <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs', array( 'class' => 'img-responsive' ) ); }?>
                                    </div>
                                </a>
                                <div class="post-content">
                                    <div class="post-title">
                                        <a href="<?php the_permalink();?>"><h3><?php the_title();?></h3></a>
                                    </div>
                                    <div class="post-info">
                                        <div class="postBy">
                                            <p><?php the_date(); ?></p>
                                        </div>
                                    </div>
                                    <div class="excerpt"><?php the_excerpt(); ?></div>
                                    <a class="btn btn-default btn-black center-block" href="<?php the_permalink();?>">Ver más</a>
                                </div>
                            </div>
                            <?php 
                                $next_posts = get_next_posts_link();
                                $prev_posts = get_previous_posts_link(); 

                            ?>
                            <?php endwhile; else: ?>
                                <h1>No se encontraron articulos</h1>
                            <?php endif ?>
                        </div>
                            <hr>
                            <div class="row">
                                <br><br>
                                <div class="col-xs-6">
                                    <a class="btn btn-default btn-black" href="<?php echo $prev_posts; ?>">&lt; Anterior</a>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <a class="btn btn-default btn-black" href="<?php echo $next_posts; ?>">Siguiente &gt;</a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--/* END blog content SECTION */-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <?php get_footer();?>