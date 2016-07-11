---
redirect: 'http://site3.julius3d.com'
---


<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

<!-- Image Background, very top of the page -->
<div class="image-parallax" style="color:#ffffff;">
    <div class="slide-content light">
        <div class="align-center">
            <div class="top-logo">
                <img src="user/themes/imgs/h7.jpg" alt="logo">
            </div>
        </div>
    </div>
</div>


<div class="row section-head">
    <div class="twelve columns">
        <h1>Contact <i> Reno Real Estate Team.</i></h1>
        <p>Let's get started with finding, or selling, that next perfect home for you.</p>
    </div>
</div>

<!-- ======== Email via PHP script ======== -->
<div class="row" style="text-align: center;">
    <div class="twelve columns">
        <form id="contact-form" role="form">
            <div class="mc-field-group">
                <label class="sr-only" for="c_name">Name</label>
                <input type="text" id="c_name" class="form-control" name="c_name" placeholder="Name">
            </div>

            <div class="mc-field-group">
                <label class="sr-only" for="c_email">Email address</label>
                <input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
            </div>

            <div class="mc-field-group">
                <textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Your message"></textarea>
            </div>

            <button type="submit" class="btn btn-custom-1">
                <i class="fa fa-arrow-circle-right icon-before"></i> Send it
            </button>
        </form>
    </div>

    <div class="ajax-response"></div>
</div>
<!-- This script will invoke the PHP email script -->
<script type="text/javascript">
    (function ($) {
        $("#contact-form").submit(function(e) {

            e.preventDefault();

            var c_name = $("#c_name").val();
            var c_email = $("#c_email").val();
            var c_message = $("#c_message ").val();
            var responseMessage = $('.ajax-response');

            if (( c_name== "" || c_email == "" || c_message == "") || (!isValidEmailAddress(c_email) )) {
                responseMessage.fadeIn(500);
                responseMessage.html('<i class="fa fa-warning"></i> Check all fields.');
            }

            else {
                $.ajax({
                    type: "POST",
                    url: "../contactForm.php",
                    dataType: 'json',
                    data: {
                        c_email: c_email,
                        c_name: c_name,
                        c_message: c_message
                    },
                    beforeSend: function(result) {
                        $('#contact-form button').empty();
                        $('#contact-form button').append('<i class="fa fa-cog fa-spin"></i> Wait...');
                    },
                    success: function(result) {
                        if(result.sendstatus == 1) {
                            responseMessage.html(result.message);
                            responseMessage.fadeIn(500);
                            $('#contact-form').fadeOut(500);
                        } else {
                            $('#contact-form button').empty();
                            $('#contact-form button').append('<i class="fa fa-retweet"></i> Try again.');
                            responseMessage.html(result.message);
                            responseMessage.fadeIn(1000);
                        }
                    }
                });
            }

            return false;

        });
    })(jQuery);
</script>



<!-- ======== MailChimp Signup Form ======== -->
<div class="row">
    <div class="twelve columns">
        <div id="mc_embed_signup">

            <form action="//juliusalvarado.us13.list-manage.com/subscribe/post?u=77ccce123501634e472222b21&amp;id=ea1c449e79"
                  method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate"
                  target="_blank" novalidate>

                <div id="mc_embed_signup_scroll">
                    <h2>Subscribes to our mailing list <i class="fa fa-thumbs-o-up"></i> </h2>

                    <!-- forms start -->
                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
                        <input type="email" value="" name="EMAIL" class="required email animated fadeInLeftBig show"
                               id="mce-EMAIL">
                    </div>

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>

                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_77ccce123501634e472222b21_ea1c449e79" tabindex="-1" value="">
                    </div>
                    <input class="animated fadeInLeftBig show" type="submit" value="Contact Us" name="subscribe"
                           id="mc-embedded-subscribe">
                </div>
            </form>
        </div>

        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
        <script type='text/javascript'>
            (function ($) {
                window.fnames = new Array();
                window.ftypes = new Array();
                fnames[0] = 'EMAIL';
                ftypes[0] = 'email';
                fnames[1] = 'FNAME';
                ftypes[1] = 'text';
                fnames[2] = 'LNAME';
                ftypes[2] = 'text';
            }(jQuery));
            var $mcj = jQuery.noConflict(true);
        </script>
        <!--End mc_embed_signup-->
        <p>
            <small>We never share your information or use it to spam you.</small>
        </p>
    </div>

</div>