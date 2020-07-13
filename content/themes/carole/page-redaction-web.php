<?php 
/*Template name : redaction-web */ 
?>
<?php get_header() ?>

<section class="home_presentation redaction_web_title">
      <h4 class="home_presentation_word_carousel">    
        <span>Le rédaction web : </span>  
        <div> 
<!--        Use classes 2,3, or 4 to match the number of words --> 
            <ul class="flip4"> 
                <li>Information</li>
                <li>Style personnel</li>
                <li>Référencement</li> 
                <li>Personnalisation</li>  
            </ul>
        </div>  
    </h4>
    </section>

      <section class="presentation" id="presentation">
      <div class="presentation_section">

        <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'redaction-web-big-paragraph'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/redaction/redaction-web-big-paragraph'); ?>

        <?php endwhile; endif; ?>

        
    </section>

    <section class="consulting_details">
      

      <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'redaction-web-small-paragraph'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/redaction/redaction-web-small-paragraph'); ?>

        <?php endwhile; endif; ?>

    
    </section>


      <div class="fansy_button">
        <button class="fancy">
          <span class="top-key"></span>
          <a href="<?php bloginfo('url'); ?>/consulting/" target="_blank" class="">En savoir plus sur le consulting </a>
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