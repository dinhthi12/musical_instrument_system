// Import các thư viện CSS và JS trực tiếp từ node_modules
import "jquery";
import "bootstrap";
import "owl.carousel";
import "bootstrap/dist/css/bootstrap.min.css";
import "owl.carousel/dist/assets/owl.carousel.min.css";
import "/resources/css/base.css";
import "/resources/css/module.css";
//JavaScript code
$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
    });
});
