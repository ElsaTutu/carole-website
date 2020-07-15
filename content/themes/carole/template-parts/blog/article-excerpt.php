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