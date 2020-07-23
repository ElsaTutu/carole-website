        <div class="search-bar blog-search-bar">
          <form method="get" action="#">
            <div class="text-center blog-text-center">
              <h2>Vous cherchez quelque chose ?  </br> Cliquez <a href="<?php bloginfo('url'); ?>/search/">ici</a> </h2> 
                <!-- <input type="text" id="search" placeholder="recherche">
                <i class="fa fa-search" aria-hidden="true"></i>    -->

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
              <h3 class="title_newsletter">Vous souhaitez recevoir la newsletter ?</h3>
              <a href="<?php bloginfo('url'); ?>/newsletter/" target="_blank" class="submit-btn">Cliquez ici</a>
              
            </div>
          </div>
        </div>