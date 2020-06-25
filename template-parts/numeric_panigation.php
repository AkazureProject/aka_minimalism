<div id="index_blog_navi" class="blog_navi">
    <?php
        $total_count= count(get_posts());
        // 不知道怎么获取post_per_page，这里hardcode
        $post_per_page=8;
        $page_count=ceil($total_count/$post_per_page);
        $this_site_url=bloginfo('home');
        echo "<p>",$total_count,"</p>";
        echo '<div class="blog_navi_box ban_select">','<a href="',$this_site_url,'/#index_content">',1,'</a></div>';
        for($i=1;$i<$page_count;$i++){
            echo '<div class="blog_navi_box ban_select">','<a href="',$this_site_url,'/page/',$i+1,'/#index_content">',$i+1,'</a></div>';
        }
    ?>
</div>
<script>

</script>