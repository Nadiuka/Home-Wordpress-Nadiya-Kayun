<?php

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="history">
                <h3><?php echo get_theme_mod('HeaderHistory'); ?></h3>
                <dl class="history-year clearfix">
                    <?php
                    $args = [
                        'post_type' => 'history'
                    ];
                    query_posts($args);
                    while (have_posts()) : the_post();

                        get_template_part('template-parts/content', 'history');
                    endwhile;
                    wp_reset_query();
                    ?>
                </dl>
            </div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();