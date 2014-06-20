<?php get_header(); ?>

<?php
// Start the Loop.
while ( have_posts() ) : the_post(); ?>
	
    <section class="content">
        <div class="inner-container">
            <h1><?php the_title(); ?></h1>
            <?php the_content() ?>
        </div>
    </section>

<?php endwhile; ?>    
<?php get_footer(); 