<?php

global $post;
$post_id = $post->ID;//post id

//get the taxonomy terms of custom post type
$customTaxonomyTerms = wp_get_object_terms( $post_id , 'categories', array('fields' => 'ids') );

//var_dump($customTaxonomyTerms);die;

//query arguments
$args = array(
    'post_type' => 'videos',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'tax_query' => array(
        array(
            'taxonomy' => 'categories',
            'field' => 'id',
            'terms' => $customTaxonomyTerms
        )
    ),
    'post__not_in' => array ( $post_id ),
);

//the query
$related = new WP_Query( $args );

$terms = wp_get_post_terms( $post->ID, 'categories');

if( $related->have_posts() ):

    ?>
    
    <div class="related-posts-wrapper">
        <h3><?php _e( 'Related Posts' ); ?></h3>
          <div class="container"><!-- container -->
          
            <div class="row"><!-- row -->
                <?php while( $related->have_posts() ): $related->the_post(); ?>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 pl-0">
                    
                        <div class="related-posts-content"><!-- related posts content -->
                             
                                <div class="related-meta-wrapper"><!-- related meta wrapper -->

                                    <div class="related-category-date"><!-- category related -->
                                        <?php   foreach ( $terms as $term ) {
                                            $term_link = get_term_link( $term );
                                            echo '<a href="' . $term_link . '">' . $term->name . '</a>' . ' ';
                                        }
                                        ?>
                                        <span class="separator"></span> <span class="related-date"> <?php the_time('F j, Y'); ?></span>
                                    </div><!-- end of related category -->
                                    
                                    <div class="related-thumb"><!-- thumbnail -->
                                        <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                            <?php 
                                                if ( has_post_thumbnail() ){
                                                    echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'related-post-thumb' ) );
                                                }
                                                ?>
                                        </a>
                                    </div><!-- end of thumbnail -->
                                    
                                 
                                    <!-- title -->
                                          <a class="related-title" href="<?php echo  esc_url ( get_the_permalink() ); ?>"><?php the_title(); ?></a>
                                    <!-- end of title -->

                                </div><!-- related meta wrapper -->

                        </div><!-- related posts content -->
                    
                    
                    </div>
                <?php endwhile;
                      wp_reset_query(); ?>
            </div><!-- end of  row -->
          
          </div><!-- end of container -->
        
    </div>
    <?php
    
    endif;
    
    wp_reset_postdata();
    
    ?> <!---- ADD RELATED POSTS IN SINGLE LAYOUT ----->