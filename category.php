<?php get_header(); ?>

<section class="thumbnail-article-list">

	<div class="inner-container">
	  <h3>Category: <?php single_cat_title(); ?></h3>
	</div>    
    
    <?php $mainCategory = single_cat_title('', false);
		if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>

	<article>
	
	  <div class="inner-container">
	
	    <div class="image-col">
	      <a class="thumbnail" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'thumbnail' ); ?></a>                
	    </div>
	    
	    <div class="col">
	      <h2><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h2>
	      <p><?php echo get_the_excerpt() ?></p>
	      <p class="read-article"><a href="<?php echo get_permalink()?>">Read article</a></p>
	    </div>
	
			<hr>
	
	  </div>        
	
	</article>
        
    <?php endwhile; ?>

<?php else : ?>
    No posts
<?php endif; ?>

</section>
   
<?php get_footer();

