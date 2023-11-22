<?php
/**
 * Template de Posts
 */
get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article>
              <header>
                <h1><?php the_title(); ?></h1>
                <p>Autor: <?php the_author(); ?></p>
              </header>
             <?php the_content(); ?>
            </article>
      <?php endwhile; else : ?>
            <article>
              <p>Ops! Ocorreu um erro inesperado!</p>
            </article>
      <?php endif; ?>

      </div>

      <div class="col-md-4">
          <article>
        <?php dynamic_sidebar( 'sidebar-page' ); ?>
      </article>
      </div>
</div>
</div>

<?php get_footer(); ?>
