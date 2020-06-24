<footer>
    <span class="ban_select">
    <hr>
    <p>Powered by <a :href="wp_url">Wordpress</a> | Theme: <a :href="theme_repo_url">Akazure Minimalism</a></p>
    </span>
</footer>
<script>
    var foot=new Vue({
        el:'footer',
        data:{
            wp_url:"https://wordpress.org",
            theme_repo_url:"https://github.com/AkazureProject/aka_minimalism"
        }
    });
</script>