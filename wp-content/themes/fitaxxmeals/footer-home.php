            </div><!-- .grid-x .grid-margin-x -->
	   </section><!-- end .content-wrap -->
    </div><!-- end .content_container -->
	<?php
        if ( ! is_404() )
        get_sidebar( 'footer' );
    ?>
    <div id="contact-info">
        <div class="contact-map">
            <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
        </div>
        <div class="contact-form">
            <h2 class="white-caps">Contact Us</h2>
            <p class="whtxt">Have any questions or comments about Fit Axx Meals? Send us a quick message and we’ll get back to you as soon as we can.</p>
            <?php echo do_shortcode( '[contact-form-7 id="248" title="Home Contact"]' ); ?>
        </div>
    </div>
    <div class="footer_container">
    	<footer id="footer" itemtype="http://schema.org/WPFooter" itemscope="itemscope" class="footer_wrap" role="contentinfo">
            <div class="grid-x grid-padding-x">
                <?php get_template_part( 'content', 'footer2' ); ?>
            	<?php /* get_template_part( 'content', 'social_menu' ); */?>
            </div><!-- grid-x grid-padding-x -->
    	</footer><!-- .row -->
    </div><!-- end #footer_container -->
<?php if( get_theme_mod( 'wpforge_mobile_display' ) == 'yes' || get_theme_mod( 'wpforge_nav_select' ) == 'offcanvas') { ?>
        </div><!-- end off-canvas-content -->
</div><!-- end off-canvas-wrapper -->
<?php } // end if ?>
<?php wp_footer(); ?>
</body>
</html>