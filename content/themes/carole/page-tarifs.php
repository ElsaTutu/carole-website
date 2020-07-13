<?php 
/*Template name : tarifs */ 
?>
<?php get_header() ?>

<section class="home_presentation redaction_web_title  word_carousel_tarif">
      <h4 class="home_presentation_word_carousel">    
        <span>Le juste prix pour </span>  
        <div> 
<!--        Use classes 2,3, or 4 to match the number of words --> 
            <ul class="flip4"> 
                <li class="flip4_italic">un accompagnement</li>
                <li class="flip4_italic">un travail</li>
                <li class="flip4_italic">un audit </li> 
                <li class="flip4_italic">un article</li>  
            </ul>
        </div>  
        
    </h4>
    </section>


    <div class="container_mentions_legales">
      
        <h1 class="container_mentions_legales_title"></h1>
        <content class="container_mentions_legales">
          
          <p class="container_mentions_legales_p"><?php the_content(); ?></content>
        
      
    </div>

    <div class="contact_link">
      <div class="contact_link_container container">
          <h3 class="contact_link_text">Parlez-moi de votre projet</h3>
            <a href="<?php bloginfo('url'); ?>/contact/" class="effect01 contact_link_button" target="_blank"><span>Lire la suite</span></a>
      </div>
    </div>


   

<!-- https://html-online.com/articles/dynamic-scroll-back-top-page-button-javascript/ -->
    <div class="scroll-back">
      <a href="#top">
          <i class="fa fa-angle-up"  aria-hidden="true"></i>
      </a>
    </div>



    
<?php get_footer() ?>