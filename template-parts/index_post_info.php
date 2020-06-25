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
                    <p><?php echo wp_trim_words(wp_strip_all_tags(get_the_content(),true),30,'...');?></p>
                </div>
            </div>
            <div class="clear_div"></div>
        </div>
    <?php endwhile; ?>
    <!-- End of the main loop -->

    <!-- Add the pagination functions here. -->

    <div class="blog_navi ban_select">
        <?php
        function new_get_previous_posts_link( $label = null ) {
            global $paged;
         
            if ( null === $label ) {
                $label = __( '&laquo; Previous Page' );
            }
         
            if ( ! is_single() && $paged > 1 ) {
                /**
                 * Filters the anchor tag attributes for the previous posts page link.
                 *
                 * @since 2.7.0
                 *
                 * @param string $attributes Attributes for the anchor tag.
                 */
                $attr = apply_filters( 'previous_posts_link_attributes', '' );
                return '<a href="' . previous_posts( false ) . "#index_content\" $attr>" . preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) . '</a>';
            }
            else {
                return '已到首页';
            }}; 
        function new_get_next_posts_link( $label = null, $max_page = 0 ) {
            global $paged, $wp_query;
         
            if ( ! $max_page ) {
                $max_page = $wp_query->max_num_pages;
            }
         
            if ( ! $paged ) {
                $paged = 1;
            }
         
            $nextpage = intval( $paged ) + 1;
         
            if ( null === $label ) {
                $label = __( 'Next Page &raquo;' );
            }
         
            if ( ! is_single() && ( $nextpage <= $max_page ) ) {
                /**
                 * Filters the anchor tag attributes for the next posts page link.
                 *
                 * @since 2.7.0
                 *
                 * @param string $attributes Attributes for the anchor tag.
                 */
                $attr = apply_filters( 'next_posts_link_attributes', '' );
         
                return '<a href="' . next_posts( $max_page, false ) . "#index_content\" $attr>" . preg_replace( '/&([^#])(?![a-z]{1,8};)/i', '&#038;$1', $label ) . '</a>';
            }
            else {
                return '已到末页';
            }};
        ?>
        <?php 
        echo new_get_previous_posts_link( '<<上一页' ),"—",new_get_next_posts_link( '下一页>>' ); ?>
    </div>

<?php else : ?>

<?php _e('Sorry, no posts matched your criteria.'); ?>

<?php endif; ?>
</div>