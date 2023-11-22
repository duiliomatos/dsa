<?php
/**
 * Template de Pets
 */
get_header(); ?>


<div class="container">
  <div class="row">
    <div class="col-md-8">
        <article>
      <header>
        <h1>Informações sobre o Pet</h1>
      </header>

      <div class="row pet">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-6">
          <h2><?php the_title(); ?></h2>
          <p><?php the_meta(); ?></p>
        </div>

        <div class="col-md-6">
          <figure>
              <img class="image-pet" src="<?php the_post_thumbnail_url('custon-page'); ?>"/>
          </figure>
        </div>
      <?php endwhile; else : ?>
            <article class="col">
              <p>Ops! Ocorreu um erro inesperado!</p>
            </article>
      <?php endif; ?>

      </div>

      <a href="<?php echo get_post_type_archive_link( 'pets' ); ?>">Veja todos os Pets</a>

    </article>
      </div>

      <div class="col-md-4">
          <article>
        <?php dynamic_sidebar( 'sidebar-page' ); ?>
          </article>
      </div>
</div>
</div>

<?php get_footer(); ?>
