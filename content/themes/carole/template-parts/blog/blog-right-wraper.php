        <div class="search-bar blog-search-bar">
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
            
            
              <?php 

              //https://wordpress.stackexchange.com/questions/360088/get-parent-category-id-from-child-category-page-for-custom-taxonomy

              $terms = get_terms(array(
                'taxonomy'=> 'category',
                'orderby' => 'name',
                'order'   => 'ASC',
                'hide_empty' => false, )); 

                 //get parent category term id $term->term_id            
                foreach ( $terms as $term ) {
                  $term_link = get_term_link( $term );
                    if ($term->parent == 18 ) {                      
                    ?>
                     <li class="categorie-blog-item"><a href="<?php echo esc_url( $term_link ); ?>" class="categorie-blog-item-link"> <?php echo "<li>". $term->name; ?></a></li> 
                        <?php                                      
                    }                   
                    }  ?>

                    

                    

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
        </div>