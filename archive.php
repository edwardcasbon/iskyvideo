<?php get_header(); ?>

<section>
<div class="inner-container">

    <h1><?php if ( is_day() ) :
			echo "Daily Archives: " . get_the_date();
		elseif ( is_month() ) :
			echo "Monthly Archives: " . get_the_date("F Y");
		elseif ( is_year() ) :
			echo "Yearly Archives: " . get_the_date("Y");
		else :
			echo "Archives";
		endif;
	?></h1>
    
    <?php if ( have_posts() ) : ?>
        
        <?php while ( have_posts() ) : the_post(); ?>
        <article>
            <h1><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h1>
        </article>
        <?php endwhile; ?>

    <?php else : ?>
        No posts
    <?php endif; ?>

</div> <!-- /.inner-container -->
</section>
    
<?php get_footer();