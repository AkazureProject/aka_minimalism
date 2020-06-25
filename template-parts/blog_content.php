<article class="blog_content">
    <h2 class="blog_title" v-text="blog_title"></h2>
    <h4 class="blog_category ban_select" v-html="blog_category"></h4>
    <sub v-if="blog_edit_link" v-html="blog_edit_link"></sub>
    <hr align="left">
    <h4 class="blog_date" v-text="blog_author+blog_date"></h4>
    <div class="blog_content" v-html="blog_content"></div>
</article>
<script>
    <?php the_post();?>
    var blog_page=new Vue({
        el:".blog_content",
        data:{
            blog_title:'<?php the_title(); ?>',
            blog_date:'<?php the_date(" 写于Y年m月d日"); ?>',
            blog_author:'@<?php echo get_the_author(); ?>',
            blog_category:`<?php echo the_category("|","none");?>`,
            blog_edit_link: `<?php echo edit_post_link(); ?>`,
            blog_content:`<?php the_content(); ?>`,
        }
    })
</script>