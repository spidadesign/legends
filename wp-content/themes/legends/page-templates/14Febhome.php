<?php
/**
* Template Name: Homepage
*
*/

get_header(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-easing-1.3.js"></script>
<script>
$(document).ready(function(){
	$('#layerslider').layerSlider({
		thumbnailNavigation : null,
		hoverPrevNext : false,
		responsive : false,
		responsiveUnder : 960,
		sublayerContainer : 960,
		autoStart    : false
		
	});
});	
</script>

<div id="layerslider-container-fw" class="clearfix">
  <div id="layerslider"  class="ls-container ls-fullwidth">
    <div class="ls-inner" >
      <?php $wp_query->query(array('post_type' => 'homegslider', 'orderby' => 'date', 'order' => 'DESC'));
					while ($wp_query->have_posts()) : $wp_query->the_post();
					?>
      <div class="ls-layer"> <?php echo get_the_post_thumbnail($page->ID, 'full', array('class' => 'ls-bg')); ?>
        <?php /*?><h5 class="ls-s-1 text">
          <div class="slide-desc">
            <h2><span>for</span>
              <?php the_title();?>
            </h2>
            <p>
              <?php 
									$slide_url = get_post_meta($post->ID, 'slide-url', $single = true);
									if($slide_url !== '');				
							?>
              <?php if(!empty( $slide_url )) {?>
              <a href="<?php echo $slide_url ?>" title="<?php echo $slide_url ?>" class="more">leran more</a>
              <?php } ?>
            </p>
            <div class="offer">
              <?php the_excerpt();?>
            </div>
          </div>
        </h5><?php */?>
      </div>
      <?php endwhile; ?>
    </div>
    <div class="ls-shadow"></div>
  </div>
</div>
</section>
<section id="body">
  <div class="container" style="margin-top:-30px;">
    <div class="services row-fluid clearfix">
      <div class="span4">
        <div class="col">
          <div class="coupan"> <span class="georg">make an</span><br>
            Online<br>
            Reservation<br>
            <span class="georg">– or –</span><br>
            Get a Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/limo.png" alt=""> </div>
          <a class="more" target="_blank" href="https://reserve.legendslimousine.com/WebJobsApp/Job_FromTo.jsp">Click here</a> </div>
      </div>
      <div class="span4">
        <div class="col">
          <div class="overwrap">
            <div class="coupan online overflowhide">
              <div class="swipe-container">
                <div class="swiper-wrapper">
                  <?php if ( is_active_sidebar( 'online-special' ) ) : ?>
                  <?php dynamic_sidebar( 'online-special' ); ?>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
          <div class="pagenation"></div>
        </div>
      </div>
      <div class="span4 pull-right">
        <div class="col login">
          <div class="coupan">
            <p><img src="<?php echo get_template_directory_uri(); ?>/assets/img/customer-login.png"></p>
            <div class="form"> 
              <script>
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
										</script>
              <form name="loginform" id="loginform" method="post" action="https://reserve.legendslimousine.com/WebJobsApp/Login">
                <label>username</label>
                <input type="text" name="txtUserName" id="txtUserName" value="" maxlength="50" class="rndTextBox">
                <label>password</label>
                <input type="password" name="txtPassword" id="txtPassword" maxlength="30" class="rndTextBox">
                <input type="submit" class="more" name="login" value="Login">
              </form>
            </div>
          </div>
          <a href="https://reserve.legendslimousine.com/WebJobsApp/ForgotPassword.jsp">Forgot Password</a> <br>
          or <a href="https://reserve.legendslimousine.com/WebJobsApp/User_Login">New User</a> </div>
      </div>
    </div>
    <div class="row-fluid">
      <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/L-divider.png" alt=""></p>
      <article class="clearfix">
        <?php $post = get_post(2);?>
        <?php echo wpautop($post->post_content);?> </article>
     
      <p>&nbsp;</p>
      <div class="caroxel row-fluid ">
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
								if(($counter % 2) == 0)
									{
									  $calss_name = 'right pull-right';
									}
									else
									{
									  $calss_name = 'left';
									}
								?>
              <div class="span5 <?php echo $calss_name ?>">
                <div class="pull-left txt">
                  <?php the_title();?>
                  <span>
                  <?php 
												$passe = get_post_meta($post->ID, 'passenger', $single = true);
												if($passe!== '');				
											?>
                  <?php if(!empty( $passe)) {?>
                  <?php echo $passe ?>
                  <?php } ?>
                  </span><br>
                  <a class="more" href="<?php echo site_url(); ?>/fleets">learn more</a> </div>
                <div class="pull-right img relv">
                	<?php /*?><span class="off-slogn"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></span> <?php */?>
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
  </div>
</section>
<div class="ft-push"></div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/swip-2.0.min.js"></script> 
<script>
		  var mySwiper = new Swiper('.swiper-container',{
			pagination: '.pagination',
			paginationClickable: true
		  })
		   var mySwiper = new Swiper('.swipe-container',{
			pagination: '.pagenation',
			paginationClickable: true
		  })
  </script>
<?php get_footer(); ?>
