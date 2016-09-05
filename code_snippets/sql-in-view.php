<?php
the_content();

// Get child posts
$query = "SELECT * FROM $wpdb->posts
            WHERE post_parent = ".$post->ID."
            AND post_type = 'page'
            ORDER BY menu_order";

$children = $wpdb->get_results($query, "OBJECT");

// If we have results, output each page
if ($children !== false && !empty($children)) { ?>
    <div class="portfolios">
        <div class="row portfolios__group">
            <?php foreach ($children as $childPage) : ?>
                <a class="portfolio__item" href="<?php echo get_permalink($childPage->ID); ?>">
                    <?php echo $childPage->post_title; ?>
                </a>
            <?php } ?>
        </div>
    </div>
<?php } ?>
