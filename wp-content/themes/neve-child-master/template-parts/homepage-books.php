<div class="section-wrapper books-wrapper">
        <div class="container-fluid custom-container">
          <div class="books-main-title">
             <h3><?php _e( 'Books' ); ?></h3>
          </div>
            <div class="row">
                <?php
                
                $post_type =  'books';
                $taxonomy  =  'books_categories';

                    $args_books = [
                        'post_type' => $post_type,
                        'posts_per_page' => -1,
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
                        
                                if( $terms ) {    ?> 

                                <?php
                                    
                                    $tags = wp_get_post_tags($post->ID, $taxonomy);

                                    foreach ( $tags as $tag ) {
                                        $books_tags_id = $tag->term_id;
                                        $books_tags_name = $tag->name;
                                        $books_slugs = $tag->slug;
                                    
                                    }

                                    foreach ($terms as $category) {
                                        $categories[] = $category->name;
                                        $categories_slug = $category->slug;
                                    
                                    }  //end foreach   

                                    //array_shift($categories); //remove the first element of an array in this situation is the 0 , the parent the music category

                                    $categories = implode(', ', $categories);

                                ?>
                        
                            <div class="col-12 col-sm-3 col-md-3 col-lg-3">
                                            
                                <figure class="post_thumbnail">
                                        <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                            <?php 
                                                if ( has_post_thumbnail() ){
                                                    echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'books-thumbnails' ) );
                                                }
                                            ?>
                                        </a>       
                                </figure>
                                <div class="video_title_wrapper">
                                        <a href="<?php echo get_tag_link( $books_tags_id ); ?>"><?php  echo  $books_tags_name; ?></a>
                                        <a href="<?php echo get_term_link( $categories_slug , $taxonomy ); ?>"><?php echo $categories ; ?></a>
                                
                                        <a href="<?php echo esc_url( the_permalink() ); ?>"> <?php the_title(); ?></a>  
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
              <a href="<?php echo get_post_type_archive_link( 'books' ); ?>"> <?php _e( 'READ MORE' ); ?> </a>
        </div>
    </div>
