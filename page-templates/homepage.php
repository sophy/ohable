<?php
/*
 * Template Name: Front Page Template
 */

use Ohable\Inc\Classes\Ohable_Homepage_Display;

$homepage = new Ohable_Homepage_Display();

get_header();
?>
<main id="primary" class="site-main">
    <div class="homepage-full">
        <div class="hp-latest-posts">
        <?php $homepage->the_latest_posts() ?>
        </div>
    
        <div class="hp-cats-posts">
            <?php $homepage->render_categoris_posts() ?>
        </div>
    
    </div>
</main>
<?php
get_footer();
