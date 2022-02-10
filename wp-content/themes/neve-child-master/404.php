<?php
/**
 * 404 template.
 *
 * @package Neve
 */

get_header();
?>


<div class="container error4o4-wrapper">
    <div class="row">
           <div class="col-12">
               <h1><?php _e('404'); ?></h1>
               <p><?php _e('Page not found'); ?></p>
               <a href="<?php echo esc_url(get_home_url()); ?>"><?php _e('return Homepage'); ?></a>
           </div>        
    </div>

</div>


<?php 

get_footer();
