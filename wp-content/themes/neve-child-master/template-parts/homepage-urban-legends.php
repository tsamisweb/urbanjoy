<div class="section-wrapper urban-legends-wrapper">
        <div class="container-fluid custom-container">
          <div class="main-title">
             <h3><?php _e( 'Urban Legends' ); ?></h3>
          </div>
            <div class="row urban-legends owl-carousel owl-theme">
                <?php
                
                $post_type =  'legends';
                $taxonomy  =  'urban_legends';

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
                                    
                                    foreach ($terms as $category) {
                                        $categories[] = $category->name;
                                        $categories_slug = $category->slug;
                                    
                                    }  //end foreach   

                                    $categories = implode(', ', $categories);

                                ?>
                           
                            <div class="my-item">
                                            
                                <figure class="post_thumbnail">
                                        <a href="<?php echo  esc_url ( get_the_permalink() ); ?>">
                                            <?php 
                                                if ( has_post_thumbnail() ){
                                                    echo get_the_post_thumbnail(get_the_ID(), "large" , array( 'class' => 'books-thumbnails' ) );
                                                }
                                            ?>
                                        </a>
                                        <div class="legends_title_wrapper">
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
                                </figure>
                             </div>
                            
                <?php   } // if terms 
                        }//emd of while
                    }//end main if
                        wp_reset_postdata();
                    ?>
            
            </div>
            <div class="read-more-wrapper d-flex justify-content-center">
              <a href="<?php echo get_post_type_archive_link( 'legends' ); ?>"> <?php _e( 'READ MORE' ); ?> </a>
           </div>
        </div>
    </div>

    <script>
       $('.urban-legends.owl-carousel').owlCarousel({
            loop:true,
            // center:true,
            margin:30,
            nav:true,
            dots: false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:2
                }
            }
        });
    
    </script>