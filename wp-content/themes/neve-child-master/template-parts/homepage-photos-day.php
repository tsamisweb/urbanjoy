<div class="section-wrapper photos-wrapper">
        <div class="container-fluid custom-container">
          <div class="main-title">
             <h3><?php _e( 'photo of the day', 'neve' ); ?></h3>
             <h4><?php _e( 'Instagram life  #urban joy @urbanjoy' ); ?></h4>
          </div>
            <div class="row">
                <?php
                
                $post_type =  'photos';
                $taxonomy  =  'photos_of_day';

                    $args_photos = [
                        'post_type' => $post_type,
                        'posts_per_page' => 1,
                        'parent' => 0,
                        'hide_empty' => false,
                        'orderby' => 'title',
                        'post_status' => 'publish',
                        'order' => 'ASC'
                    ];

                    $photos_posts = new WP_Query($args_photos);


                    if( $photos_posts->have_posts() ) {

                        while( $photos_posts->have_posts() ) {
                                $photos_posts->the_post();

                            
                                $terms = get_the_terms($post->ID, $taxonomy);
                                $categories = [];
                        
                                if( $terms ) {    ?> 

                                <?php
                                    
                                    $tags = wp_get_post_tags($post->ID, $taxonomy);

                                    foreach ( $tags as $tag ) {
                                        $photos_tags_id = $tag->term_id;
                                        $photos_tags_name = $tag->name;
                                        $photos_slugs = $tag->slug;
                                    
                                    }

                                    foreach ($terms as $category) {
                                        $categories[] = $category->name;
                                        $categories_slug = $category->slug;
                                    
                                    }  //end foreach   

                                    //array_shift($categories); //remove the first element of an array in this situation is the 0 , the parent the music category

                                    $categories = implode(', ', $categories);

                                ?>
                        
                            <div class="col-12">
                                            
                                <figure class="post_thumbnail">
                                        <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                            <?php 
                                                if ( has_post_thumbnail() ){
                                                    echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'photos-thumbnail img-responsive' ) );
                                                }
                                            ?>
                                        </a>       
                                </figure>
                                <div class="video_title_wrapper">
                                    <a class="legends-categories" href="<?php echo get_term_link( $categories_slug , $taxonomy ); ?>"><?php echo $categories ; ?></a>
                                    <a class="legends-title-article" href="<?php echo esc_url( the_permalink() ); ?>"> <?php the_title(); ?></a>  
                                    <?php  $tags = wp_get_post_tags($post->ID, $taxonomy);

                                        echo '<div class="legends-tags-wrapper">';
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
                <?php   } // if terms 
                        }//emd of while
                    }//end main if
                        wp_reset_postdata();
                    ?>
            
            </div><!-- row -->
        </div>
        <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo get_post_type_archive_link( 'photos' ); ?>"> <?php _e( 'READ MORE' ); ?> </a>
        </div>
    </div>