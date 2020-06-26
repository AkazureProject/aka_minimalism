<?php get_header();?>
<body>
<div id='archive_root'>
    <?php get_template_part('template-parts/posts_as_paper_document');?>
    <?php get_template_part('template-parts/right_side_bar');?>
    <div class="clear_div"></div>
    <div id="archive_navi"><?php get_template_part('template-parts/blog_navi'); ?></div>
</div>
    <div id="archive_foot"><?php get_footer();?></div>
    <?php get_template_part('template-parts/back_to_top');?>
</body>