<?php 
/*Template name : blog */ 
?>

<?php get_header() ?>

<div class="wrapper">
    <div class="wrapper-left">
        <div class="slider">
          <div class="slideshow-container">

            <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'blog'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/blog/slideshow'); ?>

        <?php endwhile; endif; ?>

            

            <div style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div> 
      </div>
        </div>

      <div class="section">
        <h1 class="section_title"><p>Les derniers articles</p> 
        <div class="typewriter_icon">
          <div class="slide"><i></i></div>
          <div class="paper"></div>
          <div class="keyboard"></div>
        </div>
        </h1> 

        <div class="content-wrapper"> 

          <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'blog',
            'sort_order' => 'asc',
            'numberposts' => 9
        ];

          $wpqueryArticles = new WP_Query($args);
          
          if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); 
          get_template_part('template-parts/blog/article-excerpt'); ?>

          <?php endwhile; endif; ?> 
          

      <!-- <div class="video_wrapper">
        
        <h2 class="video_title">La dernière vidéo</h2>
            <iframe 
            src="https://www.youtube.com/embed/tgbNymZ7vqY">
          </iframe> 
      </div> -->
    </div>
      </div>
    </div>

    <div class="wrapper-right">
      <?php get_template_part('template-parts/blog/blog-right-wraper'); ?>
       
    </div>
    
    </div>

    <!-- https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/ -->
    <div class="scroll-back">
      <a href="#top">
          <i class="fa fa-angle-up"  aria-hidden="true"></i>
      </a>
    </div>


    
<?php get_footer() ?>