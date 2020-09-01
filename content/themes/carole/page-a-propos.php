<?php 
/*Template name : a-propos */ 
?>

<?php get_header() ?>

<section class="presentation" id="presentation">
      <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'a-propos-paragraph'
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/redaction/redaction-web-big-paragraph'); ?>

        <?php endwhile; endif; ?>

    </section>


<h2 class="faq-main-title">Les questions fréquentes</h2>
  
 <section class="grid__faq" id="grid">
        
           <?php
                $args = [
            'post_type' => 'post',
            'category_name' => 'a-propos-questions-frequentes',
            'orderby'   => 'date',
            'order'     => 'DESC',
        ];

        $wpqueryArticles = new WP_Query($args);

        ?>

        <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

            <?php get_template_part('template-parts/a-propos/questions-frequentes'); ?>

        <?php endwhile; endif; ?>
        

       
    </section>



    <!-- https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/ -->
    <div class="scroll-back">
      <a href="#top">
                  <i class="fa fa-angle-up"  aria-hidden="true"></i>
                </a>
      
    </div>
    
<?php get_footer() ?>