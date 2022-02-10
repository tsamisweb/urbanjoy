<?php

$popularpost  = new WP_Query(array(
    'posts_per_page' => 4,
    'meta_key' => 'wpb_post_views_count',
    'orderby' => 'meta_value_num',
    'order' => 'DESC'
));

//var_dump($popularpost);die;
$post_id = get_the_ID(); // or use the post id if you already have it
$category_object = get_the_category($post_id);

?>
<div class="section-wrapper popular-homepage">
  <div class="section-title">
    <h3><?php _e( 'My Popular Posts' ); ?></h3>
   </div>
  
   <div class="grid-container">
    
        <?php $popular_posts = new WP_Query( $popularpost );
        
            if ( $popular_posts->have_posts() ) :?>
            
                    
                    <?php
                        while ( $popular_posts->have_posts() ) : $popular_posts->the_post();
                    ?>
                        <div class="grid-item">
                            <div class="category-article">
                                <?php  the_category( get_the_ID());  ?> 
                            </div>
                            <div class="popular-thumb">
                                <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                    <?php 
                                        if ( has_post_thumbnail() ){
                                            echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'popular-home-thumb' ) );
                                        }
                                    ?>
                                </a>
                            </div>
                           
                            <a class="popular-title" href="<?php esc_url ( the_permalink() ); ?>" title="<?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>      
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
              

            <?php 

            endif;

        ?>
   </div><!-- grid container -->

</div><!-- end of section -->
<?php /*
$prime_posts = new WP_Query( $popularpost );
 
if ( $prime_posts->have_posts() ) :?>
    <ul>
        <?php
            while ( $prime_posts->have_posts() ) : $prime_posts->the_post();
            ?>
                <li>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                      <?php the_title(); ?>
                    </a>
                </li>
            <?php
            endwhile;
            wp_reset_postdata();
        ?>
    </ul>
<?php 
endif;
*/
?>