<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Agencyup
 */
?>
<!--==================== AGENCYUP-FOOTER AREA ====================-->
	<!-- Messenger Chat plugin Code 
  <div id="fb-root"></div>

Your Chat plugin code 
<div id="fb-customer-chat" class="fb-customerchat">
</div>
	
	<div class="icon-bar badge badge-pill" style="background-color:#df0a0a">
   <a href="viber://chat?number=639175559545"><i class="fab fa-viber"></i></a>
	</div>
	
	<div class="icon-bartelegram badge badge-pill" style="background-color:#df0a0a">
   <a href="tg://resolve?domain=inplayregister"><i class="fab fa-telegram"></i></a>
   
	</div>

  <div class="icon-messenger badge badge-pill" style="background-color:#df0a0a">
   <a href="https://facebook.com/inplay.tregs"><i class="fab fa-facebook"></i></a>
	</div> -->

  <?php 
  $agencyup_footer_widget_background = get_theme_mod('agencyup_footer_widget_background');
  $agencyup_overlay_footer_widget_control = get_theme_mod('agencyup_overlay_footer_widget_control'); 
   if($agencyup_footer_widget_background != '') { ?>
<footer style="background-image:url('<?php echo esc_url($agencyup_footer_widget_background);?>');">
  <?php } else { ?>
<footer> 
  <?php } ?>
  <div class="overlay" style="background-color: <?php echo esc_attr($agencyup_overlay_footer_widget_control);?>;">
  <!--Start agencyup-footer-widget-area-->
  <?php if ( is_active_sidebar( 'footer_widget_area' ) ) { ?>
  <div class="bs-footer-widget-area">
    <div class="container">
      <div class="row">
        <?php  dynamic_sidebar( 'footer_widget_area' ); ?>
      </div>
    </div>
  </div>
  <?php } ?>
  <!--End agencyup-footer-widget-area-->
  <div class="bs-footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://Inplay.ph/', 'agencyup' ) ); ?>">
					<?php
					/* translators: placeholder replaced with string */
					printf( esc_html__( 'Proudly Powered by %s', 'agencyup' ), 'Inplay' );
					?>
				</a>
				<span class="sep"> | </span>
				<?php
				/* translators: placeholder replaced with string */
				printf( esc_html__( 'All Rights Reserved 2023  %1$s %2$s', 'agencyup' ), '', '' );
				?>		
			</div>
		</div>
        <div class="col-md-6 text-right">
           <?php 
		  $footer_social_icon_enable = get_theme_mod('footer_social_icon_enable','on');
		  if($footer_social_icon_enable !='off')
		  {
		  $agencyup_footer_fb_link = get_theme_mod('agencyup_footer_fb_link');
		  $agencyup_footer_fb_target = get_theme_mod('agencyup_footer_fb_target',1);
		  $agencyup_footer_twt_link = get_theme_mod('agencyup_footer_twt_link');
		  $agencyup_footer_twt_target = get_theme_mod('agencyup_footer_twt_target',1);
		  $agencyup_footer_lnkd_link = get_theme_mod('agencyup_footer_lnkd_link');
		  $agencyup_footer_lnkd_target = get_theme_mod('agencyup_footer_lnkd_target',1);
		  $agencyup_footer_insta_link = get_theme_mod('agencyup_footer_insta_link');
		  $agencyup_footer_insta_target = get_theme_mod('agencyup_footer_insta_target',1);
		  ?>
		  <ul class="bs-social">
			<?php if($agencyup_footer_fb_link !=''){?>
			<li><span class="icon-soci"><a <?php if($agencyup_footer_fb_target) { ?> target="_blank" <?php } ?>href="<?php echo esc_url($agencyup_footer_fb_link); ?>"><i class="fab fa-facebook-f"></i></a></span> </li>
			<?php } if($agencyup_footer_twt_link !=''){ ?>
			<li><span class="icon-soci"><a <?php if($agencyup_footer_twt_target) { ?>target="_blank" <?php } ?>href="<?php echo esc_url($agencyup_footer_twt_link);?>"><i class="fab fa-twitter"></i></a></span></li>
			<?php } if($agencyup_footer_lnkd_link !=''){ ?>
			<li><span class="icon-soci"><a <?php if($agencyup_footer_lnkd_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($agencyup_footer_lnkd_link); ?>"><i class="fab fa-linkedin"></i></a></span></li>
			<?php } 
			if($agencyup_footer_insta_link !=''){ ?>
			<li><span class="icon-soci"><a <?php if($agencyup_footer_insta_target) { ?>target="_blank" <?php } ?> href="<?php echo esc_url($agencyup_footer_insta_link); ?>"><i class="fab fa-instagram"></i></a></span></li>
			<?php } ?>
		  </ul>
		  <?php } ?>
      </div>
      </div>
    </div>
  </div>
  </div>
</footer>
</div>
<!-- Scroll To Top -->
<a href="#" class="bs_upscr"><i class="fas fa-angle-up"></i></a>
<!-- /Scroll To Top -->
<?php wp_footer(); ?>
<style>

.icon-bar {
  z-index: 1;
}
.icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

.icon-bartelegram {
  z-index: 1;
}
.icon-bartelegram {
  position: fixed;
  bottom: 148px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bartelegram a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

.viber {
  color: white;
  border-radius:30px;
}



.icon-messenger {
  z-index: 1;
}
.icon-messenger {
  position: fixed;
  bottom: 0;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-messenger a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

@media (max-width: 786px) {
  .icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}



.viber {
  color: white;
  border-radius:30px;
}
}

@media (max-height: 500px) {
  .icon-bar {
  position: fixed;
  bottom: 60px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}



.viber {
  color: white;
  border-radius:30px;
}

}

</style>


</body>
</html>