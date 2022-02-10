<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "wrapper" div and all content after.
 *
 * @package Neve
 * @since   1.0.0
 */

do_action( 'neve_before_primary_end' );
?>
</main><!--/.neve-main-->


<div class="sidebar-wrapper"><!-- sidebar menu desktop-->
  <div class="sidebar-container">
       <div class="close-wrapper">
        <a href="#">
         <svg fill='none' width="25px" stroke='#fff' stroke-width='5' stroke-dashoffset='30' stroke-dasharray='0' stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><line x1="15" y1="15" x2="85" y2="85" /> <line x1="85" y1="15" x2="15" y2="85" /></svg>       </div>
        </a>
       <div class="menu-wrapper">
        <?php
          
            fetch_sidebar_menu('Sidebar menu');

          ?>
        </div>
        <div class="sidebar-social-wrapper">
           <i class="fa fa-facebook"></i>
           <i class="fa fa-instagram"></i>
        </div>
  </div>
</div><!-- end of sidebar menu -->



<div class="sidebar-wrapper-mobile"><!-- mobile menu -->
  <div class="sidebar-container-mobile">
       <div class="close-wrapper">
        <a href="#">
         <svg fill='none' width="25px" stroke='#fff' stroke-width='5' stroke-dashoffset='30' stroke-dasharray='0' stroke-linecap='round' stroke-linejoin='round' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><line x1="15" y1="15" x2="85" y2="85" /> <line x1="85" y1="15" x2="15" y2="85" /></svg>       </div>
        </a>
       <div class="mobile-menu-wrapper">
        <?php
        
        fetch_mobile_menu('Mobile menu');

        ?>
        </div>
        <div class="sidebar-social-wrapper">
           <i class="fa fa-facebook"></i>
           <i class="fa fa-instagram"></i>
        </div>
  </div>
</div><!-- end of mobile menu -->

<?php do_action( 'neve_after_primary' ); ?>

<?php
if ( apply_filters( 'neve_filter_toggle_content_parts', true, 'footer' ) === true ) {
	neve_before_footer_trigger();
	do_action( 'neve_do_footer' );
	neve_after_footer_trigger();
}
?>

</div><!--/.wrapper-->
<?php wp_footer(); ?>


</body>

</html>
