<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="plugin/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugin/cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">

    <link rel="stylesheet" href="plugin/css/animate.css">
    <link rel="stylesheet" href="plugin/css/flaticon.css">
    <link rel="stylesheet" href="plugin/css/tiny-slider.css">
    <link rel="stylesheet" href="plugin/css/glightbox.min.css">
    <link rel="stylesheet" href="plugin/css/aos.css">
    <link rel="stylesheet" href="plugin/css/style.css">

    <script src="plugin/js/bootstrap.bundle.min.js"></script>
    <script src="plugin/jquery/jquery-3.7.1.min.js"></script>
</head>

<body>

    <div class="py-4 top-wrap">
        <div class="container-xl">
            <div class="row d-flex align-items-start">

                <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span class="fa fa-brands fa-whatsapp"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="con"> <span>+62 813 9493 9265</span></p>
                        <p class="con">Hubungi Kami Sekarang</p>
                    </div>
                </div>

                <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="fa fa-map"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="hr"><span>Lokasi Kami</span></p>
                        <p class="con">Suite 721 New York NY 10016</p>
                    </div>
                </div>

                <div class="col-md topper d-flex mb-md-0 align-items-xl-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="fa fa-connectdevelop"></span>
                    </div>
                    <div class="text pl-3 pl-md-3">
                        <p class="con"><span>Connect </span> <span>with us</span></p>
                        <p class="con"><a href="#">Facebook</a> <a href="#">Twitter</a> <a
                                href="#">Dribbble</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg ftco-navbar-light">
        <div class="container-xl">
            <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                <img src="plugin/images/stainaa.png" alt="Logo" class="img-fluid" style="max-height: 50px;">
                <span class="ml-2 d-inline-block">STAINAA</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/tentang') }}">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/pendidikan') }}">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/kemahasiswaan') }}">Kemahasiswaan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/artikel') }}">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/akreditasi') }}">Akreditasi</a></li>
                </ul>
                <p class="mb-0"><a href="https://pmb.stainaa.ac.id/" target="_blank" class="btn btn-primary rounded">Pendaftaran</a></p>
            </div>
        </div>
    </nav>

    @yield('konten')

    <footer class="ftco-footer">
        <div class="container-xl">
            <div class="row mb-5 pb-5 justify-content-between">
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2 logo d-flex">
                            <a class="navbar-brand align-items-center" href="index.html">
                                <span class="">Oakberry <small>Real Estate Agency</small></span>
                            </a>
                        </h2>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                        </p>
                        <ul class="ftco-footer-social list-unstyled mt-2">
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Offers</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Properties</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Agents</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Locations</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Clients Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Blog</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Quick Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Terms &amp;
                                    Conditions</a>
                            </li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>User's Guide</a></li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Support Center</a>
                            </li>
                            <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Press Info</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St.
                                        Mountain
                                        View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2
                                            392 3929
                                            210</span></a></li>
                                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span
                                            class="text"><span class="__cf_email__"
                                                data-cfemail="a6cfc8c0c9e6dfc9d3d4c2c9cbc7cfc888c5c9cb">[email&#160;protected]</span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 py-5 bg-darken">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="mb-0" style="color: rgba(255,255,255,.5); font-size: 13px;">Copyright &copy;
                            <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This
                            template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a
                                href="https://colorlib.com/" target="_blank" rel="nofollow noopener">Colorlib</a>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="plugin/js/tiny-slider.js"></script>
    <script src="plugin/js/glightbox.min.js"></script>
    <script src="plugin/js/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false">
    </script>
    <script src="plugin/js/google-map.js"></script>
    <script src="plugin/js/main.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"8c62f2e99ca33e24","version":"2024.8.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true}},"token":"cd0b4b3a733644fc843ef0b185f98241","b":1}'
        crossorigin="anonymous"></script>

</body>

<!-- Mirrored from preview.colorlib.com/theme/oakberry/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Sep 2024 15:46:54 GMT -->

</html>