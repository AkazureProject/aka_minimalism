<?php the_post();?>
<article id=<?php echo 'blog_num_',the_ID() ;?> class="blog_content">
    <h2 class="blog_title"><?php the_title(); ?></h2>
    <h4 class="blog_category ban_select"><?php echo the_category("|","none");?></h4>
    <sub><?php echo edit_post_link(); ?></sub>
    <hr align="left">
    <h4 class="blog_date">@<?php echo get_the_author(),the_date(" 写于Y年m月d日"); ?></h4>
    <div class="post_content"><?php the_content(); ?>
	</div>
</article>