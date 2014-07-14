<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>


<div class="clearfix banner">
  <?php
		
		$banner = get_the_post_thumbnail($post->ID, 'full', array('class' => 'page-banner'));
		
        if(!empty($banner)){
            echo $banner;
            } 
        else {?>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-banner.jpg" alt="">
  <?php } ?>
  <div class="pageCaption">
    	<div>
        	<h1><?php the_title();?></h1>
        </div>
    </div>
</div>
</section>
<section id="body" class="sevice-pages">
  <div class="container">
    <div class="row-fluid clearfix">
      <div class="span12">
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
    </div>
  </div>
</section>
<div class="ft-push"></div>
</div>

<?php get_footer(); ?>

