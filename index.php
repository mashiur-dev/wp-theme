<?php get_header(); ?>

    <section id="top-destinations">
      <div class="container">

        
          
          <div class="row">
            <div class="col pb-4">

              <?php if ( is_home() ) : ?>

              <h1>Destinations</h1>
              <p>Blogs for your next adventure.</p>

              <?php elseif ( ! is_front_page() && ! is_home() && is_page() ) : ?>
              
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                </ol>
              </nav>

              <?php endif; ?>


            </div>
        </div>
        
        <div class="row">
          <?php
            if ( have_posts() ) {

              // Load posts loop.
              while ( have_posts() ) {
                the_post();
                get_template_part( 'template-parts/content' );
              }

              // Previous/next page navigation.
              //twentynineteen_the_posts_navigation();

            } else {

              // If no content, include the "No posts found" template.
              get_template_part( 'template-parts/content', 'none' );

            }
          ?>
        </div>
        
          
        <div class="col-12 mt-5 loadmore_post text-center">
          <a href="" class="text-decoration-none">Load more..</a>
        </div>

        </div>
      </div>
    </section><!-- #top-destinations -->

<?php get_footer(); ?>
