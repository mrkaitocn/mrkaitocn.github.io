<?php 
	get_header(); 
	$vapier_settings = vapier_global_settings();
?>
<div class="page-404">
	<div class="content-page-404">
		<div class="title-error">
			<?php if(isset($vapier_settings['title-error']) && $vapier_settings['title-error']){
				echo esc_html($vapier_settings['title-error']);
			}else{
				echo esc_html__('404', 'vapier');
			}?>
		</div>
		<div class="sub-title">
			<?php if(isset($vapier_settings['sub-title']) && $vapier_settings['sub-title']){
				echo esc_html($vapier_settings['sub-title']);
			}else{
				echo esc_html__("Oops! That page can't be found.", "vapier");
			}?>
		</div>
		<div class="sub-error">
			<?php if(isset($vapier_settings['sub-error']) && $vapier_settings['sub-error']){
				echo esc_html($vapier_settings['sub-error']);
			}else{
				echo esc_html__("We're really sorry but we can't seem to find the page you were looking for.", 'vapier');
			}?>
		</div>
		<a class="btn" href="<?php echo esc_url( home_url('/') ); ?>">
			<?php if(isset($vapier_settings['btn-error']) && $vapier_settings['btn-error']){
				echo esc_html($vapier_settings['btn-error']);}
			else{
				echo esc_html__('Back The Homepage', 'vapier');
			}?>
		</a>
	</div>
</div>
<?php
get_footer();