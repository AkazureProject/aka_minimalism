<?php 
    // 允许博文增加缩略图
    add_theme_support("post-thumbnails");
    // 右侧小工具栏
    register_sidebar(array(
        "name"=>"rightSideBar",
        "id"=>"rightsidebar",
        'before_widget' => '<div class="index_widget" style="border:2px solid; padding:5px; margin:2px;'.  
                                    'overflow:hidden; width:20%; font-family:font-family: 宋体,Georgia, Times, serif;'.
                                    'font-weight:lighter;">',
        'after_widget'  => '</div>',
        'before_title'  => '<span style="font-size:110%;">',
        'after_title'   => '<hr align="left" style="width:50%;"> </span> ' 
    ));
    register_sidebar(array(
        "name"=>"leftSideBar",
        "id"=>"leftsidebar",
        "class"=>"hidden_sidebar",
    ));
?>
