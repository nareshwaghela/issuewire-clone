<?php get_header(); ?>

<div class="container" style="grid-template-columns: 1fr;">
    <div class="article-card">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div style="border-bottom: 1px solid #eee; padding-bottom: 20px; margin-bottom: 20px;">
                <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                    <h2 class="article-title" style="font-size: 24px; color: #1a73e8;"><?php the_title(); ?></h2>
                </a>
                <div class="article-meta">
                    <span><?php echo get_the_date('M d, Y'); ?></span>
                </div>
                <p class="article-content" style="text-align: left; font-size: 15px;">
                    <?php echo wp_trim_words(get_the_content(), 30, '...'); ?>
                </p>
            </div>
        <?php endwhile; else : ?>
            <p>No Press Releases found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
