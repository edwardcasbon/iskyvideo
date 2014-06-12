<?php get_header(); ?>

<section class="content">

	<div class="inner-container">	
		<h1>Articles tagged with "<?php single_tag_title(); ?>"</h1>

	
	    <?php if ( have_posts() ) : ?>
	        
	        <?php while ( have_posts() ) : the_post(); ?>
	        
	
			<h2><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h2>
			<p><?php echo get_the_excerpt() ?></p>
			<p class="read-article"><a href="<?php echo get_permalink()?>">Read article</a></p>

	    
	
	        <?php endwhile; ?>
	

	
	    <?php else : ?>
	        No posts
	    <?php endif; ?>
    </div>
</section>
    
<?php get_footer();