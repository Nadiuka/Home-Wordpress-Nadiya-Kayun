<li>
    <div class="client-img">
        <img class="yellow-background" src="<?php the_field('clientsphoto'); ?>" alt="clientsphoto">
        <img class="ceo-alon" src="<?php the_field('clientsphoto'); ?>" alt="clientsphoto">
    </div>
    <div class="client-opinion">
        <p><?php the_content();?></p>
        <h3><?php the_title(); ?></h3>
        <div class="ceo"><?php the_field('clientsposition'); ?></div>
    </div>
</li>
