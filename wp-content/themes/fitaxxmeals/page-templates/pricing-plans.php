<?php
// With multiple options
$packages = new WP_Query( array(
    'post_type' => 'packages',
    'post_status' => 'publish',
    'order' => 'ASC' ));

$goals = new WP_Query( array(
    'post_type' => 'goals',
    'post_status' => 'publish',
    'order' => 'ASC' ));
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php wpforge_article_schema('CreativeWork'); ?>>
    <div class="entry-content-page">
        <div class="plans">
            <div class="plan">
                <h2 class="subhead-caps">Meal Plans</h2>
                <table id="pricing">
                <?php while ( $packages->have_posts() ) : $packages->the_post(); ?>
                    <tr><td><?php echo get_the_title(); ?></td><td class="right">$<?php the_field('price'); ?></td></tr>
                <?php endwhile; ?>
                </table>
            </div>
            <div class="plan">
                <h2 class="subhead-caps">Meal Portions</h2>
            <table id="pricing">
                <?php while ( $goals->have_posts() ) : $goals->the_post(); ?>
                    <tr>
                        <td><?php echo get_the_title(); ?></td>
                        <td class="right">$<?php the_field('portion_price'); ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>
            <p>4oz. and 6oz. meals are included in our meal plan pricing.</p>
            </div>
        </div>
    </div>
</article>
<?php wp_reset_postdata(); ?>