<?php  get_header(); ?>

<?php 

    $tag_id = get_queried_object()->term_id;

    $args = array( 
             'post_type' => array( 'books', 'legends', 'videos', 'post', 'photos' ), //get multiple post types 
             'orderby' => 'menu_order' ,
             'order' => 'ASC' ,
             'posts_per_page' => -1,
             'tag_id'=> $tag_id
            );

    $query_tags = new WP_Query( $args );

?>

<div class="container container--narrow page-section tags-arhive">
  <div class="row">

    <?php 

        if( $query_tags->have_posts() ) {

            $tag = get_tag( $tag_id );
            $tag_name =  $tag->name;

            echo '<div class="main-article-categories '. $tag_name .'">' . '<h1><span>' . $tag_name .  '</h1></span></div>';

            while( $query_tags->have_posts() ) {
                $query_tags->the_post(); ?>

            <div class="post-item col-12">
                <div class="post-wrapper">
                        <div class="image-wrapper">
                            <div class="article-img">
                            <figure class="post_thumbnail">  
                                <a href="<?php esc_url(the_permalink()); ?>" class="article-link" title="<?php the_title(); ?>">
                                    <?php 
                                        if ( has_post_thumbnail() ){
                                            echo get_the_post_thumbnail(get_the_ID(), "full" , array( 'class' => 'image-full' ) );
                                        }
                                    ?>
                                </a> 
                            </figure>
                        </div>
                    </div>
                    <div class="post-content-wrapper">
                        <?php  the_category( get_the_ID());  ?>  
                        
                        <h2 class="headline headline--post-title">
                            <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <div class="generic-content">
                            <?php the_excerpt(); ?>
                        </div>

                        <div class="metabox">
                            <p><span class="post-author"><?php the_author_posts_link(); ?></span>  <span class="post-date"><?php the_time('j F Y'); ?></span></p>
                        </div>
                    </div>
                </div>
            </div><!-- post item -->
        <?php 
            }// end of while

        }//end of if
        wp_reset_postdata();

    ?>
   </div><!-- end of row -->
</div><!-- end of main container -->

<?php get_footer(); ?>