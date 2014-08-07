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
        <div class="row">
          <div class="wifi-img">
            <img class="wifi-enabled" src="<?php echo get_template_directory_uri(); ?>/assets/img/wifi-enabled.png">
            </div>
        </div>
      <?php endif; ?>
    </article>
    <div class="fleet">
      <div class="row forget-me">
      <?php
        $args = array('post_type'=>'fleet', 'posts_per_page' => -1);
        $loop = new WP_Query( $args );
        $count = 1;
        $sliderCount = 0;
        $images = get_posts( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          $single_car_args = array (
              'post_type'   => 'attachment',
              'numberposts' => -1,
              'post_parent' => get_the_ID(),
              'order' => 'ASC',
              'orderby' => 'menu_order',
              'post_mime_type' => 'image'
            );
          $single_img_gall = get_posts( $single_car_args );
          $custom = get_post_custom(get_the_ID());
          $image_url = gallery_first_image();
          if($count % 3 === 1):
        ?>
          </div>
          <div class="row">
            <a class="single-modal" href="#single-car-<?php echo $count ?>" data-toggle="modal" data-href="<?php echo get_permalink();?>">
              <div class="single-car">
                <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" />
                <span class="content">
                   <span><?php echo the_title();?></span>
                    <?php if(get_field('has_wifi')): ?>
                          <img class="wifi-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/vifi.png">
                  <?php endif; ?>
                  <span class="view-interior">View Interior and Details ></span>
                </span>
            </div>
          </a>
      <?php else: ?>

         <a class="single-modal" href="#single-car-<?php echo $count ?>" data-toggle="modal" data-href="<?php echo get_permalink();?>">
              <div class="single-car">
                <img src="<?php echo $image_url; ?>" alt="<?php the_title(); ?>" />
                <span class="content">
                   <span><?php echo the_title();?></span>
                    <?php if(get_field('has_wifi')): ?>
                          <img class="wifi-sm" src="<?php echo get_template_directory_uri(); ?>/assets/img/vifi.png">
                  <?php endif; ?>
                  <span class="view-interior">View Interior and Details ></span>
                </span>
            </div>
          </a>
          <?php endif; ?>

                 <!-- Modal -->
          <div id="single-car-<?php echo $count ?>" class="modal hide fade container car-modal" tabindex="-1" role="dialog" aria-labelledby="<?php the_title();?>" aria-hidden="true">
            <button type="button" class="btn btn-modal-close" data-dismiss="modal" aria-hidden="true">Close</button>
            <div class="clear"></div>
            <div class="single-car-fleet">
               <div class="modal-header">
                  <span class="title"><?php the_title();?></span>
                  <img class="wifi-enabled" src="<?php echo get_template_directory_uri(); ?>/assets/img/wifi-enabled.png">
              </div>
              <?php if($custom['book-vehicle'][0]): ?>
                <a type="button" class="book-vehicle" href="<?php echo $custom['book-vehicle'][0] ?>" target="_blank">Book This Vehicle</a>
              <?php else: ?>
                <a type="button" class="book-vehicle phone" href="tel:+18885343637">Call 1-888-534-3637 To Reserve</a>
              <?php endif; ?>
            </div>
            <div class="modal-body">
            <?php
              if ( empty($single_img_gall) ):
                  // no attachments here
              else:
            ?>
              <div class='small-gallery'>
                <ul id="vehicle_<?php echo $sliderCount;?>">
                  <?php foreach ( $single_img_gall as $single_img ): ?>
                    <li><img src="<?php echo $single_img->guid;?>" class="img-responsive"></li>
                  <?php endforeach; unset($single_img);?>
                </ul>
                <div id="bx-pager_<?php echo $sliderCount;?>" class="bx_pager_modal">
                  <?php
                    $pagerCount = 0;
                    foreach ( $single_img_gall as $single_img ):
                  ?>
                  <a data-slide-index="<?php echo $pagerCount; ?>" class="small-slide-fleet">
                    <img src="<?php echo $single_img->guid;?>">
                  </a>
                <?php $pagerCount++; endforeach; ?>
              </div>
              </div>
              <div class="row content">
                <?php the_content( ); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
           <!-- Modal -->
    <?php
      unset($single_img_gall);
      $count++;
      $sliderCount++;
      endwhile;
      echo "<script>var sliderCount = ".$sliderCount."</script>"; ?>
    </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
