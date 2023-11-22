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
        <h1>Pets</h1>
      </header>

      <div class="row pet">

        <?php the_post(); ?>
    		<h2>Lista de Pets:</h2>

        <ul class="list-pet">
        	<?php
        	$rand_posts = get_posts( array(
        		'post_type' => 'pets'
        	) );


        	foreach ( $rand_posts as $post ) :
        		setup_postdata( $post );
        		?>
        		<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        		<?php
        	endforeach;
        	wp_reset_postdata();

        	?>
      </ul>


      </div>
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
