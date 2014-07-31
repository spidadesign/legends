<?php
/**
* Template Name: Homepage
*
*/

get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-easing-1.3.js"></script>

 <!-- include these files for making live start -->
<script language="JavaScript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsiveslides.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/themes.css">
     <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/plugins/bxslider/jquery.bxslider.css">
     <script language="JavaScript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/bxslider/jquery.bxslider.min.js"></script>

 <!-- include these files for making live end -->


<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  responsive: true,
	  pager: false,
	  preloadImages: 'all',
	  controls: false,
	  //auto: true,
  });
   $('.coupons').bxSlider({});
});

</script>

<div class="slider">
	<ul class="bxslider">
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-home.jpg">
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider-home.jpg">
		</li>
	</ul>
	<div class="bx-overlay">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fade.png">
	</div>
</div>
</ul>
</section>
<section id="body">
	<div class="container">
    	<div class="services row-fluid clearfix">
			<div class="span4">
				<div class="col">
				<a class="serv-link" target="_blank" href="https://reserve.legendslimousine.com/WebJobsApp/Job_FromTo.jsp">
					<div class="coupan make-reservation">
						<span class="georg">make an</span><br>
						Online<br>
						Reservation<br>
						<span class="georg">– or –</span><br>
						Get a Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/limo.png" alt=""> </div>
						</a>
					</div>
				</div>
				<div class="span4">
					<div class="col">
						<div class="overwrap">
							<div class="coupan online overflowhide">
								<p class="mobile-box">Mobile Apps</p>
								<a href="https://itunes.apple.com/us/app/legends-mobile/id662740430?mt=8" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/iphone.png">
								</a>
								<a href="https://play.google.com/store/apps/details?id=com.legendslimousine.mobile.android&hl=en" target="_blank">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/nexus.png">
								</a>
							</div>
						</div>
						<div class="pagenation"></div>
					</div>
				</div>
				<div class="span4">
					<div class="col login">
						<div class="coupan">
							<p>Customer Login</p>
							<div class="form">
								<form name="loginform" id="loginform" method="post" action="https://reserve.legendslimousine.com/WebJobsApp/Login">
									<label>username</label>
									<input type="text" name="txtUserName" id="txtUserName" value="" maxlength="50" class="rndTextBox">
									<label>password</label>
									<input type="password" name="txtPassword" id="txtPassword" maxlength="30" class="rndTextBox">
									<input type="submit" class="more" name="login" value="Login">
								</form>
							</div>
						</div>
						<a href="https://reserve.legendslimousine.com/WebJobsApp/ForgotPassword.jsp" style="float: left; left: 40px;">Forgot Password</a>
						<a href="https://reserve.legendslimousine.com/WebJobsApp/User_Login" style="float: right; right: 30px;">Register</a> </div>
					</div>
				</div>
				<!-- start of coupon slider-->
				<div class="legend-box"><!-- Legend-Box Starts -->
				<div class="legend-left">
						<img class="wifi-home" src="<?php echo get_template_directory_uri(); ?>/assets/img/wifi-home.png" >
						<a href="http://www.spidadesign.us/legends/car-service-baby-seats/" class="more">
							<img class="baby-home" src="<?php echo get_template_directory_uri(); ?>/assets/img/baby-home.png" >
						</a>
					</div>
				<div class="legend-right">
						<div class="rslides_container">
							<ul class="rslides" id="slidertwo">
							<?php
								$args = array('post_type' => 'cctor_coupon');
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									$custom = get_post_custom(get_the_ID());
									//echo "<pre>"; print_r($custom); echo "</pre>";

								?>
								<div class='cctor_coupon_container cctor_alignnone'>
									<div class='cctor_coupon'>
										<div class='cctor_coupon_content'>
								        		<h3 class='cctor_left'><?php echo $custom['cctor_amount'][0]; ?></h3>

												<div class='cctor_right'>
							        				<div class="large-txt">
							        					<?php echo $custom['coupon-top'][0]; ?>
													</div>
													<div class="small-txt">
														<?php echo $custom['coupon-bottom'][0]; ?>
													</div>
												</div>
									        </div>
									    </div>
									</div>

								<?php endwhile; ?>

								<?php //echo do_shortcode('[coupon couponid="loop" category="Coupon Cat"  coupon_align="cctor_alignnone" name="Coupon Loop"]'); ?>
							</ul>
						</div>
					</div>
				</div><!-- Legend-Box Ends -->
				<!-- end of coupon slider-->
				<div class="container main-text">
					<div class="row-fluid">
						<p class="text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/l-divider.png" alt="">
						</p>
						<article class="clearfix">
							<?php $post = get_post(2);?>
							<?php echo wpautop($post->post_content);?>
						</article>
						<?php /*<div class="caroxel row-fluid ">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
									<?php
										$temp = $wp_query;
										$wp_fleet_query= null;
										$wp_fleet_query= new WP_Query();
										$wp_fleet_query->query(array('post_type' => 'fleet', 'orderby' => 'date', 'order' => 'DESC','showposts'=>'16'));
										$counter = 0;
										$count = $wp_fleet_query->post_count;
										$calss_name = 'left';
										while ($wp_fleet_query->have_posts()) : $wp_fleet_query->the_post();
											$counter ++;
											if(($counter % 2) == 0):
											 // $calss_name = 'right pull-right';
											else:
											 // $calss_name = 'left';
											endif;
										?>
											<div class="span6">
												<div class="pull-left txt">
													<?php the_title();?>
													<span>
													<?php
														$passe = get_post_meta($post->ID, 'passenger', $single = true);
														if($passe!== '');
														if(!empty( $passe)) {

														?>
														<?php echo $passe ?>
														<?php } ?>
														</span><br>
														<a class="more" href="<?php echo site_url(); ?>/fleets">learn more</a> </div>
														<div class="pull-right img relv">
															<?php echo get_the_post_thumbnail($page->ID, 'full'); ?>
														</div>
														<div class="clear"></div>
														</div>
														<?php
															if((($counter % 2) == 0) && ($counter < $count)) { echo '</div> <div class="swiper-slide">'; }
															endwhile; ?>
															</div>
															</div>
															<div class="pagination"></div>
															</div>
															</div>
															</div>
															*/?>
					</div>
				</div>
			</div>
		</section>
		<div class="ft-push"></div>
	</div>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/swip-2.0.min.js"></script>
<script>


	  var mySwiper = new Swiper('.swiper-container',{
		pagination: '.pagination',
		paginationClickable: true
	  });
	   var mySwiper = new Swiper('.swipe-container',{
		pagination: '.pagenation',
		paginationClickable: true
	  });
	  function checkUserPwd(){
		if(document.getElementById("txtUserName").value==""){
			alert("Please enter user name.");
			return false;
		}
		if(document.getElementById("txtPassword").value==""){
			alert("Please enter password.");
			return false;
		}
	}
	 $(document).ready(function(){
	 	$("#slidertwo").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            maxwidth: 800,
            namespace: "large-btns"
          });
        });
  </script>
<?php get_footer(); ?>
