
<?php get_header() ?>

<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
	if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>
 
 
<div class="article"> <!-- Ceci est un exemple -->                   
    <?php the_post_thumbnail(); ?>
 	<h3><?php the_title(); ?></h3>
 	<div class="mon-contenu">
 		<?php the_excerpt() ?>
 		<a href="<?php the_permalink(); ?>" title="En savoir plus"></a>
	</div><!-- Fin div mon-contenu -->
</div> <!-- Fin article --> 

<?php } wp_reset_postdata(); ?>

<?php get_footer() ?>