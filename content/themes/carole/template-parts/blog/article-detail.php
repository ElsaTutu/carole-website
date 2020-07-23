  <div class="wrapper-left">
        <div class="article">
              <div class="article_image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
              <div class="article_infos">
                <h1 class="article_title"><span class="article_title"><?php the_title(); ?></span></h1>
                <h2 class="article_categorie"> <a href=""></a>

                  <?php $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[1]->name );   
                    } ?>
                    
                </h2>
                <!-- <h2 class="article_date">
                  <?php /* the_tags( 'Les thèmes: ', ' • ', '<br />' ); */ ?>
                  </h2> -->
                <h3 class="article_date">- <?php the_date(); ?> -</h3>
              </div>
              <div class="article_content"><?php the_content(); ?></div>
          </div>
          
          <!-- scroll bar-->
          <div class="scroll-back">
            <a href="#top">
                <i class="fa fa-angle-up"  aria-hidden="true"></i>
            </a>
          </div>
    </div>

     

   

