<?php get_header(); ?>
<body>
    <article class="blog_page_root">
        <h2 class="blog_title" v-text="blog_title"></h2>
        <hr>
        <div class="blog_content" v-html="blog_content"></div>
    </article>
    <script>
        if (<?php echo have_posts(); ?>){
            <?php the_post();?>
            var blog_page=new Vue({
                el:".blog_page_root",
                data:{
                    blog_title:'<?php the_title(); ?>',
                    blog_date:'<?php the_date(); ?>',
                    blog_content:`<?php the_content(); ?>`
                }
            })
        }
    </script>
</body>