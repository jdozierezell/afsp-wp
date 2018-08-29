<header class="site-header">
    <div class="site-header__logo m-col-3">
        <a href="<?= get_home_url() . '/dashboard'; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/images/afsp_logo.png" alt="AFSP Logo" />
        </a>
    </div>
    <?php if (!is_page('login')) : ?>
        <div class="mobile-nav m-col-9">
            <button class="btn btn--rounded btn__icon bg-brand-blue" id="primary-nav-mobile-button">
                <i class="far fa-bars"></i>
            </button>
            <button class="btn btn--rounded btn__icon bg-brand-blue" id="search-mobile-button">
                <i class="far fa-search"></i>
            </button>
        </div>
        <?php get_template_part('templates/form', 'search'); ?>
    <?php endif; ?>
</header>
