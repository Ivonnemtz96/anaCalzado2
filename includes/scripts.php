<script data-cfasync="false"
    src="https://html.physcode.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="/asset/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="/asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/asset/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="/asset/js/owl.carousel.js"></script>
<script type="text/javascript" src="/asset/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<!-- icons de redes sociales -->
<script src="https://kit.fontawesome.com/a66c8c86d9.js" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {

    $('.image-popup-vertical-fit').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        mainClass: 'mfp-img-mobile',
        image: {
            verticalFit: true
        }

    });

    $('.image-popup-fit-width').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        image: {
            verticalFit: false
        }
    });

    $('.image-popup-no-margins').magnificPopup({
        type: 'image',
        closeOnContentClick: true,
        closeBtnInside: false,
        fixedContentPos: true,
        mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
        image: {
            verticalFit: true
        },
        zoom: {
            enabled: true,
            duration: 300 // don't foget to change the duration also in CSS
        }
    });

});
</script>
<script>
    // Obtén una referencia al botón mediante su ID
    var boton = document.getElementById("vermas");

    boton.onclick = function() {
        window.open("https://www.instagram.com/anatorrescalzado/", "_blank");
    };
</script>