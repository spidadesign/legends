<?php
  /* Template Name: Fleet */
  get_header();
?>
<div id="pagebanner" class="clearfix banner">
  <?php
    $banner = get_the_post_thumbnail($post->ID, 'full', array('class' => 'page-banner'));
    if(!empty($banner)):
      echo $banner;
    else:
  ?>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-banner.jpg" alt="">
  <?php endif; ?>
  <div class="pageCaption"><h1><?php the_title();?></h1></div>
</div>
</section>
<section id="body" style="min-height:350px;">
  <div class=" container relv">
    <article>
    	<?php
				$page_title = get_post_meta($post->ID, 'h2-title', $single = true);
				if($page_title !== '');
				if(!empty( $page_title )) {?>
          		<h2><?php echo $page_title ?></h2>
          <?php } ?>
    </article>
    <div class="gallery-section clearfix row-fluid">
      <?php $wp_query->query(array('post_type' => 'fleet', 'orderby' => 'menu_order', 'order' => 'asc','showposts' => '-1'));
					$idslider = 0;
					while ($wp_query->have_posts()) : $wp_query->the_post();
          $args = array(
            'post_type' => 'attachment',
            'orderby' => 'menu_order',
            'order'     => 'asc',
            'showposts' => '4',
            'post_status' => null,
            'post_parent' => $post->ID
            );
          $attachments = get_posts( $args );
          if ( $attachments ) { ?>
              <div class="span6 relv each-gallery" id="<?php echo $post->post_name; ?>">
                  <h1 class="post-title text-center">
                    <?php the_title();?>
                    <span>
                      <?php
				                $passe = get_post_meta($post->ID, 'passenger', $single = true);
				                if($passe!== '');
                        if(!empty( $passe)){
                          echo $passe;
                        }
                      ?>
                    </span>
                  </h1>
                  <div class="gallery content">
                    <div class="slideshow-container">
                        <div class="slideshow">
                            <div class="post-logo"></div>
                            <div class="text-post" id="text_<?php echo $idslider;?>">
                              <?php the_excerpt();?>
                            </div>
                          </div>
                      </div>
                      <div id="caption" class="caption-container"></div>
                    </div>
                    <div class="navigation" >
                        <div class="post-text-toggle" id="post_text_<?php echo $idslider;?>"></div>
                          <ul class="thumbs  clearfix">
                            <?php
                              foreach ( $attachments as $attachment ){
                          			echo '<li><a class="thumb relv" name="leaf" href="'.wp_get_attachment_url( $attachment->ID ).'">';
                          			echo wp_get_attachment_image( $attachment->ID, 'medium', false, array('title' => $attachment->post_title) );
                          			//echo '<span class="thumbno">'.$attachment->post_title.'</span>';
                          			echo '</a></li>';
                          		}
  			                     ?>
                        </ul>
                        <?php
                    				$book_now = get_post_meta($post->ID, 'book-vehicle', $single = true);
                    				if($book_now !== '');
                    			?>
                        <?php if(!empty( $book_now )) { ?>
                            <a href="<?php echo $book_now ?>" title="<?php echo $book_now ?>" class="book">book this vehicle</a>
                        <?php
                            } else {
				                      echo '<div class="pleasecall">Please call to book this vehicle</div>';
				                    }
		                  ?>
        </div>
      </div>
      <?php } ?>
      <script>
	 	jQuery(document).ready(function($) {
	  $("#post_text_<?php echo $idslider;?>").hover(function() {
 $("#text_<?php echo $idslider;?>").toggle();
});
});</script>
<?php $idslider++;?>
      <?php endwhile; ?>
    </div>
    <br />
    <br />
  </div>
</section>
<div class="ft-push"></div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/skdslider.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/galleriffic-2.css">
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.galleriffic.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.opacityrollover.js"></script>
<script>
jQuery(document).ready(function(){
jQuery('.each-gallery .slideshow').each(function(i)
{
jQuery(this).attr('id', 'slideshow' + (i ))

});
jQuery('.each-gallery .navigation').each(function(i)
{
jQuery(this).attr('id', 'thumbs' + (i))
});
});
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
// We only want these styles applied when javascript is enabled
$('div.content').css('display', 'block');

$(".each-gallery").each(function(i){
// Initially set opacity on thumbs and add
// additional styling for hover effect on thumbs
var onMouseOutOpacity = 1;
$('#thumbs + i + ul.thumbs li').opacityrollover({
mouseOutOpacity:   onMouseOutOpacity,
mouseOverOpacity:  1.0,
fadeSpeed:         'fast',
exemptionSelector: '.selected'
});

// Initialize Advanced Galleriffic Gallery
var gallery = $('#thumbs'+i).galleriffic({
delay:                     2500,
numThumbs:                 4,
preloadAhead:              4,
enableTopPager:            false,
enableBottomPager:         false,
maxPagesToShow:            4,
imageContainerSel:         '#slideshow'+ i,
controlsContainerSel:      '#controls' + i,
loadingContainerSel:       '#loading' + i,
renderSSControls:          false,
renderNavControls:         false,
playLinkText:              false,
pauseLinkText:             false,
prevLinkText:              false,
nextLinkText:              false,
nextPageLinkText:          false,
prevPageLinkText:          false,
enableHistory:             false,
autoStart:                 false,
syncTransitions:           true,
defaultTransitionDuration: 900,
onSlideChange:             function(prevIndex, nextIndex) {
// 'this' refers to the gallery, which is an extension of $('#thumbs')
this.find('ul.thumbs').children()
.eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
.eq(nextIndex).fadeTo('fast', 1.0);
},
onPageTransitionOut:       function(callback) {
this.fadeTo('fast', 0.0, callback);
},
onPageTransitionIn:        function() {
this.fadeTo('fast', 1.0);
}
});
});




});


</script>

<?php get_footer(); ?>
