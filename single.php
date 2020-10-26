<?php get_header();
    if(have_posts()): ?>
        <body>
            <div class="blog_page_root">
                <?php get_template_part('template-parts/blog_content');?>
            </div>
            <?php get_template_part('template-parts/back_to_top');?>
            <?php wp_enqueue_script( 'alert', 'scipts/alert.js');?>
        </body>
    <?php endif;?>
<?php get_footer(); ?>
	<link href="https://cdn.bootcdn.net/ajax/libs/KaTeX/0.11.1/katex.min.css" rel="stylesheet">
	<script defer src="https://cdn.bootcdn.net/ajax/libs/KaTeX/0.11.1/katex.min.js"></script>
	<script defer src="https://cdn.bootcdn.net/ajax/libs/KaTeX/0.11.0/contrib/auto-render.js" onload="renderMathInElement(document.body,
			   {
						  delimiters: [
								{left: '$$', right: '$$', display: true},
							  {left: '$', right: '$', display: false},
						  ]
					  }
		);">
	</script>