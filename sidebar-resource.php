				<div id="sidebar-resource" class="sidebar" role="complementary">
        
          <nav role="navigation">
  
  <?php wp_nav_menu(array(
    'container' => false,                           // remove nav container
    'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    'menu_class' => 'resource-nav',               // adding custom nav class
    'theme_location' => 'resource-nav',                 // where it's located in the theme
    'before' => '',                                 // before the menu
    'after' => '',                                  // after the menu
    'link_before' => '',                            // before each link
    'link_after' => '',                             // after each link
    'depth' => 0,                                   // limit the depth of the nav
    'fallback_cb' => ''                             // fallback function (if there is one)
  )); ?>

</nav>

					<?php if ( is_active_sidebar( 'sidebar-resource' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-resource' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

					<?php endif; ?>

				</div>
