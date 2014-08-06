<?php
	/* Template Name: Fleet */
	get_header();
	$custom = get_post_custom(get_the_ID());
	//echo "<pre>"; print_r($custom); echo "</pre>";

?>
	<div id="pagebanner" class="clearfix banner">
		<img src="http://www.spidadesign.us/legends/wp-content/themes/legends/assets/img/page-banner.jpg" alt="">
		 <div class="bx-overlay">
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fade.png">
	</div>
	</div>
</section>
<section id="body">
	<div class=" container relv">
		<a type="button" class="back-to-fleet" href="<?php echo site_url();?>/car-service-nyc/">Back to Fleet</a>
		<hr>
		 <img class="wifi-enabled" src="<?php echo get_template_directory_uri(); ?>/assets/img/wifi-enabled.png">
		<div class="single-car-fleet">
			<span class="title">
				<?php echo the_title(); ?>
			</span>
			<?php if($custom['book-vehicle'][0]): ?>
				<a type="button" class="book-vehicle" href="<?php echo $custom['book-vehicle'][0] ?>" target="_blank">Book This Vehicle</a>
			<?php else: ?>
				<a type="button" class="book-vehicle phone" href="tel:+18885343637">Call 1-888-534-3637 To Reserve</a>
			<?php endif; ?>
			<?php
				$args = array (
					'post_type'   => 'attachment',
			        'numberposts' => -1,
			        'post_parent' => $post->ID,
			        'order' => 'ASC',
			        'orderby' => 'menu_order',
			        'post_mime_type' => 'image'
					);
				$images = get_posts( $args );
				if ( empty($images) ):
					// no attachments here
				else:
				?>
				<div class='small-gallery'>
					<ul class="vehicle">
  					<?php foreach ( $images as $image ): ?>
					<li>
						<?php
							$imgLarge = wp_get_attachment_image_src( $image->ID, 'large' );
							echo '<img src="'.$imgLarge[0].'">';
						?>
					</li>
				<?php endforeach; unset($image);?>
			</ul>
			<div id="bx-pager">
				<?php
					$pagerCount = 0;
					foreach ( $images as $image ):
				 	$imgSmall = wp_get_attachment_image_src( $image->ID, 'thumbnail' );
				 ?>
				 <a data-slide-index="<?php echo $pagerCount; ?>">
				 	<img src="<?php echo $imgSmall[0];?>">
				</a>
				<?php $pagerCount++; endforeach; ?>
			</div>
			<div class="row content">
				<?php the_content( ); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>
<script>

</script>
<?php get_footer(); ?>


