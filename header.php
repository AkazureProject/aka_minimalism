<!DOCTYPE html>
<head>
    <!-- Animate.css -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <!-- 网站CSS -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" rel="stylesheet" type="text/css"/> 
    <!-- Vue.js -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title><?php bloginfo("name");?> —— <?php bloginfo("description"); ?></title>
    <link href="<?php echo get_site_icon_url();?>" rel="icon" type="image/x-icon">
	<!-- Prism 代码块美化 -->
	<!-- <link href="themes/prism.css" rel="stylesheet" /> -->
</head>
<?php get_template_part('template-parts/left_side_bar');?>