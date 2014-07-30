<?php
/**
* Template Name: Services Round Trips
*
*/

get_header(); ?>

<div class="clearfix banner">
  <?php

		$banner = get_the_post_thumbnail($post->ID, 'full', array('class' => 'page-banner'));

        if(!empty($banner)){
            echo $banner;
      ?>
      <div class="bx-overlay">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fade.png">
	</div>
        <?php } else {?>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-banner.jpg" alt="">
   <div class="bx-overlay">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/fade.png">
	</div>
  <?php } ?>
  <div class="pageCaption">
    <div>
      <h1>
        <?php the_title();?>
      </h1>
    </div>
  </div>
</div>

</section>
<section id="body" class="sevice-pages">
  <div class="container">
    <div class="row-fluid clearfix">
      <div class="span4 sidebar">
        <div class=" nav widget">
          <?php wp_nav_menu( array('menu' => 'ServicesMenu', 'container' => 'false', 'menu_class' => 'navi')); ?>
        </div>
        <div class="services widget">
        <a target="_blank" href="https://reserve.legendslimousine.com/WebJobsApp/Job_FromTo.jsp">
          <div class="coupan"> <span class="georg">make an</span><br>
            Online<br>
            Reservation<br>
            <span class="georg">– or –</span><br>
            Get a Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/limo.png" alt=""> </div>
          </a>
        </div>
      </div>
      <div class="span7">
        <article>
          <?php
				$page_title = get_post_meta($post->ID, 'h2-title', $single = true);
				if($page_title !== '');
				if(!empty( $page_title )) {?>
          		<h2><?php echo $page_title ?></h2>
          <?php } ?>
		  <?php if (have_posts()) : while (have_posts()) : the_post(); // the loop ?>
          <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </article>
      </div>
      <div class="clear"></div>
      <?php
					$temp = $wp_query;
					$wp_fleet_query= null;
					$wp_fleet_query= new WP_Query();
					$wp_fleet_query->query(array('post_type' => 'fleet', 'orderby' => 'date', 'order' => 'DESC','cat'=>'13','showposts'=>'-1'));
					$counter = 0;
					$count = $wp_fleet_query->post_count;
					$calss_name = 'left';
				?>
      <?php if(!empty ( $count ) ){ ?>
      <div class="caroxel row-fluid">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <?php
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
											 	if(!empty( $passe)) {
												 echo $passe;
												 }
												 else {}
											?>
                  </span><br>
                  <a class="more" href="<?php echo site_url(); ?>/fleets">learn more</a> </div>
                <div class="pull-right img relv">
                  <?php /*?><span  class="off-slogn"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></span><?php */?>
                    <?php
                        $car_img = gallery_first_image();
                        if(!empty( $car_img )) {
                         echo "<img src='{$car_img}'>";
                         } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/car1.png" alt="">
                  <?php }?>
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
      <?php } else {} ?>
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
