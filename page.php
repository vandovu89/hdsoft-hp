<?php
/**
 * Default Page Template
 * Fallback for pages that don't have a specific template (e.g. page-about.php).
 */
get_header();
?>

<section class="section" style="padding: 60px 0;">
    <div class="container">
        <?php
        while (have_posts()) :
            the_post();
            ?>
            <h1 class="section-title"><?php the_title(); ?></h1>
            <div class="page-content" style="margin-top: 20px;">
                <?php the_content(); ?>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
