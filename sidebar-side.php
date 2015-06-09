<?php
/**
 * The Sidebar on the side, containing the main widget areas.
 */
?>
<div id="sidebar-side" class="widget-area clearfix" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar-1' ); ?>

	<?php else : ?>

		<!-- Create some custom HTML or call the_widget().  It's up to you. -->
		
	<?php endif; ?>

</div><!-- #sidebar .widget-area -->