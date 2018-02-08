<?php
get_header(); ?>

    <section class="about-us">
        <div class="container">
            <div class="order">
                <div class="order-main">
                    <h2><?php echo get_theme_mod('SecondHeader'); ?></h2>
                    <p class="text-order"><?php echo get_theme_mod('TextAbout'); ?></p>
                </div>
                <div class="number">01</div>
            </div>
            <div class="clearfix">
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
                <div class="expertise">
                    <h3><?php echo get_theme_mod('HeaderExpertise'); ?></h3>
                    <p><?php echo get_theme_mod('TextExpertise'); ?></p>
                </div>
            </div>
        </div>
    </section>
    <section class="practis-area">
        <div class="container">
            <div class="order">
                <div class="order-main">
                    <h2><?php echo get_theme_mod('HeaderPractis'); ?></h2>
                    <p class="text-order"><?php echo get_theme_mod('TextPractis'); ?></p>
                </div>
                <div class="number">02</div>
            </div>
            <ul class="practis clearfix">
                <?php
                $args = [
                    'post_type' => 'practis'
                ];
                query_posts($args);
                while (have_posts()) : the_post();

                    get_template_part('template-parts/content', 'practis');

                endwhile;
                wp_reset_query();
                ?>
            </ul>
        </div>
    </section>
    <section class="our-attorney">
        <div class="container">
            <div class="order">
                <div class="order-main">
                    <h2><?php echo get_theme_mod('HeaderAttorney'); ?></h2>
                    <p class="text-order"><?php echo get_theme_mod('TextAttorney'); ?></p>
                </div>
                <div class="number">03</div>
            </div>
            <ul class="attorney clearfix">
                <li>
                    <a href="#">
                        <img src="img/adam.png" alt="adam">
                        <h3>Adam Suarez</h3>
                        <div>Attorney General</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/lina.png" alt="lina">
                        <h3>Lina Suarez</h3>
                        <div>Attorney General</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/jems.png" alt="jems">
                        <h3>Jems Snow</h3>
                        <div>Attorney General</div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="img/linister.png" alt="linister">
                        <h3>Linister White</h3>
                        <div>Attorney General</div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="clients-say">
        <div class="container">
            <div class="order">
                <div class="order-main">
                    <h2><?php echo get_theme_mod('HeaderClients'); ?></h2>
                    <p class="text-order"><?php echo get_theme_mod('TextClients'); ?></p>
                </div>
                <div class="number">04</div>
            </div>
            <div class="client clearfix">
                <div class="client-img">
                    <img class="yellow-background" src="img/yelloy-background.png" alt="yelloy-background">
                    <img class="ceo-alon" src="img/alon.png" alt="alon">
                </div>
                <div class="client-opinion">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                        dolores
                        et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem.Lorem ipsum dolor sit
                        amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    <h3>Alon Smith</h3>
                    <div class="ceo">CEO of AVC Group</div>
                    <div class="dot">
                        <ul class="clearfix">
                            <li class="active"><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="publication-tite">
        <div class="container">
            <div class="order">
                <div class="order-main">
                    <h2><?php echo get_theme_mod('HeaderPublications'); ?></h2>
                    <p class="text-order"><?php echo get_theme_mod('TextPublications'); ?></p>
                </div>
                <div class="number">05</div>
            </div>
            <ul class="clearfix">
                <li class="publication">
                    <article>
                        <a href="#">
                            <img src="img/publication1.png" alt="publication1">
                            <h3>Publication Tite</h3>
                            <div class="clearfix">
                                <div class="by">By Adam Suarez</div>
                                <time>12 Now, 2015</time>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam
                                et justo duo dolores et ea rebum.</p>
                            <ul class="comments-share clearfix">
                                <li class="comments"><a href="#">29 Comments</a></li>
                                <li class="share"><i class="fa fa-share" aria-hidden="true"></i><a href="#">Share</a>
                                </li>
                            </ul>
                        </a>
                    </article>
                </li>
                <li class="publication">
                    <article>
                        <a href="#">
                            <img src="img/publication2.png" alt="publication1">
                            <h3>Publication Tite</h3>
                            <div class="clearfix">
                                <div class="by">By Adam Suarez</div>
                                <time>12 Now, 2015</time>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam
                                et justo duo dolores et ea rebum.</p>
                            <ul class="comments-share clearfix">
                                <li class="comments"><a href="#">29 Comments</a></li>
                                <li class="share"><i class="fa fa-share" aria-hidden="true"></i><a href="#">Share</a>
                                </li>
                            </ul>
                        </a>
                    </article>
                </li>
                <li class="publication">
                    <article>
                        <a href="#">
                            <img src="img/publication3.png" alt="publication1">
                            <h3>Publication Tite</h3>
                            <div class="clearfix">
                                <div class="by">By Adam Suarez</div>
                                <time>12 Now, 2015</time>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam
                                et justo duo dolores et ea rebum.</p>
                            <ul class="comments-share clearfix">
                                <li class="comments"><a href="#">29 Comments</a></li>
                                <li class="share"><i class="fa fa-share" aria-hidden="true"></i><a href="#">Share</a>
                                </li>
                            </ul>
                        </a>
                    </article>
                </li>
            </ul>
        </div>
    </section>


<?php
get_footer();


