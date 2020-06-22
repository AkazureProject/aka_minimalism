<html>
    <?php get_header(); ?>
    <body>
        <div class="root">
            <div id="index_first">
                <div id="site_info" class="fullwidth mid_y">
                    <h1 id="site_title" class="ban_select mid_text site_info animate__animated animate__fadeInDown" v-html="site_title"></h1>
                    <hr class="one-forth-width">
                    <h4 id="site_vice_title" class="ban_select mid_text site_info animate__animated animate__fadeInUp" v-html="site_vice_title"></h4>
                </div>
            </div>
            <div id="index_content" v-if='<?php have_posts(); ?>'>
                <?php while (have_posts()): ?>
                    <?php the_post(); ?>
                    <article>
                        <index_post_info
                        :post_title="'<?php echo the_title();?>'"
                        :post_url="'<?php echo the_permalink();?>'"
                        :post_date="'写于<?php echo the_date("Y年m月d日");?>'"
                        :post_content='`<?php echo the_content();?>`'
                        />
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
        <script>
            const index_post_info={
                template:
                `<div class="index_post_small_root">
                    <div class="index_post_small_text">
                        <a class="index_post_small_title" :href="post_url"><h3>{{post_title}}</h3></a>
                        <h5 v-text="post_date" /> 
                        <div class="index_post_small_content" v-html="post_content"/>
                    </div>
                    <div class="clear_div"></div>
                 </div>`,
                 props: ['post_title','post_url','post_date', 'post_content']
            }
            var site_info=new Vue({
                el:".root",
                data:{
                    site_title:'<?php bloginfo("name"); ?>',
                    site_vice_title: '<?php bloginfo("description"); ?>',
                },
                methods:{
                },
                components:{
                    'index_post_info':index_post_info
                }
            })
        </script>
    </body>
</html>