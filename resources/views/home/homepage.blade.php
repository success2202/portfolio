<!DOCTYPE html>
<html lang="en">

@include('home.headlinks')
<body class="dark">
    <!-- start: Preloader -->
    @include('home.preloader')
    <!-- end: Preloader -->

    <!-- start: Back To Top -->
   @include('home.backToTop')
    <!-- end: Back To Top -->

    <!-- Header Area Start -->
    @include('home.header')
    <!-- Header Area End -->

    <!-- Main Area Start -->
    <main id="home">
        <!-- START: HERO SECTION -->
        @include('home.hero')
        <!-- END: HERO SECTION -->

        <!-- START: FUNFACT SECTION -->
        @include('home.funfact')
        <!-- END: FUNFACT SECTION -->

        <!-- START: SERVICE SECTION -->
        @include('home.service')
        <!-- END: SERVICE SECTION -->

        <!-- START: PROJECT SECTION -->
       
        <!-- END: PROJECT SECTION -->

        <!-- START: ABOUT SECTION -->
        @include('home.about')
        <!-- END: ABOUT SECTION -->

        <!-- START: BRANDS SECTION -->
        
        <!-- END: BRANDS SECTION -->

        <!-- START: EDUCATION & EXPERIENCE SECTION -->
        @include('home.education&experience')
        <!-- END: EDUCATION & EXPERIENCE SECTION -->

        <!-- START: SKILL SECTION -->
        @include('home.skills')
        <!-- END: SKILL SECTION -->

        <!-- START: TESTIMONIAL SECTION -->
       @include('home.testimonial')
        <!-- END: TESTIMONIAL SECTION -->

        <!-- START: CONTACT SECTION -->
       @include('home.contact')
        <!-- END: CONTACT SECTION -->

    </main>
    <!-- Main Area End -->

    {{-- <footer>
    </footer> --}}



    <!-- start: Popup -->
    @include('home.popup')
    <!-- end: Popup -->

    <!-- start: Blog Popup -->

    <!-- end: Blog PopUp -->


    <!-- **** All JS Files ***** -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/backToTop.js"></script>
    <script src="js/smooth-scroll.js"></script>
    <script src="js/appear.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/one-page-nav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/magnific-popup.js"></script>
    <script src="js/validate.min.js"></script>

    <!-- Custom JS -->
    <script src="js/main.js"></script>
    <script src="js/active.js"></script>
    <script src="js/contact-form.js"></script>
    <script>
        // Wait for the document to load
        document.addEventListener('DOMContentLoaded', function () {
            // Check if there's an anchor in the URL (e.g., #skills)
            if (window.location.hash) {
                // Get the target element based on the hash in the URL
                var target = document.querySelector(window.location.hash);
                if (target) {
                    // Scroll to the target element smoothly
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            }
        });
    </script>
</body>


<!-- Mirrored from creativemela.com/themeforest_html/tawam/tawam_html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Sep 2024 08:40:24 GMT -->
</html>