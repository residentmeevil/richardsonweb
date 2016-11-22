<?php
function primary_nav(){ ?>

<div class="navigation-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <nav id="site-navigation" class="main-navigation" role="navigation">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->
      </div>
    </div>
  </div>
</div>

</header><!-- #masthead -->

<?php  } ?>
