  <!---- ADD RELATED POSTS IN SINGLE LAYOUT ----->
<?php  

$related = ci_get_related_posts( get_the_ID(), -1 );

if( $related->have_posts() ):

?>

<div class="related-posts-wrapper">
    <h3><?php esc_html_e( 'Related Posts' ); ?></h3>
      <div class="container">
      
        <div class="row">
            <?php while( $related->have_posts() ): $related->the_post(); ?>
                <div class="col-12 col-sm-4 col-md-4 col-lg-4 pl-0">
                
                    <div class="related-posts-content">
                        <div class="related-category-date"><?php the_category(); ?> <span class="separator"></span> <span class="related-date"> <?php the_time('F j, Y'); ?></span></div>

                            <div class="related-thumb">
                                <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                    <?php 
                                        if ( has_post_thumbnail() ){
                                            echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'related-post-thumb' ) );
                                        }
                                    ?>
                                </a>
                            </div>
                            <div class="related-meta-wrapper">
                                <a class="related-title" href="<?php echo  esc_url ( get_the_permalink() ); ?>"><?php the_title(); ?></a>
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

wp_reset_postdata();

?> <!---- ADD RELATED POSTS IN SINGLE LAYOUT ----->