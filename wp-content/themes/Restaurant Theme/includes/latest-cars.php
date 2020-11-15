<?php
    $args = [
        'post_type' => 'cars',
    ];
    $query = new WP_Query($args);
?>
<?php if( $query->have_posts() ):?>
    <?php while( $query->have_posts() ): $query->the_post(); ?>
    <div class="card">    
        <div class="card-body">
            <h3><?php the_title();?></h3>        
            <h3?><?php the_field('registration');?></h3>
        </div>
    </div>
    <?php endwhile;?>
<?php endif; ?>