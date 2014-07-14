<?php
  /* Template Name: Fleet New */
  get_header();
?>
<style>
  /*.page-id-88 h2{
      margin: auto;
      max-width: 575px;
  }
  .fleet{
    margin-top: 25px;
    padding-top: 30px;
  }
  .fleet .row{
    margin-left: 20px;
    margin-left: 20px;
    border-top: 1px solid;
    padding-top: 30px;
    margin-bottom: 20px;
  }
  .row.forget-me{
    display:none;
  }
   a:hover .single-car{
    color: #0092ff;
  }
  .single-car{
    float:left;
    width:30%;
    padding-left: 10px;
    padding-right: 10px;
    display:inline-block;
  }
  .single-car img{
   max-width: 280px;
  }
a .single-car {
  color:#acacac;
  font-size: 18px;
  font-family: 'Montserrat', Helvetica, sans-serif;
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
	.single-car{
		float:none;
		width:auto;
		padding: 0;
		display:block;
	}
	.fleet .row{
		margin:auto;
		border:none;
		padding:0;

	}
	.fleet .content{
		display:block;
	}
	.fleet{
		text-align: center;
	}
}
@media only screen and (min-device-width : 320px) and (max-device-width : 568px) {
	.single-car{
		float:none;
		width:auto;
		padding: 0;
		display:block;
	}
	.fleet .row{
		margin:auto;
		border:none;
		padding:0;

	}
	.fleet .content{
		display:block;
	}
	.fleet{
		text-align: center;
	}
}*/
</style>
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
          if($count % 3 === 1):
        ?>
          </div><div class="row">
            <a href="<?php the_permalink(); ?>">
            <div class="single-car">
            <!--<?php the_post_thumbnail(); ?>-->
            <img src="http://www.spidadesign.us/legends/wp-content/uploads/2013/11/2013-lincoln-mkt-town-car-390x270.jpg">
            <span class="content"><?php echo the_title(); ?></span>
          </div>
          </a>
      <?php else: ?>
         <a href="<?php the_permalink(); ?>">
            <div class="single-car">
            <!--<?php the_post_thumbnail(); ?>-->
            <img src="http://www.spidadesign.us/legends/wp-content/uploads/2013/11/2013-lincoln-mkt-town-car-390x270.jpg">
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
