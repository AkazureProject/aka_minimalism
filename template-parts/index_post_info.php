<div>
<?php if ( have_posts() ) : ?>
    <!-- Start of the main loop. -->
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="index_post_small_root">
            <?php if (has_post_thumbnail()): ?>
                <div class="index_post_thumbnail hidden-xs">
                    <?php echo get_the_post_thumbnail(null,"thumbnail"); ?>
                </div>
            <?php endif; ?>
            <div class="index_post_small_text">
                <p>
                    <a class="index_post_small_title" target="_blank" href="<?php echo the_permalink();?>">
                        <?php echo wp_trim_words(get_the_title(),50);?>
                    </a>
                    <sub><?php echo edit_post_link(); ?></sub>
                </p>
                <h5><?php echo get_the_date("写于Y年m月d日");?></h5> 
                <div class="index_post_small_content">
                    <p><?php echo wp_trim_words(wp_strip_all_tags(get_the_content(),true),130,'<a href="'.get_the_permalink().'">[...]</a>');?></p>
                </div>
            </div>
            <div class="clear_div"></div>
        </div>
    <?php endwhile; ?>
    <!-- End of the main loop -->

    <!-- Add the pagination functions here. -->

    <?php get_template_part('template-parts/blog_navi'); ?>

<?php else : ?>

<?php _e('Sorry, no posts matched your criteria.'); ?>

<?php endif; ?>
</div>