<?php
/**
 * The content for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

  <div class="<?php if ( is_page() or is_single() ) { echo 'col-12 pb-2'; }else{ echo 'col-12 col-sm-6 col-lg-3 pb-2'; } ?>">
    <div id="post-<?php the_ID(); ?>" class="single-place">
      <div class="place-cover">
        <?php if ( has_post_thumbnail() ) { 
          the_post_thumbnail( 'small-thumbnail' );
          echo '<span>$1,095</span>';
        }?>
        
      </div>
      <div class="p-3">
        
          <?php
          if ( is_sticky() && is_home() && ! is_paged() ) {
            printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', '' ) );
          }
          if ( is_singular() ) :
            the_title( '<h2 class="entry-title">', '</h2>' );
          else :
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
          endif;
          ?>
        
        <?php the_excerpt() //the_content(); ?>
      </div>
    </div>
  </div>
