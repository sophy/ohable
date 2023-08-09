<?php
/**
 * The Ohable_Homepage_Display class
 *
 * @link http://url.com
 * @since: 1.0.0
 */

namespace Ohable\Inc\Classes;

class Ohable_Homepage_Display
{
    /**
     * Categories IDs to show in homepage.
     *
     * @var array
     */
    protected $categories = [];

    /**
     * Posts per categories
     *
     * @var integer
     */
    protected $postPerCategory = 5;

    /**
     * Limit latest posts
     *
     * @var integer
     */
    protected $limit_latest_post = 20;

    public function __construct()
    {
        $this->categories = $this->loadCategories();
    }

    public function the_latest_posts()
    {
        global $post;

        ?>
            
	<?php
        $recent_posts = wp_get_recent_posts([
            'numberposts' => $this->limit_latest_post, // Number of recent posts thumbnails to display
            'post_status' => 'publish', // Show only the published posts
        ], OBJECT);

        ?>
        <h3 class="hp-latest-title"><?php _e('Latest', 'ohable') ?></h3>
        <div class="hp-latest-post-wrap">
        <?php
        foreach($recent_posts as $post) :
            setup_postdata($post);
            ?>
            <h2 class="hp-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	        <?php

        endforeach;

        wp_reset_postdata();
        ?>
        </div>
        <?php
    }

    public function render_categoris_posts()
    {
        $catsWithPosts = $this->loadCatsWithPosts();

        foreach($catsWithPosts as $cat_id => $cp) {

            $cat = $cp['cat'];
            $category_link = get_category_link($cat_id);
            ?>
            <div class="list-post-by-category">
                <h3 class="cat-title"><a href="<?php echo esc_url($category_link); ?>"><?php echo esc_html($cat->name) ?></a></h3>
                <div class="list-posts"><?php $this->render($cp['posts']) ?></div>
            </div>
            <?php
        }

    }

    public function render($posts = [])
    {
        global $post;
        if (count($posts) > 0) :
            ?>
            
            <?php
            $isFirst = true;
            foreach ($posts as $post) :
                setup_postdata($post);
                ?>
                
                <?php
                if ($isFirst):
                    $isFirst = false;
                    $this->firstPost();
                else:
                    ?>
                    <h2 class="hp-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php
                endif;
                ?>
                
                <?php
            endforeach;
        wp_reset_postdata();
        ?>
            </ul>
            <?php

        endif;
    }

    /**
     * Load categorie and posts
     *
     * @return array
     */
    public function loadCatsWithPosts(): array
    {
        $data = [];

        foreach($this->categories as $cat_id) {
            $data[$cat_id]['cat'] = get_category($cat_id);
            $data[$cat_id]['posts'] = get_posts([
                'numberposts' => $this->postPerCategory,
                'category' => $cat_id,
                'post_status' => 'publish'
            ]);
        }

        return $data;
    }

    public function firstPost()
    {
        if (has_post_thumbnail()) : ?>
        <div class="hp-first-post">
            <div class="hp-f-post-thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('homepage-thumb'); ?>
            </a>
            </div>
            <h2 class="first-post"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        </div>
        <?php endif;
    }

    /**
     * Load categories from Theme Customizer.
     *
     * @return void
     */
    protected function loadCategories(): array
    {
        return [25,24,21,7];
    }
}
