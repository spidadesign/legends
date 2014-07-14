<?php
/**
* Template Name: Contact Us
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
      <div class="span4 sidebar pull-right">
        <h2 class="subtitle blue text-center uppdercase">questions</h2>
        <div class="services widget"> <?php echo do_shortcode( '[contact-form-7 id="89" title="Contact"]') ?> </div>
        <div class="clear"></div>
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

	$(function ()

		{ $(".tltip").tooltip();

		$('.table span').click(function(e) {
			$(this).toggleClass('selected');
			$(this).parent().siblings().find('span').removeClass('selected');
		});

	});
  </script>
<?php get_footer(); ?>
