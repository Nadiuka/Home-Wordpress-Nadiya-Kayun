<?php

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="clients-say">
                <div class="container">
                    <div class="order">
                        <div class="order-main">
                            <h2><?php echo get_theme_mod('HeaderClients'); ?></h2>
                            <p class="text-order"><?php echo get_theme_mod('TextClients'); ?></p>
                        </div>
                        <div class="number">04</div>
                    </div>
                    <div class="flexslider client clearfix">
                        <ul class="slides">
                            <?php
                            $args = [
                                'post_type' => 'sayings'
                            ];
                            query_posts($args);
                            while (have_posts()) : the_post();

                                get_template_part('template-parts/content', 'sayings');

                            endwhile;
                            wp_reset_query();
                            ?>
                        </ul>
                    </div>
                </div>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();