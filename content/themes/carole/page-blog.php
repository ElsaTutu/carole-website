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

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/blog/article-excerpt'); ?>

        <?php endwhile; endif; ?> 
          

      <div class="video_wrapper">
        <h2 class="video_title">La dernière vidéo</h2>
         <iframe 
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe> 
      </div>
    </div>
      </div>
    </div>

    <div class="wrapper-right">
      <?php get_template_part('template-parts/blog/blog-right-wraper'); ?>
        <!-- <div class="search-bar blog-search-bar">
          <form method="get" action="#">
            <div class="text-center blog-text-center">
                <input type="text" id="search" placeholder="recherche">
                <i class="fa fa-search" aria-hidden="true"></i>     
            </div>
          </form>
         </div>

        <div class="categories">
          <h2 class="title_categories">Les catégories</h2>
          <ul class="categorie-blog-list">
            
            <li class="categorie-blog-item"><a href="#" class="categorie-blog-item-link">Catégorie 1</a></li>
            <li class="categorie-blog-item"><a href="#" class="categorie-blog-item-link">Catégorie 2</a></li>
            <li class="categorie-blog-item"><a href="#" class="categorie-blog-item-link">Catégorie 3</a></li>
            <li class="categorie-blog-item"><a href="#" class="categorie-blog-item-link">Catégorie 4</a></li>
            <li class="categorie-blog-item"><a href="#" class="categorie-blog-item-link">Catégorie 5</a></li>
          </ul>
        </div>
        
        <div class="newsletter">
          <div class="newsletter-wrapper">
            <span class="close-btn glyphicon glyphicon-remove"></span>
            <div class="subscribe-wrapper">
              <h2 class="title_newsletter">Recevoir la newsletter</h2>
              <input type="email" name="email" class="subscribe-input" placeholder="Votre e-mail">
              <div class="submit-btn">Envoyer</div>
            </div>
          </div>
        </div> -->
    </div>
    
    </div>


    
<?php get_footer() ?>