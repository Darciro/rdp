<nav id="main-nav" class="fixed-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav-canvas" aria-controls="nav-canvas">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div id="nav-canvas" class="offcanvas offcanvas-start" tabindex="-1" aria-labelledby="nav-canvas-label">
        <div class="offcanvas-body">
            <?php
            wp_nav_menu(array(
                'menu' => 'main-navigation',
                'theme_location' => 'main-navigation',
                'menu_class' => 'main-menu',
            ));
            ?>
        </div>
    </div>
</nav>