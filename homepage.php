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
            <a class="button" href="#">Get in touch for a quote</a>
        </div>
    </div>
</section>

<section class="content">
    <div class="inner-container">
        <h1>Welcome to iskyvideo</h1>
        <p>We specialise in aerial drone video and photography.</p>
        <p>Whether you are making the next big music video, or looking for that perfect scenic shot to make your project come alive, we can help.</p>
        <p>All footage is recorded in glorious 1080p High Definition, ensuring the highest quality and sustainability no matter the nature of the project.</p>
    </div>
</section>

<ul class="grid">
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-1.png" alt=""></li>
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-2.png" alt=""></li>
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-3.png" alt=""></li>
    <li><img src="<?php echo get_template_directory_uri()?>/img/layout/grid-4.png" alt=""></li>
</ul>

<section class="testimonial">
        <blockquote>
            <div class="inner-container">
                <p>We were really impressed with iskyvideo. They were very professional and shot some excellent photos of our property.</p>
                <small>Fictional character</small>
            </div>
        </blockquote>
</section>

<?php get_footer();