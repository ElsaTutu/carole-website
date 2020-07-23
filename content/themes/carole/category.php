<?php 
/*Template name : category */ 
?>

<?php get_header() ?>

<div class="wrapper">
    <div class="wrapper-left">

      <div class="section">
              <?php 
                $taxonomy = 'category';

                // get the term IDs assigned to post.
                $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
                // separator between links
                $separator = ', ';
                $categories = get_the_category();
                $parentid = $categories[1]->category_parent;

                if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {

                    $term_ids = implode( ',' , $post_terms );
                    $terms = wp_list_categories( 'title_li=&style=none&echo=0&child_of=' . $parentid . '&taxonomy=' . $taxonomy . '&include=' . $term_ids );
                    $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );

                    
                }
              ?>

              <h1 class="section_title"><p>Les derniers articles de la catégorie : <?php echo  $terms; ?></p> 
                <div class="typewriter_icon">
                  <div class="slide"><i></i></div>
                  <div class="paper"></div>
                  <div class="keyboard"></div>
                </div>

            </h1> 

              <div class="content-wrapper"> 
                    <?php
              $max_posts = 100;
              $cat_ID = get_cat_ID ( single_cat_title( '', false ) );
              $args = array(
                  'category' => $cat_ID,
                  'numberposts' => $max_posts,
              );
              $myposts = get_posts( $args );
              foreach( $myposts as $post ) {
                  setup_postdata( $post );
              ?>

              <div class="news-card">
                      <a href="<?php the_permalink(); ?>" class="news-card__card-link"></a>
                      <div class="news-card__image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);  background-repeat: no-repeat;
                    background-size: cover;"></div>
                      <div class="news-card__text-wrapper">
                        <h2 class="news-card__title"><?php the_title(); ?></h2>
                        <div class="news-card__post-date"><?php the_date(); ?></div>
                        <div class="news-card__details-wrapper">
                          <p class="news-card__excerpt"><?php the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>" class="news-card__read-more">Lire plus <i class="fa fa-arrow-right"></i></a>
                        </div>
                      </div>
                    </div>
              <?php
              }
              ?>
                
          </div>
      </div>

       <!-- scroll bar-->
          <div class="scroll-back">
            <a href="#top">
                <i class="fa fa-angle-up"  aria-hidden="true"></i>
            </a>
          </div>

    </div>

      <div class="wrapper-right">
        <?php get_template_part('template-parts/blog/blog-right-wraper'); ?>

      </div>
    
</div>

















<?php get_footer() ?>