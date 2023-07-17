<?php
include_once('./contact-process.php');
?>


<section class="container-fluid py-5 text-white" id="contact" data-aos="fade-up" data-aos-duration="500">
    <div class="container">
        <h2 class="text-center py-3 fw-bold"> Contact Us </h2>
        <div class="row">
            <?php if ($is_submitted) {
                echo "<div class='col-md-6 p-3 d-flex align-items-center justify-content-center border-2' >
                <div class='text-white submit-message p-4'>
              $submit_message
              </div>
              <a href='index.php' class='text-white submit-message p-4' >
              Resend
              </a>
            </div>";
            } else { ?>
            <form class="col-md-6 p-3" method="post" id="form">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php if (!empty($name)) echo $name; ?>"
                        id="name" placeholder="Enter your name">
                    <?php
                        if (!empty($error_name)) {
                            echo "<div class='alert alert-danger d-flex align-items-center mt-2' role='alert'>
                            <div>
                            $error_name
                            </div>
                        </div>";
                        }
                        ?>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                        value="<?php if (!empty($email)) echo $email; ?>" id="email" placeholder="Enter your email">
                    <?php
                        if (!empty($error_email)) {
                            echo "<div class='alert alert-danger d-flex align-items-center mt-2' role='alert'>
                        <div>
                            $error_email
                        </div>
                        </div>";
                        }
                        ?>
                </div>

                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control"
                        value="<?php if (!empty($subject)) echo $subject; ?>" id="subject"
                        placeholder="Enter the subject of your message">
                    <?php
                        if (!empty($error_subject)) {
                            echo "<div class='alert alert-danger d-flex align-items-center mt-2' role='alert'>
                        <div>
                            $error_subject
                        </div>
                        </div>";
                        }
                        ?>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" name="message" value="<?php if (!empty($message)) echo $message; ?>"
                        id="message" rows="5" placeholder="Enter your message"></textarea>
                    <?php
                        if (!empty($error_message)) {
                            echo "<div class='alert alert-danger d-flex align-items-center mt-2' role='alert'>
                    <div>
                        $error_message
                    </div>
                    </div>";
                        }
                        ?>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-submit">Submit</button>


            </form>
            <?php }; ?>
            <div class="col-md-6" style="height:500px;">
                <div id="embed-map-display" style="height:100%; width:100%;max-width:100%;"><iframe
                        style="height:100%;width:100%;border:0;" frameborder="0"
                        src="https://www.google.com/maps/embed/v1/place?q=London,+UK&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                </div>
                <style>
                #embed-map-display img.text-marker {
                    max-width: none !important;
                    background: none !important;
                }

                img {
                    max-width: none
                }
                </style>
            </div>

        </div>
    </div>
</section>