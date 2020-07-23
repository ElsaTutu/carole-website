
<?php get_header(); ?>



    <section class="home_presentation">
      

      <div class="block-effect" style="--td: 1.2s">
        <div class="block-reveal home_presentation_word_carousel main-title" style="--bc: #F9A146; --d: .1s">Rédaction Web - Consulting</div>
      </div>

      <h4 class="home_presentation_word_carousel">    
        <span>Le coeur du métier : </span>  
        <div> 
<!--        Use classes 2,3, or 4 to match the number of words --> 
            <ul class="flip4"> 
                <li>Réactivité</li>
                <li>Esprit de synthèse</li>
                <li>Ouverture d'esprit</li> 
                <li>Créativité</li>  
            </ul>
        </div>  
    </h4>

    </section>

    <section class="presentation" id="presentation">
       <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'home-big-paragraph'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/home/presentation'); ?>

        <?php endwhile; endif; ?>

    </section>


    <div class="typewrite">
      <a href="" class="typewrite" data-period="2000" data-type='[ "Mes compétences", "Mon savoir-faire", "Vos besoins"]'>
        <span class="wrap"></span>
      </a>
    </div>

    <section class="grid" id="grid">
      <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'home-small-paragraph'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/home/skill'); ?>

        <?php endwhile; endif; ?>
    </section>

    

    <div class="contact_link">
      <div class="contact_link_container container">
          <h3 class="contact_link_text">Parlez-moi de votre projet</h3>
            <a href="<?php bloginfo('url'); ?>/a-propos/" class="effect01 contact_link_button" target="_blank"><span>Lire la suite</span></a>
      </div>
    </div>

        <!-- <div class="search-bar">
      <form method="get" action="#">
        <div class="text-center">
            <input type="text" id="search" placeholder="recherche">
            <i class="fa fa-search" aria-hidden="true"></i>   
        </div>
      </form>
    </div> -->

    <!-- https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/ -->
    <div class="scroll-back">
      <a href="#top">
          <i class="fa fa-angle-up"  aria-hidden="true"></i>
      </a>
    </div>


      
  <?php get_footer(); ?>
