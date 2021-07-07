<?php
// With multiple options
$carbs = new WP_Query( array(
    'post_type' => 'carbs',
    'post_status' => 'publish',
    'order' => 'ASC' ));

$meats = new WP_Query( array(
    'post_type' => 'meats',
    'post_status' => 'publish',
    'order' => 'ASC' ));

//Single options only
$veg = new WP_Query( array(
    'post_type' => 'vegetables',
    'post_status' => 'publish',
    'order' => 'ASC' ));
    
$snack = new WP_Query( array(
    'post_type' => 'snacks',
    'post_status' => 'publish',
    'order' => 'ASC' ));
    
$vegan = new WP_Query( array(
    'post_type' => 'vegan',
    'post_status' => 'publish',
    'order' => 'ASC' ));
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php wpforge_article_schema('CreativeWork'); ?>>
    <div class="entry-content-page">
        <div class="plans">
        <div class="plan">
            <h2 class="subhead-caps">Carbs</h2>
            <?php while ( $carbs->have_posts() ) : $carbs->the_post(); ?>
            <p class="cap-head"><?php echo get_the_title(); ?></p>
            <ul class="variation">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('variations') ):
                // loop through the rows of data
                while ( have_rows('variations') ) : the_row(); ?>
                
                    <li class="var"><?php // display a sub field value
                    the_sub_field('variation'); 
                    ?></li>
            <?php endwhile; ?> 
            </ul>
            <?php else :
                // no rows found
            endif;
            ?>
        <?php endwhile; ?>
           
    </div>
    <div class="plan">
        <h2 class="subhead-caps">Meat</h2>
            <?php while ( $meats->have_posts() ) : $meats->the_post(); ?>
            <p class="cap-head"><?php echo get_the_title(); ?></p>
            <ul class="variation">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('variations') ):
                // loop through the rows of data
                while ( have_rows('variations') ) : the_row(); ?>
                
                    <li class="var"><?php // display a sub field value
                    the_sub_field('variation'); 
                    ?></li>
            <?php endwhile; ?> 
            </ul>
            <?php else :
                // no rows found
            endif;
            ?>
        <?php endwhile; ?>
           
    </div>
    <div class="plan">
        <h2 class="subhead-caps">Vegetables</h2>
        <div class="box3">
        <?php while ( $veg->have_posts() ) : $veg->the_post(); ?>
            <p class="var"><?php echo get_the_title(); ?></p>
        <?php endwhile; ?>
        </div>
    </div>
    <div class="plan">
        <h2 class="subhead-caps">Vegan</h2>
        <div class="box3">
        <?php while ( $vegan->have_posts() ) : $vegan->the_post(); ?>
            <p class="var"><?php echo get_the_title(); ?></p>
        <?php endwhile; ?>
        </div>
    </div>
    <div class="plan">
        <h2 class="subhead-caps">Snacks</h2>
        <div class="box3">
        <?php while ( $snack->have_posts() ) : $snack->the_post(); ?>
            <p class="var"><?php echo get_the_title(); ?></p>
        <?php endwhile; ?>
        </div>
    </div>
    </div>
</article>
<?php wp_reset_postdata(); ?>