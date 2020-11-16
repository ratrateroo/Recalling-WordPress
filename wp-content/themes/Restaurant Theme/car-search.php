<?php
/*
Template Name: Car Search
*/
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
                </form>
            </div>
        </div>


    </div>
</section>

<?php get_footer()?>