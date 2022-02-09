<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package braithwaiteProd
 */

namespace WP_Rig\WP_Rig;

if ( ! braithwaiteProd()->is_primary_sidebar_active() ) {
	return;
}

braithwaiteProd()->print_styles( 'braithwaiteProd-sidebar', 'braithwaiteProd-widgets' );

?>
<aside id="secondary" class="primary-sidebar widget-area">
	<h2 class="screen-reader-text"><?php esc_attr_e( 'Asides', 'braithwaiteProd' ); ?></h2>
	<?php braithwaiteProd()->display_primary_sidebar(); ?>
</aside><!-- #secondary -->
