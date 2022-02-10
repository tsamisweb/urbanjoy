
 <?php 
 
        $popular_posts_args =array(
            'posts_per_page' => 3,
            'meta_key' => 'my_post_viewed',
            'orderby' => 'meta_value_num',
            'order'=> 'DESC'
        );


        $popular_posts = new WP_Query( $popular_posts_args );
 
        if( $popular_posts->have_posts() ):

            ?>
            
            <div class="popular-posts-wrapper">
                <div class="title-section">
                    <h3 class="title"><?php esc_html_e( 'Popular Posts' ); ?></h3>
                </div>
                  <div class="container">
                  
                    <div class="row">
                        <?php while( $popular_posts->have_posts() ): $popular_posts->the_post(); ?>
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4 pl-0">
                            
                                <div class="popular-posts-content">
                                    <div class="popular-category-date"><?php the_category(); ?> <span class="separator"></span> <span class="popular-date"> <?php the_time('F j, Y'); ?></span></div>
                                        <div class="popular-thumb">
                                            <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                                <?php 
                                                    if ( has_post_thumbnail() ){
                                                        echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'related-post-thumb' ) );
                                                    }
                                                ?>
                                            </a>
                                        </div>
                                        <div class="popular-meta-wrapper">
                                            
                                                <a class="popular-title" href="<?php echo  esc_url ( get_the_permalink() ); ?>"><?php the_title(); ?></a>
                                            
                                        </div>
                                </div>
                            
                            
                            </div>
                        <?php endwhile;
                              wp_reset_query(); ?>
                    </div>
                  
                  </div>
                
            </div>
            <?php
            
            endif;
