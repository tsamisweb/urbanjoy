<?php

get_header();

?>

<div class="container page-section">
    <div class="row">
        <?php
        $category = get_the_category();

        $category_current = get_queried_object();
        $category_current->term_id;

        $category_current->name;
        $link_category_current  = get_category_link( $category_current );

        
        $parent = get_cat_name($category[0]->category_parent);
        $link   = get_category_link($category[0]->category_parent);



        if (!empty($parent)) {
            echo '<div class="main-article-categories '. $parent .'"><a href=' . esc_url( $link ) .' >'. '<h1><span>'.  $parent . '</span><h1>'. '</a></div>';

        } else if(empty($parent)) {
            echo '<div class="main-article-categories '. $category_current->name .'"><a href=' . esc_url( $link_category_current ) .' >'. '<h1><span>'.  $category_current->name . '</span><h1>'.'</a></div>';
        }

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
                        <?php  the_category( get_the_ID());  ?>  

                        
                        <h2 class="headline headline--post-title">
                            <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
                        </h2>
                        
                        <div class="generic-content">
                            <?php the_excerpt(); ?>
                        </div>

                        <?php get_template_part('template-parts/single-tags'); ?>

                        <div class="metabox">
                            <p><span class="post-author"><?php the_author_posts_link(); ?></span>  <span class="post-date"><?php the_time('j F Y'); ?></span></p>
                        </div>

                    </div>
                </div>
            </div>
  
        <?php  }  ?>
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