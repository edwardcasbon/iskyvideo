<?php
/**
 * Template name: Photos index page
 */
?>

<?php get_header(); ?>

    <section class="content">
        <div class="inner-container">
            <h1><?php the_title(); ?></h1>
            <?php the_content() ?>
            
            <?php
            // Get children pages
            $q = new WP_Query();
            $all_pages = $q->query(array('post_type'=>'page'));
            $children = get_page_children(get_the_ID(), $all_pages);
            // Loop through children pages
            if(count($children)>0){
                echo '<ul class="grid">';
                foreach($children as $child) {
                    echo "<li>";
                        echo '<a href="' . get_permalink($child->ID) . '">';
                            echo "<h2>" . $child->post_title . "</h2>";
                            $gallery = get_post_gallery_images($child);
                            echo "<img src=\"" . $gallery[0] . "\" alt=\"\">";
                        echo "</a>";
                    echo "</li>";
                }
                echo "</ul>";
            }
            // Get title and first attachment
            ?>
        </div>
    </section>

<?php get_footer();