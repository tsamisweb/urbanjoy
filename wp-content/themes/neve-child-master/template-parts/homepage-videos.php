<section class="section-wrapper videos-wrapper">
    <div class="container-fluid custom-container swipper-container">
          <div class="videos-main-title">
             <h3><?php _e( 'Tv - Media' ); ?></h3>
          </div>

          <div class="scroll-wrapper-video video-items-wrapperz">
            <div class="row  urban-videos owl-carousel owl-theme">

                <?php
                    
                    $post_type = 'videos';
                    $taxonomy = 'categories';

                        $args_books = [
                            'post_type' => $post_type,
                            'posts_per_page' => 5,
                            'parent' => 0,
                            'hide_empty' => false,
                            'orderby' => 'title',
                            'post_status' => 'publish',
                            'order' => 'ASC'
                        ];

                        $books_posts = new WP_Query($args_books);


                        if( $books_posts->have_posts() ) {

                            while( $books_posts->have_posts() ) {
                                    $books_posts->the_post();

                                
                                    $terms = get_the_terms($post->ID, $taxonomy);
                                    $categories = [];
                                    
                                //var_dump($terms);
                            
                                    if( $terms ) {    ?> 

                                    <?php
                                        
                                        foreach ($terms as $category) {
                                            $categories[] = $category->name;
                                            $categories_slug = $category->slug;
                                        
                                        }  //end foreach   

                                        //array_shift($categories); //remove the first element of an array in this situation is the 0 , the parent the music category
                               
                                        $categories = implode(', ', $categories);

                                    ?>
                            
                                <div class="video-item">
                                                
                                    <div class="post_thumbnail">
                                            <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                                <?php 
                                                    if ( has_post_thumbnail() ){
                                                        echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'books-thumbnails' ) );
                                                    }
                                                ?>
                                            </a>
                                            <div class="video_title_wrapper">
                                                <a class="video-categories" href="<?php echo get_term_link( $categories_slug , $taxonomy ); ?>"><?php echo $categories ; ?></a>
                                                <a class="video-title-article" href="<?php echo esc_url( the_permalink() ); ?>"> <?php the_title(); ?></a>  
                                               <?php  $tags = wp_get_post_tags($post->ID, $taxonomy);

                                                echo '<div class="video-tags-wrapper">';
                                                    foreach ( $tags as $tag ) {
                                                        $books_tags_id = $tag->term_id;
                                                        $books_tags_name = $tag->name;
                                                        $books_slugs = $tag->slug;
                                                    echo   '<a class="video-tags" href="'. get_tag_link( $books_tags_id ) .'"> '. '#'. $books_tags_name .'</a>';
                                                    } 
                                                echo '</div>';
                                                ?>
                                                
                                            </div>     
                                    </div>
                                    
                                </div>
                <?php   } // if terms 
                        }//emd of while
                    }//end main if
                        wp_reset_postdata();
                    ?>  

                
           </div><!-- end of row -->
        </div><!-- video items wrapper -->
      
        <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo get_post_type_archive_link( 'videos' ); ?>"> <?php _e( 'READ MORE' ); ?> </a>
        </div>
    </div><!-- end of container -->
</section>