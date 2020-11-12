<form id="form-inquiry">

    <h5>Send and inquiry about <?php the_title();?></h5>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="fname" placeholder="First Name" required class="form-control">
        </div>
        <div class="col-lg-6">
            <input type="text" name="lname" placeholder="Last Name" required class="form-control">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
            <input type="email" name="email" placeholder="Email Address" required class="form-control">
        </div>
        <div class="col-lg-6">
            <input type="tel" name="phone" placeholder="Phone" required class="form-control">
        </div>
    </div>

    <div class="form-group">
        <textarea name="inquiry" class="form-control" placeholder="Your inquiry." required></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Send your inquiry</button>
    </div>
</form>

<script>
(($) => {

    $('#form-inquiry').submit(() => {
        alert('hi there');
    });
})(jQuery);
</script>