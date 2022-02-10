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
                                    $category = get_category_by_slug( 'urban-entertemaint' );

                                    $args = array(
                                    'type'                     => 'post',
                                    'child_of'                 => $category->term_id,
                                    'orderby'                  => 'name',
                                    'order'                    => 'ASC',
                                    'hide_empty'               => FALSE,
                                    'hierarchical'             => 1
                                    ); 
                                    $child_categories = get_categories($args );

                                    $category_list = array();
                                    $category_list[] = $category->term_id;

                                    if ( !empty ( $child_categories ) ){
                                        foreach ( $child_categories as $child_category ){
                                            $category_list[] = $child_category->term_id;
                                            $category_name = $child_category->name;
                                        }
                                    }
                                ?>
                                <?php
                                    //create categories link
                                    $category_id = $category->term_id;

                                    $category_link = get_category_link( $category_id );
                                ?>
                                <div class="main-article-categories"><a href="<?php echo esc_url( $category_link ); ?>"><h1><span><?php echo $category->name;?></h1></span></a><span></span></div>
                                    <?php 

                                    $posts_args = array(
                                        'posts_per_page'   => 3,
                                        'cat'  => $category->term_id,
                                        'post_type'        => 'post',
                                        'post_status'      => 'publish',
                                        'suppress_filters' => true 
                                    );

                                    $posts = new WP_Query ( $posts_args );
                                ?>

                                <?php 
                                    if ( $posts->have_posts() ){//main if
                                        $counter = 0;
                                        while ( $posts->have_posts() ){
                                            $counter++;
                                            //echo $counter;
                                            $posts->the_post(); 
            
                                            $category_array = array();
                                            $post_categories = get_the_category ( get_the_ID() );
                                            if ( !empty ( $post_categories ) ){
                                            foreach ( $post_categories as $post_category ) {
                                                $category_array[] = $post_category->term_id;
                                                }
                                            }
                                            //Checks if post has an additional category
                                            $result = array_diff( $category_array,  $category_list   ); 
        
                                                if ( empty ( $result ) ) { 
                                ?>
                                        <article class="article-wrapper <?php echo $counter == 1 ?  "col-12 col-sm-12 col-md-12 col-xl-12 pl-0 pr-0" :  "col-12 col-sm-6 col-md-6 col-xl-6 mt-5" ?>">
                                        <div class="article-content">
                                                <div class="article-img">
                                                    <a href="<?php the_permalink(); ?>" class="side-thumb" title="<?php the_title(); ?>">
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
                                                <?php
                                                    //get subcategory name and link 
                                                    $category_child_link = get_category_link( $post_category->term_id );
                                                ?>
                                    
                                                
                                                <div class="category-article">
                                                    <a href="<?php echo esc_url( $category_child_link ); ?>" title="<?php echo esc_attr($post_category->name); ?>"><?php echo esc_attr($post_category->name); ?></a> <span class="separator"> | </span>  <span class="date-article"> <?php the_time('j F Y'); ?></span></span>
                                                </div>
                                              
                                                 <h2 class="title-article"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>"><?php echo get_the_title(); ?></a></h2>
                                                 
                                                 <p><svg style="width:25px;" fill='none' stroke='#0E1A27' stroke-width='2' stroke-dashoffset='0' stroke-dasharray='200 20' stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><line x1="15" y1="20" x2="85" y2="20" /> <line x1="35" y1="50" x2="85" y2="50" /> <line x1="55" y1="80" x2="85" y2="80" /></svg><?php the_author_posts_link(); ?></p>
                                            </div>
                                            
                                            <p><?php //the_content(); ?></p>
                                        </div><!-- article content -->
                                        </article><!-- article wrapper -->
                                <?php
                                                }//if have results
                                        
                                            }//end of while


                                    }//end of main if

                                    wp_reset_postdata();
                                ?>
            </div>
            <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo esc_url( $category_link ); ?>"> <?php _e( 'READ MORE' ); ?> </a>
            </div>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="container-fluid custom-container">
            <div class="row">
                            <?php 
                                    $category = get_category_by_slug( 'urban-life' );

                                    $args = array(
                                    'type'                     => 'post',
                                    'child_of'                 => $category->term_id,
                                    'orderby'                  => 'name',
                                    'order'                    => 'ASC',
                                    'hide_empty'               => FALSE,
                                    'hierarchical'             => 1
                                    ); 
                                    $child_categories = get_categories($args );

                                    $category_list = array();
                                    $category_list[] = $category->term_id;

                                    if ( !empty ( $child_categories ) ){
                                        foreach ( $child_categories as $child_category ){
                                            $category_list[] = $child_category->term_id;
                                            $category_name= $child_category->name;
                                        }
                                    }
                                ?>
                                <?php
                                    //create categories link
                                    $category_id = $category->term_id;

                                    $category_link = get_category_link( $category_id );
                                ?>
                                <div class="main-article-categories"><a href="<?php echo esc_url( $category_link ); ?>"><h1><span><?php echo $category->name;?></h1></span></a><span></span></div>
                                    <?php 

                                    $posts_args = array(
                                        'posts_per_page'   => 3,
                                        'cat'  => $category->term_id,
                                        'post_type'        => 'post',
                                        'post_status'      => 'publish',
                                        'suppress_filters' => true 
                                    );

                                $posts = new WP_Query ( $posts_args );
                                ?>

                                <?php 
                                    if ( $posts->have_posts() ){//main if
                                        $counter = 0;
                                        while ( $posts->have_posts() ){
                                            $counter++;
                                            //echo $counter;
                                            $posts->the_post(); 
            
                                            $category_array = array();
                                            $post_categories = get_the_category ( get_the_ID() );
                                            if ( !empty ( $post_categories ) ){
                                            foreach ( $post_categories as $post_category ) {
                                                $category_array[] = $post_category->term_id;
                                                }
                                            }
                                            //Checks if post has an additional category
                                            $result = array_diff( $category_array,  $category_list   ); 
        
                                                if ( empty ( $result ) ) { 
                                ?>
                                        <article class="article-wrapper <?php echo $counter == 1 ?  "col-12 col-sm-12 col-md-12 col-xl-12 pl-0 pr-0" :  "col-12 col-sm-6 col-md-6 col-xl-6 mt-5" ?>">
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
                                                <?php
                                                    //get subcategory name and link 
                                                    $category_child_link = get_category_link( $post_category->term_id );
                                                ?>
                                    
                                                
                                                <div class="category-article">
                                                    <a href="<?php echo esc_url( $category_child_link ); ?>" title="<?php echo esc_attr($post_category->name); ?>"><?php echo esc_attr($post_category->name); ?></a> <span class="separator"> | </span>  <span class="date-article"> <?php the_time('j F Y'); ?></span></span>
                                                </div>
                                              
                                                 <h2 class="title-article"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>"><?php echo get_the_title(); ?></a></h2>

                                                 <p><svg style="width:25px;" fill='none' stroke='#0E1A27' stroke-width='2' stroke-dashoffset='0' stroke-dasharray='200 20' stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><line x1="15" y1="20" x2="85" y2="20" /> <line x1="35" y1="50" x2="85" y2="50" /> <line x1="55" y1="80" x2="85" y2="80" /></svg> <?php the_author_posts_link(); ?></p>
                                            </div>
                                            
                                            <p><?php //the_content(); ?></p>
                                        </div><!-- article content -->
                                        </article><!-- article wrapper -->
                                <?php
                                                }//if have results
                                        
                                            }//end of while


                                    }//end of main if

                                    wp_reset_postdata();
                                ?>
            </div>
        </div><!--------------- row --------------->
        <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo esc_url( $category_link ); ?>"> <?php _e( 'READ MORE' ); ?> </a>
        </div>
    </div>

    <div class="section-wrapper">
        <div class="container-fluid custom-container">
            <div class="row">
                            <?php 
                                    $category = get_category_by_slug( 'urban-photostory' );

                                    $args = array(
                                    'type'                     => 'post',
                                    'child_of'                 => $category->term_id,
                                    'orderby'                  => 'name',
                                    'order'                    => 'ASC',
                                    'hide_empty'               => FALSE,
                                    'hierarchical'             => 1
                                    ); 
                                    $child_categories = get_categories($args );

                                    $category_list = array();
                                    $category_list[] = $category->term_id;

                                    if ( !empty ( $child_categories ) ){
                                        foreach ( $child_categories as $child_category ){
                                            $category_list[] = $child_category->term_id;
                                            $category_name= $child_category->name;
                                        }
                                    }
                                ?>
                                <?php
                                    //create categories link
                                    $category_id = $category->term_id;

                                    $category_link = get_category_link( $category_id );
                                ?>
                                <div class="main-article-categories"><a href="<?php echo esc_url( $category_link ); ?>"><h1><span><?php echo $category->name;?></h1></span></a><span></span></div>
                                    <?php 

                                    $posts_args = array(
                                        'posts_per_page'   => 3,
                                        'cat'  => $category->term_id,
                                        'post_type'        => 'post',
                                        'post_status'      => 'publish',
                                        'suppress_filters' => true 
                                    );

                                $posts = new WP_Query ( $posts_args );
                                ?>

                                <?php 
                                    if ( $posts->have_posts() ){//main if
                                        $counter = 0;
                                        while ( $posts->have_posts() ){
                                            $counter++;
                                            //echo $counter;
                                            $posts->the_post(); 
            
                                            $category_array = array();
                                            $post_categories = get_the_category ( get_the_ID() );
                                            if ( !empty ( $post_categories ) ){
                                            foreach ( $post_categories as $post_category ) {
                                                 $category_array[] = $post_category->term_id;
                                                }
                                            }
                                            //Checks if post has an additional category
                                            $result = array_diff( $category_array,  $category_list   ); 
        
                                                if ( empty ( $result ) ) { 
                                ?>
                                        <article class="article-wrapper <?php echo $counter == 1 ?  "col-12 col-sm-12 col-md-12 col-xl-12 pl-0 pr-0" :  "col-12 col-sm-6 col-md-6 col-xl-6 mt-5" ?>">
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
                                                <?php
                                                    //get subcategory name and link 
                                                    $category_child_link = get_category_link( $post_category->term_id );
                                                ?>
                                    
                                                <div class="category-article">
                                                    <a href="<?php echo esc_url( $category_child_link ); ?>" title="<?php echo esc_attr($post_category->name); ?>"><?php echo esc_attr($post_category->name); ?></a> <span class="separator"> | </span>  <span class="date-article"> <?php the_time('j F Y'); ?></span></span>
                                                </div>
                                              
                                                 <h2 class="title-article"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title(); ?>"><?php echo get_the_title(); ?></a></h2>

                                                 <p><svg style="width:25px;" fill='none' stroke='#0E1A27' stroke-width='2' stroke-dashoffset='0' stroke-dasharray='200 20' stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><line x1="15" y1="20" x2="85" y2="20" /> <line x1="35" y1="50" x2="85" y2="50" /> <line x1="55" y1="80" x2="85" y2="80" /></svg> <?php the_author_posts_link(); ?></p>
                                            </div>
                                            
                                            <p><?php //the_content(); ?></p>
                                        </div><!-- article content -->
                                        </article><!-- article wrapper -->
                                <?php
                                                }//if have results
                                        
                                            }//end of while


                                    }//end of main if

                                    wp_reset_postdata();
                                ?>
            </div><!----------------- row ------------->
            <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo esc_url( $category_link ); ?>"> <?php _e( 'READ MORE' ); ?> </a>
            </div>
        </div>
    </div>


    <?php get_template_part('template-parts/homepage-videos'); ?> 
   
    <?php get_template_part('template-parts/homepage-urban-legends'); ?>

    <?php get_template_part('template-parts/homepage-books'); ?>


    <div class="section-wrapper intagram-wrapper">
         <div class="container-fluid custom-container">
         </div>
    </div>
   
</main>

<?php ?>

<div class="sidebar-wrapper">
<?php
   
   fetch_custom_menu('Sidebar menu');

?>
</div>



<!-- END OF MAIN SECTION -->

<?php get_footer(); ?>