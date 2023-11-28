<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>second|news</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        @include('public.partials.topbar')
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        @include('public.partials.navbar')
    </div>
    <!-- Navbar End -->

    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                    @yield('slideStart')
                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    @yield('slideEnd')
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->

    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                @yield('breakingNewsStart')
            </div>
        </div>
    </div>
    <!-- Breaking News End -->

    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        @yield('featuredNewsStart')
    </div>
    <!-- Featured News Slider End -->

    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">

                        @yield('newsWithSidebar')
                        @yield('cardNewsSidebar')

                    </div>
                </div>


                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    @yield('socialMedia')
                    <!-- Social Follow End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">

                            @yield('popularNews')

                    </div>
                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="mb-3">
                        @yield('tagsStart')
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('container')
    </div>
    <!-- News With Sidebar End -->

    <!-- Footer Start -->
    @include('public.partials.footer')
    <!-- Footer End -->

    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
