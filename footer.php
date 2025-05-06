	</div><!-- #main -->
		<?php 
			global $vapier_page_id;
			$vapier_settings = vapier_global_settings();
			$footer_style = vapier_get_config('footer_style','');
			$footer_style = (get_post_meta( $vapier_page_id,'page_footer_style', true )) ? get_post_meta( $vapier_page_id, 'page_footer_style', true ) : $footer_style ;
			$header_style = vapier_get_config('header_style', ''); 
			$header_style  = (get_post_meta( $vapier_page_id, 'page_header_style', true )) ? get_post_meta($vapier_page_id, 'page_header_style', true ) : $header_style ;
		?>
		<?php if($footer_style && (get_post($footer_style)) && in_array( 'elementor/elementor.php', apply_filters('active_plugins', get_option( 'active_plugins' )))){ ?>
			<?php $elementor_instance = Elementor\Plugin::instance(); ?>
			<footer id="bwp-footer" class="bwp-footer <?php echo esc_attr( get_post($footer_style)->post_name ); ?>">
				<?php echo vapier_render_footer($footer_style);	?>
			</footer>
		<?php }else{
			vapier_copyright();
		}?>
	</div><!-- #page -->
	<div class="search-overlay">	
		<div class="container wrapper-search">
			<div class="search-top">
				<h2><?php echo esc_html__("what are you looking for?","vapier"); ?></h2>
				<div class="close-search"><?php echo esc_html__("close","vapier"); ?><i class="icon_close"></i></div>
			</div>
			<?php vapier_search_form_product(); ?>		
		</div>	
	</div>
	<div class="bwp-quick-view">
	</div>	
	<?php 
		$back_active = vapier_get_config('back_active');
		if($back_active && $back_active == 1):
	?>
	<div class="back-top">
		<i class="arrow_carrot-up"></i>
	</div>
	<?php endif;?>
	<?php if((isset($vapier_settings['show-verify']) && $vapier_settings['show-verify'])) : ?>		
		<div class="js-verify-popup verify-popup">
			<div class="close-overlay"></div>
			<div class="content-verify">
				<div class="verify-info">
					<?php if((isset($vapier_settings['verify-title']) && $vapier_settings['verify-title'])) : ?>	
						<h2 class="title"><?php echo esc_html($vapier_settings['verify-title']); ?></h2>
					<?php endif; ?>
					<?php if((isset($vapier_settings['verify-content']) && $vapier_settings['verify-content'])) : ?>
						<div class="info"><?php echo esc_html($vapier_settings['verify-content']); ?></div>
					<?php endif; ?>
					<?php if((isset($vapier_settings['verify-btn-allow']) && $vapier_settings['verify-btn-allow']) || (isset($vapier_settings['verify-btn-not-allow']) && $vapier_settings['verify-btn-not-allow'])) : ?>
					<div class="group-button">
						<?php if((isset($vapier_settings['verify-btn-allow']) && $vapier_settings['verify-btn-allow'])) : ?>
							<button class="button-allow"><?php echo esc_html($vapier_settings['verify-btn-allow']); ?></button>
						<?php endif; ?>
						<?php if((isset($vapier_settings['verify-btn-not-allow']) && $vapier_settings['verify-btn-not-allow'])) : ?>
							<button class="button-not-allow"><?php echo esc_html($vapier_settings['verify-btn-not-allow']); ?></button>
						<?php endif; ?>
					</div>
					<?php endif; ?>
				</div>
				<?php if((isset($vapier_settings['verify-alert']) && $vapier_settings['verify-alert'])) : ?>
				<div class="alert-verify hidden">
					<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1em" height="1em" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M505.403 406.394 295.389 58.102c-8.274-13.721-23.367-22.245-39.39-22.245s-31.116 8.524-39.391 22.246L6.595 406.394c-8.551 14.182-8.804 31.95-.661 46.37 8.145 14.42 23.491 23.378 40.051 23.378h420.028c16.56 0 31.907-8.958 40.052-23.379 8.143-14.421 7.89-32.189-.662-46.369zm-28.364 29.978a12.684 12.684 0 0 1-11.026 6.436H45.985a12.68 12.68 0 0 1-11.025-6.435 12.683 12.683 0 0 1 .181-12.765L245.156 75.316A12.732 12.732 0 0 1 256 69.192c4.41 0 8.565 2.347 10.843 6.124l210.013 348.292a12.677 12.677 0 0 1 .183 12.764z" fill="#000000" data-original="#000000" class=""></path><path d="M256.154 173.005c-12.68 0-22.576 6.804-22.576 18.866 0 36.802 4.329 89.686 4.329 126.489.001 9.587 8.352 13.607 18.248 13.607 7.422 0 17.937-4.02 17.937-13.607 0-36.802 4.329-89.686 4.329-126.489 0-12.061-10.205-18.866-22.267-18.866zM256.465 353.306c-13.607 0-23.814 10.824-23.814 23.814 0 12.68 10.206 23.814 23.814 23.814 12.68 0 23.505-11.134 23.505-23.814 0-12.99-10.826-23.814-23.505-23.814z" fill="#000000" data-original="#000000" class=""></path></g></svg><?php echo esc_html($vapier_settings['verify-alert']); ?>
				</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif;  ?>
	<?php if((isset($vapier_settings['show-newletter']) && $vapier_settings['show-newletter']) && is_active_sidebar('newletter-popup-form') && function_exists('vapier_popup_newsletter')) : ?>		
		<?php vapier_popup_newsletter(); ?>
	<?php endif;  ?>
	<?php if( function_exists('is_product') && is_product() ) : ?>
		<?php vapier_gallery_product(); ?>
	<?php endif;  ?>
	<?php wp_footer(); ?>
</body>
</html>