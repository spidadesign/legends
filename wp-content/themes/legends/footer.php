   <footer id="footer">
    <div class="newsletter">
        <div class="container clearfix">
            <div class="pull-left span6 des">Signup for our newsletter to receive updates on discounts and more...</div>
            <div class="pull-right span3 email">
                <?php mailchimpSF_signup_form(); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="logo" align="center"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-bottom.png" alt=""></div>
        <div class="row-fluid">
            <?php wp_nav_menu( array('menu' => 'Footer', 'container' => 'false', 'menu_class' => 'navi f-links')); ?>
        </div>
        <div class="f-line row-fluid">
            <div class="span6" id="address">88A 4th Avenue Brooklyn, New York  11217</div>
            <div class="span6" id="copyr">&copy; <?php echo date('Y'); ?> Legends Limousine Web Design By <a href="http://spidadesign.com">Spida Design</a></div>
        </div>
   </div>
</footer>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/elastislide/js/jquery.tmpl.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/elastislide/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/elastislide/js/jquery.elastislide.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/plugins/elastislide/js/gallery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/tinynav.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.arctext.js"></script>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script language="javascript" type="text/javascript">
		jQuery(function () {
				jQuery('.sidebar .navi').tinyNav({
					active: 'current_page_item',
				});
			});
		var $word1		= $('#arc-wrapper').find('h3').hide();
		var $word2		= $('#arc1-wrapper').find('h3').hide();
		var $word3		= $('#arc2-wrapper').find('h3').hide();
		var $word4		= $('#arc3-wrapper').find('h3').hide();
		
		google.load('webfont','1');
		google.setOnLoadCallback(function() {
			WebFont.load({
				google		: {
					families	: ['Montserrat','Concert One']
				},
				fontactive	: function(fontFamily, fontDescription) {
					init();
				},
				fontinactive	: function(fontFamily, fontDescription) {
					init();
				}
			});
		});
		function init() {
			jQueryword1.show().arctext({radius: 108, dir: 1});
			jQueryword2.show().arctext({radius: 108, dir: 1});
			jQueryword3.show().arctext({radius: 108, dir: 1});
			jQueryword4.show().arctext({radius: 108, dir: 1});
		};
	</script>
	<?php wp_footer(); ?>
</body>
</html>