<?php include_once('./header.php') ?>

<div id="spinnerContainer">
    <div class="spinner-backdrop"></div>
    <div class="spinner-container">
        <img src="./Logo/logo.png" alt="">
        <div class="spinner">
        </div>
    </div>
</div>

<?php include_once('./carousel.php') ?>

<section class="container py-5" id="about">
    <h2 class="text-center fw-bold py-3"> About Us </h2>
    <div class="row mt-4 align-items-center">
        <div class="col-sm-6 mb-3" data-aos="fade-right" data-aos-duration="1000">
            <img src="./images/lamborghini.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-sm-6" data-aos="fade-left" data-aos-duration="1000">
            <h5 class="fs-1 mb-2">We are the Car Garage</h5>
            <p>Welcome to Car Garage, a captivating journey through the world of cars captured through the lens. We are
                a
                passionate team of car enthusiasts and photographers dedicated to preserving and sharing the beauty,
                stories, and emotions that cars evoke. </p>
            <p>
                We believe that cars are more than just machines. They are works of art, symbols of freedom, and sources
                of inspiration. Our mission is to celebrate the timeless allure of automobiles and showcase their unique
                personalities and design.</p>

        </div>
    </div>
</section>

<?php include_once('./gallery.php') ?>
<?php include_once('./contact.php') ?>


<?php include_once('./footer.php') ?>