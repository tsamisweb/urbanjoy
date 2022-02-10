<?php

  get_header(); 

?>


<div class="container container--narrow page-section videos-category-wrapper">
    <div class="row">
        
     <div class="main-article-categories archive-books">
         <h1><span><?php _e( 'Urban videos' ); ?></span></h1>
    </div>

<?php

  while(have_posts()) {
    the_post(); ?>
 
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

                    <h2 class="headline  headline--post-title"><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h2>

                    <div class="generic-content">
                        <?php the_excerpt(); ?>
                    </div>

                    <?php get_template_part('template-parts/single-tags'); ?>

                    <div class="metabox">
                        <p><span class="post-author"><?php the_author_posts_link(); ?></span>  <span class="post-date"> <?php the_time('j F Y'); ?></span> </p>
                    </div>
                </div>
            </div>
        </div>
  
  <?php }  ?>
  
  </div>
</div>


<div class="container paginate-wrapper d-flex justify-content-center">
   <div class="row">
          <?php

            echo paginate_links(array(
            'prev_text'    => __('<i class="fa fa-long-arrow-left" aria-hidden="true"></i>'),
            'next_text'    => __('<i class="fa fa-long-arrow-right" aria-hidden="true"></i>')
            ));
          
          ?>
   </div>
</div>

<?php get_footer();

?>