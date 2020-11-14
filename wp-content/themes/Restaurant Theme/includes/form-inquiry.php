<div id="success_message" class="alert alert-success" style="display:none;"></div>
<form id="form-inquiry">

    <h5>Send and inquiry about <?php the_title();?></h5>

    <input type="hidden" name="registration" value="<?php the_field('registration');?>">


    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="fname" placeholder="First Name" required class="form-control" value="First Name">
        </div>
        <div class="col-lg-6">
            <input type="text" name="lname" placeholder="Last Name" required class="form-control" value="Last Name">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <input type="email" name="email" placeholder="Email Address" required class="form-control"
                value="email@emai.com">
        </div>
        <div class="col-lg-6">
            <input type="tel" name="phone" placeholder="Phone" required class="form-control" value="12345">
        </div>
    </div>

    <div class="form-group">
        <textarea name="inquiry" class="form-control" placeholder="Your inquiry." required>Your inquiry.</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Send your inquiry</button>
    </div>
</form>

<script>
(($) => {

    $('#form-inquiry').submit((event) => {
        event.preventDefault();

        const endpoint = '<?php echo admin_url('admin-ajax.php');?>';
        const form = $('#form-inquiry').serialize();
        const formdata = new FormData;

        formdata.append('action', 'inquiry');
        formdata.append('nonce', '<?php echo wp_create_nonce('ajax-nonce');?>');
        formdata.append('inquiry', form);
        $.ajax(endpoint, {
            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,
            success: (res) => {
                console.log(res);
                $('#form-inquiry').fadeOut(200);
                $('#success_message').text('Thanks for your message.').show();
                $('#form-inquiry').trigger('reset');
                $('#form-inquiry').fadeIn(500);
            },
            error: (err) => {
                console.log(err);
            }

        })

    });
})(jQuery);
</script>