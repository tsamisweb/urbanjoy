<?php

get_header();
// pageBanner(array(
//   'title' => get_the_archive_title(),
//   'subtitle' => get_the_archive_description()
// ));
?>

<div class="container container--narrow page-section">
    <div class="row">
<?php
  $category = get_the_category();
  $parent = get_cat_name($category[0]->category_parent);
  $link   = get_category_link($category[0]->category_parent);

 
  $user_id =  get_current_user_id();
  $author_obj = get_user_by('id', $user_id);
 
  
  echo '<div class="main-article-categories"><a href=' . esc_url( $author_obj->user_url ) .' >'. '<h1><span>' . $author_obj->display_name . '</span></h1>' .'</a><span></span></div>';
  

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
                            <?php the_category( get_the_ID());  ?>  

                            
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
  
  <?php } ?>
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