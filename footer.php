
	<footer class="footer">
		<div class="container-fluid">
			<div class="container">

			<div class="row">
        <div class="col-md-6 text-center">
        <?php
				$logo_footer = get_theme_mod( 'logo_footer' );
				if ( $logo_footer ) {
					echo wp_get_attachment_image( $logo_footer, 'full','', array( "class" => "logo-footer" ) );
				} else {
					?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/logo_wp.png" class="logo-footer" />
					<?php
				}
				?>
        </div>
        <div class="col-md-6 text-center">
          <?php dynamic_sidebar( 'sidebar-footer' ); ?>
        </div>
			</div>

				<div class="row">
						<p class="text-center">	&copy; <?php echo date("Y");?> <?php echo get_theme_mod( 'copyright' ); ?></p>
			  </div>

			</div>
		</div>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
