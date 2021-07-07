<?php
$featmeal = new WP_Query( array(
    'post_type' => 'featmeals',
    'post_status' => 'publish',
    'order' => 'ASC' ));
    
$counter = 1; // Start the counter
$grids = 2; // Grids per row
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php wpforge_article_schema('CreativeWork'); ?>>
    <div class="feat-container">
        <?php while ( $featmeal->have_posts() ) : $featmeal->the_post(); if($counter != $grids) : ?>
        <div class="griditemleft">
        	<div class="postimage">
            	    <?php the_post_thumbnail(); ?>
            	</div><!-- .postimage -->
            	<h2 class="subhead-caps">
            		<?php the_title(); ?>
            	</h2>
            	<p><?php the_content(); ?></p>
        </div><!-- .griditemleft -->
        <?php elseif($counter == $grids) : // Show the right hand side column ?>
            <div class="griditemright">
                <h2 class="subhead-caps">
            		<?php the_title(); ?>
            	</h2>
            	<p><?php the_content();?></p>
            	<div class="postimage">
            	    <?php the_post_thumbnail(); ?>
            	</div><!-- .postimage -->
            </div><!-- .griditemright -->
        
        <div class="clear"></div>
        <?php
        $counter = 0;
        endif;
        $counter++;
        endwhile;
        wp_reset_postdata();
        ?>  

    </div>
</article>