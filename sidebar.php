<div class="sidebar">
    <div class="widget">
        <div class="widget-title">Recent Press Releases</div>
        <?php
        // Fetch latest 5 posts
        $recent_posts = wp_get_recent_posts(array('numberposts' => 5, 'post_status' => 'publish'));
        foreach($recent_posts as $post) : ?>
            <div class="recent-pr">
                <a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a>
                <div class="recent-pr-date"><?php echo date('M d, Y', strtotime($post['post_date'])); ?></div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Dynamic Widgets from WP Admin -->
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php endif; ?>
</div>
