<?php 
/*Template name : newsletter */ 
?>
<?php get_header() ?>
<div class="container_mentions_legales" style="height: 75vh;">
      
        <h1 class="container_mentions_legales_title"><?php the_title(); ?></h1>
        <content class="container_mentions_legales">
          
          <p class="container_mentions_legales_p"><?php the_content(); ?></content>
        
      
    </div>
    
<?php get_footer() ?>