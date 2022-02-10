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
<?php

	global $post;
	$post_id = $post->ID;//post id

	$mytags = get_the_tags($post_id);//get the tag of spesific post

	// foreach( $mytags as $mytag) {
	// 	     $tag_name =  $mytag->name;
	// 	     $tag_id   =  $mytag->term_id;
	// }

?>
	<div class="<?php echo esc_attr( $container_class ); ?> single-post-container single book">
		<div class="row">
			
			<?php// do_action( 'neve_do_sidebar', 'single-post', 'left' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<article id="post-<?php echo esc_attr( get_the_ID() ); ?>"
						class="<?php echo esc_attr( join( ' ', get_post_class( 'nv-single-post-wrap col' ) ) ); ?>">
			
                          <div class="article-top-content">

						   <?php 

								$categories_books = get_the_terms( $post->ID , 'books_categories' );

								foreach ( $categories_books as $category_book ) {
									      $category_book->name;
								}

								$category = get_the_category();
								$parent = get_cat_name($category[0]->category_parent);
								$link   = get_category_link($category[0]->category_parent);

								if (!empty($parent)) {
									echo '<div class="main-article-categories single-videos"><a href=' . esc_url( $link ) .' >'. '<h1><span>' . $parent . '</span></h1>' .'</a></div>';
								} else {
									echo '<div class="main-article-categories single-books ' . $category_book->name . '"><a href=' . esc_url( $link ) .' >'. '<h1><span>' . $category_book->name .'</span></h1>' .'</a></div>';
								}

							?>

							<?php the_post_thumbnail(); ?>

							<div class="article-info">
                                <div class="article-meta-a">
									<h2><?php the_title() ;?></h2> 			
								</div>
                                <div class="article-main-content">
								     <?php the_content(); ?> 
						
							    </div>
								<div class="article-meta-c">
                                    <p class="article-category"><?php the_category(); ?></p>
                                    <p class="excerpt-article"><?php the_excerpt(); ?> </p>
									<a class="article-category" href="<?php echo esc_url(get_the_author_link());  ?>"><?php the_author(); ?></a> <span class="separator"></span><p class="date-article"><?php the_time('F j, Y'); ?></p>
								</div>
								<div class="sharethis-inline-share-buttons"></div>
							 </div>
							
						  </div>

						  
					<?php endwhile; else : ?> 

								<p><?php _e( 'No Posts To Display.' ); ?></p>

					<?php endif; ?> 
					<?php
						$post_tags = get_the_tags();//get the tags for every post 

						if ($post_tags) { ?>
							<div class="single-tag-wrapper test"><span><?php _e('Tags') ?></span>
						<?php 	foreach($post_tags as $tag) {
								$tag_name = $tag->name;
								$tag_id   = $tag->term_id;
								$tag_slug = $tag->slug; ?>

									<a class="tags-archive" href="<?php echo get_tag_link( $tag_id ) ?> " ><span class="tags-dot"></span><?php  echo '#'. $tag_name  ?></a>
								<?php } //foreach ?>
						   </div>
						<?php } //if 
					?> 
                    <hr>
					<?php get_template_part('template-parts/books-related-posts'); ?>
					<hr>
					<?php get_template_part('template-parts/popular-posts'); ?>
			</article>
		</div>
	</div>
<?php
get_footer();
