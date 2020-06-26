<div id="blog_navi" class="blog_navi ban_select">
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