<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head class="header fixed-top">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicons -->
    <link href="{{asset('img/genomics.png')}}" rel="icon">
    <link href="{{asset('img/genomics.png')}}" rel="apple-touch-icon">



    <title>{{ config('app.name', 'Genome') }}</title>

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Kanit:400,300&subset=thai,latin' rel='stylesheet'
        type='text/css'>

    <!-- Styles -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">


    <!-- Scripts -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-bootstrap-4@5/bootstrap-4.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
    @livewire('navigation-menu')

    <style>
    body {
        font-size: 20px;
    }

    /* #myBtn {
            display: none;
            position: fixed;
            bottom: 10px;
            right: 10px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
            }

            #myBtn:hover {
            background-color: #555; */
    }
    </style>
</head>


<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">



        <!-- Page Heading -->
        @if (isset($header))
        <header class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                {{ $header }}
            </div>
        </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

   

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">
            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Genoverse</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Designed by <a href="#">Genoverse</a>
                </div>
            </div>
            <div class=" text-right text-md-right pt-3 pt-md-0">
                <div>
                <a>E-mail: genoverse.project@gmail.com</a>
                </div>
                <div>
                <a>Phone: 099-999-9999</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

</body>
<!-- Vendor JS Files -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{ asset('vendor/aos/aos.js')}}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script> -->
<script src="{{ asset('vendor/purecounter/purecounter.js')}}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('js/main.js')}}"></script>

</html>