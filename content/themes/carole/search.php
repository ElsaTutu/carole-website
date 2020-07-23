<?php
/*
Template Name: Search
*/
?>
<?php
get_header(); ?>
<?php

// formulaire de recherche

get_search_form();  ?>



<div class="wrapper">
    <div class="wrapper-left">

        <div class="section">
            <?php if ( have_posts() ) : ?>
            
            <h1 class="section_title"><p><?php printf( __( 'Les résultats pour: %s', ' ' ), '<span>' . get_search_query() . '</span>' ); ?></p> 
            <div class="typewriter_icon">
                <div class="slide"><i></i></div>
                <div class="paper"></div>
                <div class="keyboard"></div>
            </div>

            </h1> 
            <div class="content-wrapper"> 

                     <?php 
                    while ( have_posts() ) : the_post(); 
                    get_template_part('template-parts/blog/article-excerpt'); 
                    endwhile; ?>

                    <?php else : ?>

                <?php get_template_part( 'template-parts/blog/no-result' ); ?>

            <?php endif; ?>

            </div>
        </div>

        <!-- scroll bar-->
          <div class="scroll-back">
            <a href="#top">
                <i class="fa fa-angle-up"  aria-hidden="true"></i>
            </a>
          </div>

    </div>

    <div class="wrapper-right">
      <?php get_template_part('template-parts/blog/blog-right-wraper'); ?>

    </div>
    
</div>







                    
 

<!-- <section id="primary" class="content-area">
            <div id="content" class="site-content" role="main"> -->

    <?php         

	
get_sidebar('nice-bar');

get_footer();