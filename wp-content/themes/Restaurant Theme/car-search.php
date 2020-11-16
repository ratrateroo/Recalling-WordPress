<?php
/*
Template Name: Car Search
*/

$brands = get_terms([
    'taxonomy' => 'brands',
    'hide_empty' => false,
]);


?>
<?php get_header()?>

<section class="page-wrap">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo home_url('/car-search');?>" method="GET">
                    <div class="form-group">
                        <label for="keyword">Type a keyword:</label>
                        <input id="keyword" type="text" name="keyboard" placeholder="Type a keyword"
                            class="form-control" />
                    </div>
                    <div class="form-group">
                        <label for="brand">Choose a brand</label>
                        <select id="brand" name="brand" class="form-control">
                            <option value="">Choose a brand</option>
                            <?php foreach($brands as $brand): ?>
                            <option value="<?php echo $brand->slug;?>"><?php echo $brand->name;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                </form>
            </div>
        </div>


    </div>
</section>

<?php get_footer()?>