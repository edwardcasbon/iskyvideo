<?php
/**
 * Template name: Homepage
 */
?>

<?php get_header(); ?>

<section class="hero">
    <div class="inner-container">
        <div class="video-container"><div id="hero-video" data-videoid="8TZ7am-YG7M"></div></div>
        <div class="content">
            <h1>Video without limits.</h1>
            <h2>Specialising in aerial drone video and photography.</h2>
            <a class="button" href="/contact-us">Get in touch for a quote</a>
        </div>
    </div>
</section>

<?php while ( have_posts() ) : the_post(); ?>
<section class="content">
    <div class="inner-container">
		<h1><?php the_title(); ?></h1>
		<?php the_content() ?>
    </div>
</section>
<?php endwhile; ?>    

<ul class="grid">
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-1.jpg" alt=""></li>
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-2.jpg" alt=""></li>
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-3.jpg" alt=""></li>
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-4.jpg" alt=""></li>
</ul>

<!-- 
<section class="testimonial">
        <blockquote>
            <div class="inner-container">
                <p>We were really impressed with iskyvideo. They were very professional and shot some excellent photos of our property.</p>
                <small>Fictional character</small>
            </div>
        </blockquote>
</section>
-->
<?php get_footer();