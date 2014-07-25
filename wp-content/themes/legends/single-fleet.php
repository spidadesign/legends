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
				//$stuff = get_post_galleries_images( $post->ID ); 
				//echo "<pre>"; print_r($stuff); echo "</pre>";
				$args = array (
					'post_type'   => 'attachment',
			        'numberposts' => -1,
			        'post_parent' => $post->ID,
			        'order' => 'ASC',
			        'orderby' => 'menu_order',
			        'post_mime_type' => 'image'
					);
				$images = get_posts( $args );
				//echo "<pre>"; print_r($images); echo "</pre>";
				if ( empty($images) ):
					// no attachments here
				else:
				?>
			<div class='small-gallery'>
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-carousel">
								<ul>
									<?php foreach ( $images as $image ): ?>

										<li>
											<a href="#">
												<?php
													$imgSmall = wp_get_attachment_image_src( $image->ID, 'thumbnail' );
													$imgLarge = wp_get_attachment_image_src( $image->ID, 'large' );
													echo '<img src="'.$imgSmall[0].'" data-large="'.$imgLarge[0].'">';
												?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
			</div>
			<div class="row content">
				<?php the_content( ); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>


