<?php
/**
 * The header for our theme
 *
 * @subpackage blue Master
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viephport" content="width=device-width, initial-scale=1">
	<?php php_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'php_body_open' ) ) {
    php_body_open();
} else {
    do_action( 'php_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'blue-master' ); ?></a>

<div class="header-box">
	<div id="header">
		<div class="row m-0">
			<div class="offset-lg-1 offset-md-1 col-lg-3 col-md-5 col-8">
				<div class="logo">
					<?php if ( has_custom_logo() ) : ?>
	            		<?php the_custom_logo(); ?>
		            <?php endif; ?>
	              	<?php $blog_info = get_bloginfo( 'name' ); ?>
		                <?php if ( ! empty( $blog_info ) ) : ?>
		                  	<?php if ( is_front_page() && is_home() ) : ?>
		                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                  	<?php else : ?>
	                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	                  		<?php endif; ?>
		                <?php endif; ?>
		                <?php
	                  		$description = get_bloginfo( 'description', 'display' );
		                  	if ( $description || is_customize_preview() ) :
		                ?>
	                  	<p class="site-description">
	                    	<?php echo esc_attr($description); ?>
	                  	</p>
	              	<?php endif; ?>
			    </div>
			</div>
			<div class="col-lg-8 col-md-6 col-4 p-0">
				<div class="header-clip">
					<div class="menu-section">
						<div class="container">
							<div class="toggle-menu responsive-menu">
					            <button onclick="blue_master_open()" role="tab" class="mobiletoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','blue-master'); ?></span></button>
					        </div>
							<div id="sidelong-menu" class="nav sidenav">
				                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'blue-master' ); ?>">
				                  	<?php
					                    php_nav_menu( array( 
											'theme_location' => 'primary',
											'container_class' => 'main-menu-navigation clearfix' ,
											'menu_class' => 'clearfix',
											'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
											'fallback_cb' => 'php_page_menu',
					                    ) ); 
				                  	?>
				                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="blue_master_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','blue-master'); ?></span></a>
				                </nav>
				            </div>
				        </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>