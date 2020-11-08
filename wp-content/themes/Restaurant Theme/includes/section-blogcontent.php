<?php if(have_posts()): while( have_posts()): the_post();?>

<p class="h5">
    <?php echo get_the_date('l, d M Y H:i:s');?>
</p>

<?php the_content();?>

<p class="h5"><?php the_author();?></p>

<p class="h6"><?php
$fname = get_the_author_meta('first_name');
$lname = get_the_author_meta('last_name');
echo $fname . ' ' . $lname;
?></p>

<?php
$tags = get_the_tags();?>

<?php if ($tags):?>

    <?php foreach($tags as $tag): ?>
    <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge badge-pill badge-primary p-2">
        <?php echo $tag->name;?>
    </a>
    <?php endforeach;?>
    <?php endif;?>


<?php
$categories = get_the_category();
foreach($categories as $cat): ?>
     <a href="<?php echo get_category_link($cat->term_id);?>" class="badge badge-secondary p-2">
        <?php echo $cat->name;?>
</a>
<?php endforeach;?>

<?php //comments_template()?>

<?php endwhile; else: endif;?>