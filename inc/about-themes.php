<?php
//about theme info
add_action( 'admin_menu', 'skt_butcher_lite_abouttheme' );
function skt_butcher_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-butcher-lite'), esc_html__('About Theme', 'skt-butcher-lite'), 'edit_theme_options', 'skt_butcher_lite_guide', 'skt_butcher_lite_mostrar_guide');   
} 
//guidline for about theme
function skt_butcher_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-butcher-lite'); ?>
		   </div>
          <p><?php esc_html_e('SKT Butcher Lite. WordPress theme can be used for Butcher Shops, Meat Stores, Steakhouses, Poultry Farms, Meat Delivery Services, Food Supply Businesses and Grocery Stores. It is responsive mobile friendly and WooCommerce compatible. Has call to action and is SEO friendly. Easy to edit with Elementor.','skt-butcher-lite'); ?></p>
          <a href="<?php echo esc_url(SKT_BUTCHER_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="<?php esc_attr_e('Free Vs Pro', 'skt-butcher-lite'); ?>" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_BUTCHER_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-butcher-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_BUTCHER_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-butcher-lite'); ?></a> | 
				<a href="<?php echo esc_url(SKT_BUTCHER_LITE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-butcher-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_BUTCHER_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="<?php esc_attr_e('SKT Themes', 'skt-butcher-lite'); ?>" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>