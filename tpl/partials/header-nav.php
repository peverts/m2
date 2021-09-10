<?php if($page_header['show_nav']) { ?>
    <div class="header-item header-item--nav nav uk-visible@m">
        <?php $homeActive = is_front_page() ? 'nav-home current_page_item' : 'nav-home'; ?>
        <nav class="nav-list" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => '')); ?>
        </nav>
    </div>
<?php } ?>
