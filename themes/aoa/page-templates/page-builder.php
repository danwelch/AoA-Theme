<?php
/**
 * Template Name: Page Builder
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title"
		content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body>
<?php while ( have_posts() ) : the_post(); ?>

	<?php 
		if( have_rows('page_builder') ) : 
			while( have_rows('page_builder') ) : the_row();
				get_template_part( 'page-builder/' . get_row_layout() );
			endwhile;
		endif; 
	?>

<?php endwhile; // end of the loop. ?>
<?php wp_footer(); ?>
</body>
</html>
