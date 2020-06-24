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
                <button id="skipToContent" @click="go_to_content" v-show="!is_gone_to_content">更多</button>
            </div>
            <div v-show="is_gone_to_content">
                <div id="index_content"
                    v-if='<?php have_posts(); ?>'>
                    <?php while (have_posts()): ?>
                        <?php the_post(); ?>
                        <article :key="<?php echo the_id();?>">
                            <index_post_info
                            :post_title="'<?php echo the_title();?>'"
                            :post_url="'<?php echo the_permalink();?>'"
                            :post_date="'<?php echo get_the_date("写于Y年m月d日");?>'"
                            :edit_post_link='`<?php echo edit_post_link(); ?>`'
                            :post_content='`<?php echo the_content();?>`'
                            :post_thumbnail='`<?php echo get_the_post_thumbnail(null,'thumbnail');?>`'
                            >
                            <index_post_info>
                        </article>
                    <?php endwhile; ?>
                </div>
                <div id="toolsidebar" class="rightsidebar" >
                    <?php dynamic_sidebar("rightsidebar"); ?>
                </div>
                <div class="clear_div"></div>
            </div>
        </div>
        <?php get_template_part('template-parts/back_to_top');?>
    </body>
    <?php get_footer(); ?>
    <script>
            const index_post_info={
                template:
                `<div class="index_post_small_root">
                    <div class="index_post_thumbnail" v-if="post_thumbnail" v-html="post_thumbnail"></div>
                    <div class="index_post_small_text">
                        <p>
                            <a class="index_post_small_title" target="_blank" :href="post_url">{{post_title}}</a>
                            <sub v-html="edit_post_link"></sub>
                        </p>
                        <h5 v-text="post_date"></h5> 
                        <div class="index_post_small_content" v-html="post_content"></div>
                    </div>
                    <div class="clear_div"></div>
                 </div>`,
                 props: ['post_title','post_url','post_date','edit_post_link', 'post_content','post_thumbnail']
            }
            var site_info=new Vue({
                el:".root",
                data:{
                    site_title:'<?php bloginfo("name"); ?>',
                    site_vice_title: '<?php bloginfo("description"); ?>',
                    is_gone_to_content:false,
                },
                methods:{
                    go_to_content: function(){
                        this.is_gone_to_content=true;
                        window.location.href="\#index_content";
                    },
                },
                components:{
                    'index_post_info':index_post_info,
                }
            })
    </script>
</html>