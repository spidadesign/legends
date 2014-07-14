<?php
	/* Template Name: Fleet */
	get_header();
?>
<style>

	.back-to-fleet{
		padding: 10px 20px 10px 20px;
		color:#acacac;
		background-color: #464646;
		font-family: 'Montserrat', Helvetica, sans-serif;
	}
	.single-car-fleet{
		text-align: center;
		max-width: 560px;
		margin: auto;
	}
	.small-gallery img{
		border-radius: 50px;
		margin-top:10px;
		margin-left: 10px;
	}
	.single-car-fleet span.title{
		max-width:350px;
		font-family: 'Montserrat', Helvetica, sans-serif;
		color: #0084e6;
		padding-bottom:35px;
	}
	.single-car-fleet img{
	`margin-top:35px;
	}
	.es-carousel ul li.selected a, .es-carousel ul li a{
		border:none;
	}
	.rg-image img{
		border-radius: 0;
	}
	.es-carousel-wrapper{
		background: none;
		border-radius: 0;
		box-shadow: none;
	}
	.rg-image-nav-prev, .rg-image-nav-next{
		display:none;
	}
	.es-carousel ul{
		margin: auto !important;
	}
	.single-car-fleet .content li{
		list-style: none;
	}
	.single-car-fleet .content{
		margin:auto;
	}
	@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : landscape){
	}
	@media only screen and (min-device-width : 320px) and (max-device-width : 568px) and (orientation : portrait){
		.es-carousel ul li a img {
			margin-left: auto;
		}
		.small-gallery img{
			margin-left: auto;
		}
	}
	@media only screen and (min-device-width : 320px) and (max-device-width : 568px){
		.clearfix.banner{
			margin-bottom: 20px;
		}
	}
</style>
	<div id="pagebanner" class="clearfix banner">
		<img src="http://www.spidadesign.us/legends/wp-content/themes/legends/assets/img/page-banner.jpg" alt="">
		 <div class="bx-overlay">
			 <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fade.png">
	</div>
	</div>
</section>
<section id="body">
	<div class=" container relv">
		<a type="button" class="back-to-fleet" href="<?php echo site_url();?>/fleets">Back to Fleet</a>
		<hr>
		<div class="single-car-fleet">
			<span class="title">
				<?php echo the_title(); ?>
			</span>
			<?php
				$images =& get_children( array (
					'post_parent'    => $post->ID,
					'post_type'      => 'attachment',
					'post_mime_type' => 'image'
				));

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
									<?php foreach ( $images as $attachment_id => $attachment ): ?>
										<li>
											<a href="#">
												<?php
													$imgSmall = wp_get_attachment_image_src( $attachment_id, 'thumbnail' );
													$imgLarge = wp_get_attachment_image_src( $attachment_id, 'large' );
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
