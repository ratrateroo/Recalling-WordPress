<?php get_header()?>
<section class="page-wrap">
<div class="container">
    <div class="row">

        <?php get_template_part('includes/section', 'archive');?>

        <?php previous_posts_link();?>
        <?php next_posts_link();?>
    </div>
</div>
</section>
<?php get_footer()?>