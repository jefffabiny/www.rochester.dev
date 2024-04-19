<?php
get_header(); // Include header.php
?>

<main>
    <div class="container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" class="w100">
                    <h1 id="site-title" class="site-title">

                        <span>R</span>
                        <span>O</span>
                        <span>C</span>
                        <span>H</span>
                        <span>E</span>
                        <span>S</span>
                        <span>T</span>
                        <span>E</span>
                        <span>R</span>
                        <span>.</span>
                        <span>D</span>
                        <span>E</span>
                        <span>V</span>

                    </h1>

                    <div class="parallax-container">
                        <img class="parallax-bg" src="<?php echo get_template_directory_uri() . '/assets/block1bg.png'; ?>">
                    </div>

                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div><!-- .container -->
</main>

<?php
get_footer(); // Include footer.php
?>