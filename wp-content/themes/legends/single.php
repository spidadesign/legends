<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>
<div class="clearfix banner"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/banner.jpg" alt=""> </div>
</section>
<section id="body" class="sevice-pages">
  <div class="container">
    <div class="row-fluid clearfix">
      <div class="span3 sidebar">
        <div class=" nav widget">
          <?php wp_nav_menu( array('menu' => 'ServicesMenu', 'container' => 'false', 'menu_class' => 'navi')); ?>
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
      <div class="span8">
        <article>
          <?php /*?><h1 class="title"><?php the_title();?></h1><?php */?>
          <?php // while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'content', get_post_format() ); ?>
          <?php // twentythirteen_post_nav(); ?>
          <?php // comments_template(); ?>
          <?php // endwhile; ?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); // the loop ?>
          <?php the_content(); ?>
          <?php 
		  	foreach((get_the_category()) as $category) {
				$my_category_id = $category->cat_ID;
				}
		   ?>
          <?php endwhile; endif; ?>
        </article>
      </div>
      <div class="clear"></div>
      <div class="caroxel row-fluid">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <?php 
				//$temp = $wp_query;
				//$wp_fleet_query= null;
				//$wp_fleet_query= new WP_Query();
				$wp_query->query(array('cat'=> $my_category_id, 'post_type' => 'fleet', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'));
				$counter = 0;
				$count = $wp_query->post_count; 
				$calss_name = 'left';
				while ($wp_query->have_posts()) : $wp_query->the_post();
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
                  <a class="more" href="<?php echo site_url(); ?>/fleets/#<?php echo $post->post_name; ?>">learn more</a> </div>
                <div class="pull-right img relv"> <?php /*?><span  class="off-slogn"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></span><?php */?> <?php echo get_the_post_thumbnail($page->ID, 'full'); ?> </div>
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
