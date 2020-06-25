<?php get_header();
    if(have_posts()): ?>
        <body>
            <div class="blog_page_root">
                <?php get_template_part('template-parts/blog_content');?>
            </div>
            <?php get_template_part('template-parts/back_to_top');?>
            </script>
        </body>
    <?php endif;?>
<?php get_footer(); ?>