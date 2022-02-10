<?php
/**
 * Author:          Andrei Baicus <andrei@themeisle.com>
 * Created on:      28/08/2018
 *
 * @package Neve
 */

$container_class = apply_filters( 'neve_container_class_filter', 'container', 'single-post' );

get_header();


?>  
	<div class="<?php echo esc_attr( $container_class ); ?> single-post-container">
		<div class="row">
			
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php echo esc_attr( get_the_ID() ); ?>"
						class="<?php echo esc_attr( join( ' ', get_post_class( 'nv-single-post-wrap col' ) ) ); ?>">
			
                          <div class="article-top-content">

						  <?php 

								$category = get_the_category();
								//$parent = get_cat_name($category[0]->category_parent);
								$link   = get_category_link($category[0]->category_parent);

								echo '<div class="main-article-categories '. $category[0]->cat_name .'">' . '<h1><span>' . $category[0]->cat_name .  '</h1></span></div>';
							?>

							<?php the_post_thumbnail(); ?>

							<div class="article-info">
                                <div class="article-meta-a">
									<h2 class="article-title"><?php the_title() ;?></h2> 			
								</div>
								<div class="article-meta-b">
									<div class="article-author-date">
										<a class="article-category" href="<?php echo esc_url(get_the_author_link());  ?>">
											<?php the_author(); ?>
										</a> 
										<span class="separator"></span><span class="date-article"><?php the_time('F j, Y'); ?></span>
									</div>
									<div class="social-article">
										<div class="sharethis-inline-share-buttons"></div>
									</div>
								</div>
                                <div class="article-main-content">
								     <?php the_content(); ?> 
						
							    </div>

								<div class="article-meta-c">
                                    <p class="excerpt-article"><?php the_excerpt(); ?> </p>
								</div>


								<div class="social-article">
										<div class="sharethis-inline-share-buttons"></div>
								</div>

								
							
							 </div>
							
						    </div>

						  
					<?php endwhile; else : ?> 

								<p><?php _e( 'No Posts To Display.' ); ?></p>

					<?php endif; ?> 
					<?php get_template_part('template-parts/single-tags'); ?>
                    <hr>
					<?php get_template_part('template-parts/related-posts'); ?>

					<?php get_template_part('template-parts/popular-posts'); ?>
			</article>
		</div>
	</div>
	<?php /*<section class="pagination-single next-prev-wrapper">
        <div class="row">
            <div class="col text-center">
                <div class="block-27 pagination-wrapper">
                 <span class="next-project"><?php next_post_link('%link','<i class="fa fa-long-arrow-left" aria-hidden="true"></i> Read previous'); ?></span>
				 <span class="previous-project"><?php previous_post_link('%link',' Read next <i class="fa fa-long-arrow-right" aria-hidden="true"></i>'); ?> </span>  
                </div>
            </div>
        </div>
    </section> <!-- .section -->*/ ?>
<?php
get_footer();
