<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>AISC 2022 -  Competency</title>
</head>
<body class="bg-landing relative">
    <div style="background-image: url('images/bg-sos.png')" class="bg-cover h-landing bg-local relative h-full z-10">
        <nav class="sticky top-0 z-20 bg-white font-montserrat backdrop-filter backdrop-blur-lg bg-opacity-30">
            <div class="mx-auto px-24 py-2">
                <div class="flex items-center justify-between h-20">
                    <span class="text-2xl text-gray-900 font-semibold">
                        LOGO AISC
                    </span>
                    <div class="text-lg flex space-x-20 text-gray-900">
                        <a href="#">Volunteer</a>
                        @auth
                            <a href="#">Admin</a>
                        @endauth
                        <a href="">Event</a>
                        <a href="">Competition</a>
                    </div>
                </div>
            </div>
        </nav>
        @yield('content')

        @yield('content')
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        $(document).ready(function() {
        var $swiper = $(".swiper-container");
        var $bottomSlide = null; 
        var $bottomSlideContent = null; 
        var mySwiper = new Swiper(".swiper-container", {
            spaceBetween: 1,
            slidesPerView: 3,
            centeredSlides: true,
            roundLengths: true,
            loop: true,
            loopAdditionalSlides: 30,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
            }
        });
    });
    </script>
</body>
</html>