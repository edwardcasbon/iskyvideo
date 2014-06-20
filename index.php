<?php get_header(); ?>
<section class="content">
    <div class="inner-container">

        <h1>Search results for "<?php echo get_search_query() ?>"</h1>
        <ul class="search-results">
        <?php if ( have_posts() ) :
            while ( have_posts() ) : the_post(); ?>
                <li>
                    <h2><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h2> 
                    <p><?php the_excerpt() ?></p>
                    </li>
            <?php endwhile; ?>
        </ul>
        <?php else : ?>
            No results
        <?php endif; ?>

    </div>
</section>

<?php get_footer();