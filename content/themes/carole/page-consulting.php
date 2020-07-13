<?php 
/*Template name : consulting */ 
?>

<?php get_header() ?>

<section class="home_presentation redaction_web_title">
      <h4 class="home_presentation_word_carousel">    
        <span>Le consulting : </span>  
        <div> 
<!--        Use classes 2,3, or 4 to match the number of words --> 
            <ul class="flip4"> 
                <li>Organisation</li>
                <li>Analyse</li>
                <li>Stratégie</li> 
                <li>Accompagnement</li>  
                <li>Reporting</li> 
            </ul>
        </div>  
    </h4>
    </section>

      <section class="presentation" id="presentation">
      <div class="presentation_section">

        <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'consulting-big-paragraph'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/consulting/consulting-big-paragraph'); ?>

        <?php endwhile; endif; ?>

        
    </section>

    <section class="consulting_details">
      

      <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'consulting-small-paragraph'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/consulting/consulting-small-paragraph'); ?>

        <?php endwhile; endif; ?>

    
    </section>


      <div class="fansy_button">
        <button class="fancy">
          <span class="top-key"></span>
          <a href="<?php bloginfo('url'); ?>/redaction-web/" target="_blank" class="">En savoir plus sur la rédaction web </a>
          <span class="bottom-key-1"></span>
          <span class="bottom-key-2"></span>
        </button>
    </div>

    <div class="scroll-back">
      <a href="#top">
          <i class="fa fa-angle-up"  aria-hidden="true"></i>
      </a>
    </div>

    
<?php get_footer() ?>