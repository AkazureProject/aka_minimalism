<html>
    <?php get_header(); ?>
    <body onresize="win_width=window.innerWidth">
        <div class="root" @resize="update_width()">
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
                    v-if='<?php echo have_posts(); ?>'>
                    <?php get_template_part('template-parts/index_post_info'); ?>
                </div>
                <div id="toolsidebar" class="rightsidebar hidden-xs" >
                    <?php dynamic_sidebar("rightsidebar"); ?>
                </div>
                <div class="clear_div"></div>
				<?php get_footer(); ?>
            </div>
        </div>
        <?php get_template_part('template-parts/back_to_top');?>
    </body>
    <script>
            var win_width=0;
            var site_info=new Vue({
                el:".root",
                data:{
                    site_title:'<?php bloginfo("name"); ?>',
                    site_vice_title: '<?php bloginfo("description"); ?>',
                    is_gone_to_content:window.location.href!='<?php echo site_url();?>'+'/',
                },
                methods:{
                    go_to_content: function(){
                        this.is_gone_to_content=true;
                        window.location.href="/#index_content";
                    },
                },
                computed:{  
                },
                components:{
                },
                // mounted(){
                //     window.addEventListener("resize",()=>{
                //         win_windth=window.innerWidth;
                //         console.log(win_width);});
                // },
            })
    </script>
</html>