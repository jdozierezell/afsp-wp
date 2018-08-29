<main class="main main--multi-item">
    <?php get_template_part('templates/page', 'header'); ?>
    <?php if (have_rows('ii_content_sections')) :
      if (count(get_field('ii_content_sections')) > 1) :
            $count = 1;
            $toc_count = 1;
            ?>
            <div class="multi-content__wrapper" id="wrapper-0">
                <i class="far fa-caret-circle-right fa-lg multi-header__icon"></i>
                <h2 class="col-12 multi-header" id="header-0">Table of Contents</h2>
                <div class="col-12 multi-section multi-section" id="section-<?= $count; ?>">
                    <ul class="item-list_toc">
                        <?php while (have_rows('ii_content_sections')) : the_row(); ?>
                            <li>
                                <a class="toc-link" id="toc-wrapper-<?= $toc_count; ?>" href="#wrapper-<?= $toc_count; ?>">
                                    <?= get_sub_field('ii_section_title'); ?>
                                </a>
                            </li>
                        <?php
                        $toc_count++;
                        endwhile;
                        ?>
                    </ul>
                </div>
            </div>
        <?php
        endif;
      while (have_rows('ii_content_sections')) : the_row(); ?>
    <div class="multi-content__wrapper" id="wrapper-<?= $count; ?>">
        <i class="far fa-caret-circle-right fa-lg multi-header__icon"></i>
        <h2 class="col-12 multi-header" id="header-<?= $count; ?>"><?= get_sub_field('ii_section_title'); ?></h2>
        <div class="col-12 multi-section" id="section-<?= $count; ?>">
            <?php if (get_sub_field('ii_section_type') === 'text') :
                the_sub_field('ii_section_text');
            elseif (get_sub_field('ii_section_type') === 'list') :
                $post_objects = get_sub_field('ii_section_list');
              if ($post_objects) : ?>
                    <ul class="item-list">
                        <?php foreach ($post_objects as $post) :
                            setup_postdata($post);
                            include(locate_template('templates/page-list-item.php'));
                        endforeach;
                        wp_reset_postdata(); ?>
                    </ul>
                <?php endif;
            endif; ?>
        </div>
    </div>
    <?php $count++;
        endwhile;
    endif; ?>
</main>