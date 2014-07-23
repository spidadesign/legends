<?php
  /* Template Name: Fleet New */
  get_header();
?>

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
<section id="body">
  <div class=" container relv">
    <article>
      <?php
        $page_title = get_post_meta($post->ID, 'h2-title', $single = true);
        if($page_title !== '');
        if(!empty( $page_title )):
      ?>
        <h2><?php echo $page_title ?></h2>
      <?php endif; ?>
    </article>
    <div class="fleet">
      <div class="row forget-me">
      <?php
        $args = array('post_type'=>'fleet', 'posts_per_page' => -1);
        $loop = new WP_Query( $args );
        //echo "<pre>"; print_r($loop); echo "</pre>";
        $count = 1;
        while ( $loop->have_posts() ) : $loop->the_post();
          $custom = get_post_custom(get_the_ID());
          $image_url = gallery_first_image();
          if($count % 3 === 1):
        ?>
          </div><div class="row">
            <a href="<?php the_permalink(); ?>">
            <div class="single-car">
            <img src="<?php echo $image_url; ?>" alt="<?php the_title();?>" />
            <span class="content"><?php echo the_title(); ?></span>
          </div>
          </a>
      <?php else: ?>
         <a href="<?php the_permalink(); ?>">
            <div class="single-car">
            <img src="<?php echo $image_url; ?>" alt="<?php the_title();?>" />
            <span class="content"><?php echo the_title(); ?></span>
          </div>
          </a>
          <?php endif; ?>

    <?php
      $count++;
      endwhile;
    ?>
    </div>
    </div>
  </div>
</section>
<script>$('.fleet-thumb a').click(function(){return false;});</script>
<?php get_footer(); ?>
