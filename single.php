<?php get_header(); ?>

<div class="container">
    <!-- LEFT: Article Section -->
    <div class="article-card">
        <!-- Breadcrumb -->
        <div class="breadcrumb">
            <a href="/">Home</a> &rsaquo; 
            <?php the_category(' &rsaquo; '); ?> &rsaquo; 
            <?php the_title(); ?>
        </div>
        
        <!-- Title -->
        <h1 class="article-title"><?php the_title(); ?></h1>
        
        <!-- Meta Info -->
        <div class="article-meta">
            <span><strong><?php the_author(); ?></strong></span>
            <span><?php echo get_the_date('M d, Y'); ?></span>
        </div>
        
        <!-- Content -->
        <div class="article-content">
            <?php 
            // Check if post has a featured image (Company Logo)
            if (has_post_thumbnail()) : ?>
                <div class="company-logo-box">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
            <?php endif; 
            
            // Print the actual article content
            the_content(); 
            ?>
        </div>
        
        <!-- Tags -->
        <div class="tags-box">
            <strong style="margin-right:10px;">Tags:</strong>
            <?php the_tags('<a href="#" class="tag">', '</a><a href="#" class="tag">', '</a>'); ?>
        </div>
        
        <!-- Share Buttons -->
        <div class="share-box">
            <span style="font-weight:600; color:#555;">Share:</span>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="share-btn fb">f</a>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>" target="_blank" class="share-btn tw">X</a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>" target="_blank" class="share-btn li">in</a>
            <a href="https://api.whatsapp.com/send?text=<?php the_permalink(); ?>" target="_blank" class="share-btn wa">✈</a>
        </div>
    </div>

    <!-- RIGHT: Sidebar -->
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
