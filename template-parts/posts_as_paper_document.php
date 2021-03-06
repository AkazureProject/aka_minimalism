<?php if(have_posts()):
        $p_counter=0; ?>
    <div id="posts_as_files" class="posts_as_files">
        <?php while(have_posts()):
                the_post();?>
            <div id=<?php echo 'post_file_num_',the_ID(); ?> class="post_as_file" display="none" onload="setTimeout(()=>{post_file_num_<?php echo get_the_ID(); ?>.style.display='table-column'},delay=<?php echo $p_counter?>*50)">
					<script>
						//setTimeout(()=>{post_file_num_<?php echo get_the_ID(); ?>.style.display='table-column'},delay=<?php echo $p_counter?>*100);
					</script>
                <div id=<?php echo 'post_file_tag_num_',the_ID();?> class="post_as_file_tag ban_select">
                    <strong><a class="index_post_small_title" href="<?php echo the_permalink();?>"><?php the_title();?></a></strong>
                </div>
                <article id=<?php echo 'post_file_content_num_',the_ID();?> class="post_as_file_content">
                    <h2><?php the_title();?></h2>
                    <h4 class="post_file_category ban_select"><?php echo the_category("|","none");?></h4>
                    <hr align="left">
                    <h4 class="post_file_date"><?php echo '@',get_the_author(),the_date(" 写于Y年m月d日"); ?></h4>
                    <div class="post_file_text_content"><?php echo get_the_content(null,true); ?></div>
                </article>
            </div>
            <script>
                post_file_num_<?php echo get_the_ID(); ?>.style.top=<?php echo $p_counter?>*30+'px';
                post_file_num_<?php echo get_the_ID(); ?>.style.animationDuration=<?php echo $p_counter?>*0.05+1+"s";
                post_file_tag_num_<?php echo get_the_ID(); ?>.onmouseover=()=>{post_file_num_<?php echo get_the_ID(); ?>.style.zIndex=2;};
                post_file_tag_num_<?php echo get_the_ID(); ?>.onmouseout=()=>{post_file_num_<?php echo get_the_ID(); ?>.style.zIndex=0;};
            </script>
            <?php $p_counter++;?>
        <?php endwhile;?>
        <script>
            posts_as_files.style.height=window.innerHeight*0.7+<?php echo $p_counter?>*30;
        </script>
    </div>
<?php endif;?>