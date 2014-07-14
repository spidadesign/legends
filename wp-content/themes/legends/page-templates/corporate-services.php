<?php
/**
* Template Name: Corporate Services
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
          <?php wp_nav_menu( array('menu' => 'CorporateServicesMenu', 'container' => 'false', 'menu_class' => 'navi')); ?>
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
      </div>
      <div class="clear"></div>
    </div>
  </div>
</section>
<div class="ft-push"></div>
</div>
<?php get_footer(); ?>
