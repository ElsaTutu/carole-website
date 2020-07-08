<?php
/**
 * The template for displaying the 404 template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage carole
 * @since carole 1.0
 */

get_header();
?>
<main class="main">
    <div class="error_page">
       <div id="error_page_clouds clouds">
            <div class="cloud x1"></div>
            <div class="cloud x1_5"></div>
            <div class="cloud x2"></div>
            <div class="cloud x3"></div>
            <div class="cloud x4"></div>
            <div class="cloud x5"></div>
        </div>
        <div class="error_page_text">
            <div class="_404">404</div>
            <hr>
            <div class="_1">La page que vous cherchez</div>
            <div class="_2">n'est plus ici</div>
            <a class="error_page_button" href="#">Retourner à l'accueil</a>
        </div>
    </div>


<?php
get_footer();
