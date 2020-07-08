<?php 
/*Template name : contact */ 
?>
<?php get_header() ?>

<main class="main">
         <div class="contact">
          <div style="text-align:center">
            <h1>Me contacter</h1>
            <p>Bla bla bla</p>
          </div>
          <div class="row">
            <div class="column">
              <?php get_template_part('template-parts/contact-form'); ?>
      
            </div>
            <div class="column">
              <address class="contact-info">

                <?php get_template_part('template-parts/footer/contact-info'); ?>
                
                
               </address>
            </div>
          </div>
        </div> 
<?php get_footer() ?>