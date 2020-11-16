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
                        <input id="keyword" type="text" name="keyword" placeholder="Type a keyword" class="form-control"
                            value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : '';?>" />
                    </div>
                    <div class="form-group">
                        <label for="brand">Choose a brand</label>
                        <select id="brand" name="brand" class="form-control">
                            <option value="">Choose a brand</option>
                            <?php foreach($brands as $brand): ?>
                            <option <?php if( isset($_GET['brand']) && ( $_GET['brand'] == $brand->slug) ): ?> selected
                                <?php endif;?> value="<?php echo $brand->slug;?>"><?php echo $brand->name;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <button class="btn btn-success btn btn-block">Search</button>
                </form>
            </div>
        </div>


    </div>
</section>

<?php get_footer()?>