<?php get_header(); ?>

<section>
    
	<article class="author-bio">
	  <div class="inner-container">
	    <?php if ( have_posts() ) : ?>
	
	        <?php
	        /*
	         * Queue the first post, that way we know what author
	         * we're dealing with (if that is the case).
	         *
	         * We reset this later so we can run the loop properly
	         * with a call to rewind_posts().
	         */
	        the_post();?>
	
			<img class="bio-photo" src="<?php echo get_template_directory_uri()?>/img/authors/<?php echo get_the_author_meta('user_login'); ?>.png" alt="">
	
	      	<h1><?php echo get_the_author()?></h1>
	
	        <?php if ( get_the_author_meta( 'description' ) ) : ?>
	        <?php the_author_meta( 'description' ); ?>
	
	        <?php endif; ?>
	  </div>
	</article>
    
    
            <?php
            /*
             * Since we called the_post() above, we need to rewind
             * the loop back to the beginning that way we can run
             * the loop properly, in full.
             */
            rewind_posts(); ?>
            
		<article class="thumbnail-article-list">
    
			<div class="inner-container">    
	      <h3>Articles by <?php echo get_the_author()?></h3>
			</div>
			  
    <?php while ( have_posts() ) : the_post(); ?>
              
            
			<div class="inner-container">
			
				<div class="image-col">
				    <a class="thumbnail" href="<?php echo get_permalink()?>"><?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?></a>                
				</div>
				
				<div class="col">
				    <h2><a href="<?php echo get_permalink()?>"><?php the_title() ?></a></h2>
				    <p><?php echo get_the_excerpt() ?></p>
				    <p class="read-article"><a href="<?php echo get_permalink()?>">Read article</a></p>
				</div>
				<hr />
			  
			</div>
	
	    <?php endwhile;

		</article>

        <?php else : ?>
            No posts found
        <?php endif; ?>

</section>
   
<?php get_footer();