<header class="banner" role="banner">
  <div class="container navbar-expand-md navbar navbar-default navbar-static-top flex-wrap">

    <div id="branding">
      <a href="<?php echo home_url(); ?>">
        <img alt="Lay Observers Logo" src="<?php bloginfo('template_directory'); ?>/assets/img/lo-logo.svg"
             class="logo-svg"/>
        <img alt="Lay Observers Logo" src="<?php bloginfo('template_directory'); ?>/assets/img/lo-logo.png"
             class="logo-png"/>
      </a>
    </div>

    <div id="search">
      <?php get_search_form(); ?>
    </div>

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
      ?>
    </nav>
  </div>
</header>
