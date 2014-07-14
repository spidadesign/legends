<?php
/**
* Template Name: Customer Survey
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
          <?php wp_nav_menu( array('menu' => 'CustomerServicesMenu', 'container' => 'false', 'menu_class' => 'navi')); ?>
        </div>
        <div class="services widget">
          <div class="coupan"> <span class="georg">make an</span><br>
            Online<br>
            Reservation<br>
            <span class="georg">– or –</span><br>
            Get a Quote <img src="<?php echo get_template_directory_uri(); ?>/assets/img/limo.png" alt=""> </div>
          <p class="text-center"><a class="more" target="_blank" href="https://reserve.legendslimousine.com/WebJobsApp/Job_FromTo.jsp">Click here</a></p>
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
        <h2 class="subtitle text-center uppdercase">Ratings</h2>
        <table class="rati-scale" width="100%" >
          <tr>
            <td>Poor</td>
            <td>Fair</td>
            <td>Good</td>
            <td>Excellent</td>
          </tr>
          <tr class="even">
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/img/poor-rate.png" alt=""></td>
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fair.png" alt=""></td>
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/img/good.png"></td>
            <td><img src="<?php echo get_template_directory_uri(); ?>/assets/img/excelent.png" alt=""></td>
          </tr>
        </table>
        <h2 class="subtitle text-center uppdercase">Comprehensive Client Experience</h2>
        <?php echo do_shortcode( '[contact-form-7 id="172" title="Customer Survey"]' ) ?>
        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>
<div class="ft-push"></div>
</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.raty.js"></script>
<script type="text/javascript">
    jQuery(function() {
      jQuery.fn.raty.defaults.path = '<?php echo get_template_directory_uri(); ?>/assets/img';
		jQuery('.rate').raty({
			number: 4,
			scoreName: function(){
                    return jQuery(this).attr('id');
                }
		});
    });
	</script>
<?php get_footer(); ?>
