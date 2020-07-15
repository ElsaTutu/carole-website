<?php get_header(); ?>

    <div class="wrapper">
    
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?php get_template_part('template-parts/blog/article-detail') ?>

    <?php endwhile; endif; ?>

    <div class="wrapper-right">
        <?php get_template_part('template-parts/blog/blog-right-wraper'); ?>
        
    </div>    

</div>
  
  


    
<!-- https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/ -->
    

<?php get_footer(); ?>
