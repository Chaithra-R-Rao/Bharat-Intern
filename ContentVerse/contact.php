<?php require "header.php" ?>

<header class="masthead" style="background-image: url('assets/img/contact-bg.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto position-relative">
                <div class="site-heading">
                    <h1>Contact ContentVerse</h1><span class="subheading">Have questions? We have answers.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="container">
    <div class="row" style="backdrop-filter: opacity(1);-webkit-backdrop-filter: opacity(1);opacity: 1;background: linear-gradient(lavenderblush 33%, lavender 78%);border-radius: 15px;">
        <div class="col-md-10 col-lg-8 mx-auto">
            <p>Want to get in touch? Fill out the form below to send us a message and we will get back to you as soon as possible!</p>

            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == "sqlerror") {
                    echo '<p class="signuperror">Database connection error!</p>';
                }
            } elseif (isset($_GET['send']) && $_GET['send'] == "success") {
            ?>
                <script>
                    swal("Done!", "Message sent successfully!", "success");
                </script>
            <?php
            }
            ?>

            <form id="contactForm" method="post" action="includes/register.inc.php" autocomplete="off">
                <div class="control-group">
                    <div class="form-floating controls mb-3"><input class="form-control" type="text" name="name" required="" placeholder="Name"><label class="form-label" for="name">Name</label><small class="form-text text-danger help-block"></small></div>
                </div>
                <div class="control-group">
                    <div class="form-floating controls mb-3"><input class="form-control" type="email" name="email" required="" placeholder="Email Address"><label class="form-label">Email Address</label><small class="form-text text-danger help-block"></small></div>
                </div>
                <div class="control-group">
                    <div class="form-floating controls mb-3"><input class="form-control" type="tel" name="phone" required="" placeholder="Phone Number"><label class="form-label">Phone Number</label><small class="form-text text-danger help-block"></small></div>
                </div>
                <div class="control-group">
                    <div class="form-floating controls mb-3"><textarea class="form-control" name="message" data-validation-required-message="Please enter a message." required="" placeholder="Message" style="height: 150px;"></textarea><label class="form-label">Message</label><small class="form-text text-danger help-block"></small></div>
                </div>
                <div id="success"></div>
                <div class="mb-3"><button class="btn btn-primary" type="submit" name="send">Send</button></div>
            </form>

        </div>
    </div>
</div>
<hr>

<?php require "footer.php" ?>