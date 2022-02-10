<?php
/*
* Template Name: Homepage blog
*/
?>

<?php get_header(); ?>

<!-- MAIN SECTION -->
<main>

<div class="section-wrapper">
        <div class="container-fluid custom-container">
            <div class="row">
                        <?php 
                           $cat_id = 3;
                           $cat_name = get_cat_name( $cat_id  );
                           $cat_link = get_category_link ( $cat_id  );
                        ?>
                                
                                <div class="main-article-categories <?php echo $cat_name; ?>"><a href="<?php echo esc_url( $cat_link  ); ?>"><h2><span><?php echo $cat_name;?></h2></span></a><span></span></div>
                                    <?php 

                                        $args_sports = array( 
                                            'posts_per_page' => 4,
                                            //   'offset'=> 1, 
                                            'cat' => 3,// entertenmaint
                                            'hide_empty' => true,
                                            'orderby' => 'date',
                                            'post_status' => 'publish',
                                            'order' => 'DESC'
                                        );

                                        $sports_posts = new WP_query( $args_sports );

                                    ?>

                                    <?php 
                                        if ( $sports_posts->have_posts() ){//main if
                                            $counter = 0;
                                            while ( $sports_posts->have_posts() ){
                                                    $counter++;
                                            
                                                    $sports_posts->the_post(); 
                                    ?>
                                        <article class="article-wrapper <?php echo $counter == 1 ?  "col-12 col-sm-12 col-md-12 col-xl-12 pl-0 pr-0" :  "col-12 col-sm-6 col-md-6 col-xl-4 mt-5" ?>">
                                        <div class="article-content">
                                            <div class="article-img">
                                                <a href="<?php the_permalink(); ?>" class="article-link" title="<?php the_title(); ?>">
                                                    <?php 
                                                        if ( has_post_thumbnail() ){
                                                                echo get_the_post_thumbnail(get_the_ID(), "full" , array( 'class' => 'image-full' ) );
                                                        }
                                                    ?>
                                                </a> 
                                            </div>
                                            <div class="<?php echo $counter == 1 ?  "overlay" :  "overlay-small" ?>">
                                            </div>
                                            <div class="article-details <?php echo $counter == 1 ?  "y-position" :  "n-position"; ?>">
                                                
                                    
                                                <div class="category-article">

                                                    <?php  the_category( get_the_ID());  ?> <span class="separator"> </span>  <span class="date-article"> <?php the_time('j F Y'); ?></span>
                                                </div>
                                              
                                                 <h2 class="title-article"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
                                                 
                                                 <?php

                                                    $tags_posts = wp_get_post_tags($post->ID, $taxonomy);
                                                    echo '<div class="tags-wrapper">';
                                                    echo '<span>Tags</span>';
                                                    foreach ( $tags_posts  as $tag ) {
                                                        $sports_tags_id = $tag->term_id;
                                                        $sports_tags_name = $tag->name;
                                                        $sports_slugs = $tag->slug;

                                                        echo  '<a class="tags-title" href="'.get_tag_link(  $sports_tags_id ).'" title="'. $sports_tags_name .'"> '. '#' . $sports_tags_name .'</a>';
                                                    }

                                                    echo '</div>';
                                                 ?>
                                                   
                                                 <div class="author-wrapper">
                                                     <svg width="12px" fill="#fc427b" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 333 333" xml:space="preserve"><path d="M323 31.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h313c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M230 114.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h220c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M323 198.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h313c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M151 281.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h141c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/></svg>
                                                     <span> <?php the_author_posts_link(); ?></span>
                                                 </div>
                                            </div>
                                            
                                        </div><!-- article content -->
                                        </article><!-- article wrapper -->
                                <?php
                                        
                                            }//end of while


                                    }//end of main if

                                    wp_reset_postdata();
                                ?>
            </div><!----------------- row ------------->
            <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo esc_url( $cat_link ); ?>"> <?php esc_html_e( 'READ MORE' ); ?> </a>
            </div>
        </div>
    </div>
    
    <div class="section-wrapper">
        <div class="container-fluid custom-container">
            <div class="row">
                        <?php 
                           $cat_id = 4;  
                           $cat_name = get_cat_name( $cat_id  );
                           $cat_link = get_category_link ( $cat_id  );
                        ?>
                                
                                <div class="main-article-categories <?php echo $cat_name; ?>"><a href="<?php echo esc_url( $cat_link  ); ?>"><h2><span><?php echo $cat_name;?></h2></span></a><span></span></div>
                                    <?php 

                                        $args_sports = array( 
                                            'posts_per_page' => 4,
                                            //   'offset'=> 1, 
                                            'cat' => 4,// sports - category
                                            'hide_empty' => true,
                                            'orderby' => 'date',
                                            'post_status' => 'publish',
                                            'order' => 'DESC'
                                        );

                                        $sports_posts = new WP_query( $args_sports );

                                    ?>

                                    <?php 
                                        if ( $sports_posts->have_posts() ){//main if
                                            $counter = 0;
                                            while ( $sports_posts->have_posts() ){
                                                    $counter++;
                                            
                                                    $sports_posts->the_post(); 
                                    ?>
                                        <article class="article-wrapper <?php echo $counter == 1 ?  "col-12 col-sm-12 col-md-12 col-xl-12 pl-0 pr-0" :  "col-12  col-sm-6 col-md-6 col-xl-4 mt-5" ?>">
                                        <div class="article-content">
                                            <div class="article-img">
                                                <a href="<?php the_permalink(); ?>" class="article-link" title="<?php the_title(); ?>">
                                                    <?php 
                                                        if ( has_post_thumbnail() ){
                                                                echo get_the_post_thumbnail(get_the_ID(), "full" , array( 'class' => 'image-full' ) );
                                                        }
                                                    ?>
                                                </a> 
                                            </div>
                                            <div class="<?php echo $counter == 1 ?  "overlay" :  "overlay-small" ?>">
                                            </div>
                                            <div class="article-details <?php echo $counter == 1 ?  "y-position" :  "n-position"; ?>">
                                                
                                    
                                                <div class="category-article">

                                                    <?php  the_category( get_the_ID());  ?> <span class="separator"> </span>  <span class="date-article"> <?php the_time('j F Y'); ?></span>
                                                </div>
                                              
                                                 <h2 class="title-article"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
                                                 
                                                 <?php

                                                    $tags_posts = wp_get_post_tags($post->ID, $taxonomy);
                                                    echo '<div class="tags-wrapper">';
                                                    echo '<span>Tags</span>';
                                                    foreach ( $tags_posts  as $tag ) {
                                                        $sports_tags_id = $tag->term_id;
                                                        $sports_tags_name = $tag->name;
                                                        $sports_slugs = $tag->slug;

                                                        echo  '<a class="tags-title" href="'.get_tag_link(  $sports_tags_id ).'" title="'. $sports_tags_name .'"> '. '#' . $sports_tags_name .'</a>';
                                                    }

                                                    echo '</div>';
                                                 ?>
                                                   

                                                <div class="author-wrapper">
                                                     <svg width="12px" fill="#fc427b" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 333 333" xml:space="preserve"><path d="M323 31.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h313c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M230 114.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h220c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M323 198.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h313c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M151 281.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h141c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/></svg>
                                                     <span> <?php the_author_posts_link(); ?></span>
                                                </div>
                                            </div>
                                            
                                        </div><!-- article content -->
                                        </article><!-- article wrapper -->
                                <?php
                                                // }//if have results
                                        
                                            }//end of while


                                    }//end of main if

                                    wp_reset_postdata();
                                ?>
            </div><!----------------- row ------------->
            <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo esc_url( $cat_link ); ?>"> <?php esc_html_e( 'READ MORE'); ?> </a>
            </div>
        </div>
    </div>
    

    <div class="section-wrapper">
        <div class="container-fluid custom-container">
            <div class="row">
                        <?php 
                           $cat_id = 7;  
                           $cat_name = get_cat_name( $cat_id  );
                           $cat_link = get_category_link ( $cat_id  );
                        ?>
                                
                                <div class="main-article-categories <?php echo $cat_name; ?>"><a href="<?php echo esc_url( $cat_link  ); ?>"><h2><span><?php echo $cat_name;?></h2></span></a><span></span></div>
                                    <?php 

                                        $args_sports = array( 
                                            'posts_per_page' => 4,
                                            //   'offset'=> 1, 
                                            'cat' => 7,// sports - category
                                            'hide_empty' => true,
                                            'orderby' => 'date',
                                            'post_status' => 'publish',
                                            'order' => 'DESC'
                                        );

                                        $sports_posts = new WP_query( $args_sports );

                                    ?>

                                    <?php 
                                        if ( $sports_posts->have_posts() ){//main if
                                            $counter = 0;
                                            while ( $sports_posts->have_posts() ){
                                                    $counter++;
                                            
                                                    $sports_posts->the_post(); 
                                    ?>
                                        <article class="article-wrapper <?php echo $counter == 1 ?  "col-12 col-sm-12 col-md-12 col-xl-12 pl-0 pr-0" :  "col-12 col-sm-6 col-md-6 col-xl-4 mt-5" ?>">
                                        <div class="article-content">
                                            <div class="article-img">
                                                <a href="<?php the_permalink(); ?>" class="article-link" title="<?php the_title(); ?>">
                                                    <?php 
                                                        if ( has_post_thumbnail() ){
                                                                echo get_the_post_thumbnail(get_the_ID(), "full" , array( 'class' => 'image-full' ) );
                                                        }
                                                    ?>
                                                </a> 
                                            </div>
                                            <div class="<?php echo $counter == 1 ?  "overlay" :  "overlay-small" ?>">
                                            </div>
                                            <div class="article-details <?php echo $counter == 1 ?  "y-position" :  "n-position"; ?>">
                                                
                                    
                                                <div class="category-article">

                                                    <?php  the_category( get_the_ID());  ?> <span class="separator">  </span>  <span class="date-article"> <?php the_time('j F Y'); ?></span>
                                                </div>
                                              
                                                 <h2 class="title-article"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
                                                 
                                                 <?php

                                                    $tags_posts = wp_get_post_tags($post->ID, $taxonomy);
                                                    echo '<div class="tags-wrapper">';
                                                    echo '<span>Tags</span>';
                                                    foreach ( $tags_posts  as $tag ) {
                                                        $sports_tags_id = $tag->term_id;
                                                        $sports_tags_name = $tag->name;
                                                        $sports_slugs = $tag->slug;

                                                        echo  '<a class="tags-title" href="'.get_tag_link(  $sports_tags_id ).'" title="'. $sports_tags_name .'"> '. '#' . $sports_tags_name .'</a>';
                                                    }

                                                    echo '</div>';
                                                 ?>
                                                   

                                                <div class="author-wrapper">
                                                     <svg width="12px" fill="#fc427b" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewBox="0 0 333 333" xml:space="preserve"><path d="M323 31.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h313c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M230 114.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h220c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M323 198.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h313c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/><path d="M151 281.5H10c-5.5 0-10 4.5-10 10s4.5 10 10 10h141c5.5 0 10-4.5 10-10s-4.5-10-10-10z"/></svg>
                                                     <span> <?php the_author_posts_link(); ?></span>
                                                </div>
                                            </div>
                                            
                                        </div><!-- article content -->
                                        </article><!-- article wrapper -->
                                <?php
                                                // }//if have results
                                        
                                            }//end of while


                                    }//end of main if

                                    wp_reset_postdata();
                                ?>
            </div><!----------------- row ------------->
            <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo esc_url( $cat_link ); ?>"> <?php esc_html_e( 'READ MORE' ); ?> </a>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/homepage-videos'); ?> 
   
    <?php get_template_part('template-parts/homepage-urban-legends'); ?>

    <?php //get_template_part('template-parts/homepage-books'); ?>

    <?php get_template_part('template-parts/homepage-photos-day'); ?>

    <?php get_template_part('template-parts/homepage-popular-articles'); ?>
    

    <div class="section-wrapper intagram-wrapper">
         <div class="container-fluid custom-container">
         </div>
    </div>
   
</main>

<?php ?>


<!-- END OF MAIN SECTION -->

<?php get_footer(); ?>