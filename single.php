<?php 
	get_header();
	$post_single_layout = vapier_post_sidebar();
	$vapier_settings = vapier_global_settings();
?>
	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'templates/content-single/content', $post_single_layout);
		endwhile;
	?>
<?php
get_footer();