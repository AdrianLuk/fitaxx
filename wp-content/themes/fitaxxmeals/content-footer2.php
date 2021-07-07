<?php //Text and nav centered
 if( get_theme_mod( 'wpforge_footer_position','center' ) == 'center') { ?>
        <div class="ftnav small-12 large-12 cell">
            <?php if ( has_nav_menu('secondary')  ) : // Only display menu in the footer if one is assigned ?>
                <?php wp_nav_menu( array(
                    'theme_location' => 'secondary',
                    'container'       => 'div',
                    'container_class' => 'table mbl',
                    'menu_class' => 'menu navcntr',
                    'fallback_cb' => false
                ) ); ?>
            <?php endif; ?>
            <?php if ( has_nav_menu( 'social' ) ) : ?>
	<div class="social_wrap small-12 large-12 text-center">
		<nav id="social-navigation" class="social-navigation" role="navigation">
			<?php wp_nav_menu( array(
					'theme_location' => 'social',
                    'container'       => 'div',
                    'container_class' => 'table mbl',
                    'menu_class' => 'menu navcntr',
					'depth'          => 1,
					'link_before'    => '<span class="screen-reader-text">',
					'link_after'     => '</span>',
				) ); ?>
		</nav><!-- .social-navigation -->
	</div><!-- .social_wrap -->
<?php endif; ?>
        </div><!-- .columns -->    
        <div id="ftxt" class="site-info small-12 large-12 cell text-center">
            <p>
				&copy; <?=date("Y");?> Roundaxx Fitness. All rights reserved.
			</p>
            <?php } // end if ?>
        </div><!-- .site-info -->