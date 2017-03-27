	<div class="row">
		<div class="small-12 medium-4 columns"></div>

		<div class="small-12 medium-4 columns">

                    <?php
						$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
					<?php
					endif; ?>

		</div>
        
		<div class="small-12 medium-4 columns"></div>

	</div>