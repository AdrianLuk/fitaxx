<?php
/* Template Name: Thank You Page */

get_header();
?>
<div id="content" class="small-12 large-12 cell" role="main">
    <div class="grid-container text-center thank-you__container">
        <?php if ($_GET['submit'] == "success") : ?>
            <h2 class="text-uppercase thank-you__title">Your order has been sent</h2>
            <p class="thank-you__text">We will send you a confirmation email within 24 hours.</p>
            <p class="thank-you__text">Thank you for choosing Fitaxx Meals!</p>
        <?php else : ?>
            <h2 class="text-uppercase thank-you__title">Your order was unsuccessful</h2>
            <p class="thank-you__text">It looks like something went wrong with your order.</p>
            <p class="thank-you__text">Please go back and try again.</p>
            <a href="<?= get_home_url(); ?>/order" class="thank-you__button text-uppercase">Back</a>
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>