<?php wp_footer() ?>



<div id="footer" class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <?php get_sidebar("primary"); ?>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    
    <?php wp_nav_menu(
      array(
      "theme_location" => "footer-menu",
      "container"      => "",
      "menu_class"     => "nav col-md-4 justify-content-end", 
      "before"         => '<li href="#" class="nav-item">',
      "after"          => "</li>",
      "add_a_class"    => "nav-link px-2 text-muted",
      ) 
    ); ?>
  </footer>
</div>



</body>

</html>

