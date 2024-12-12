<!DOCTYPE html>
<html lang="en">

<head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">


    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="/sneat/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/sneat/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/sneat/assets/vendor/js/helpers.js"></script>
    @yield('css')
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/sneat/assets/js/config.js"></script>
</head>

<body>


    <section class="ftco-menu mb-5 pb-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">
                        <h3>Warkop Selir Hati</h3>
                    </span>
                    <br>
                    <h1 class="mb-5">Daftar Menu</h1>
                </div>
            </div>
            <div class="row d-md-flex">
                <div class="col-lg-12 ftco-animate p-md-5">
                    <div class="row">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="col-md-12 nav-link-wrap mb-5">
                                <div class="nav nav-pills d-flex" id="v-pills-tab" style="flex-wrap: nowrap;">
                                    <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1"
                                        role="tab" aria-controls="v-pills-1" aria-selected="true"
                                        style="text-align: center">Minuman(Kopi)</a>

                                    <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                                        role="tab" aria-controls="v-pills-2" aria-selected="false"
                                        style="text-align: center">Minuman(Teh)</a>

                                    <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3"
                                        role="tab" aria-controls="v-pills-3" aria-selected="false"
                                        style="text-align: center">Minuman(Milkshake)</a>

                                    <a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4"
                                        role="tab" aria-controls="v-pills-4" aria-selected="false"
                                        style="text-align: center">Minuman(Others)</a>

                                    <a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5"
                                        role="tab" aria-controls="v-pills-5" aria-selected="false"
                                        style="text-align: center">Makanan</a>

                                    <a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6"
                                        role="tab" aria-controls="v-pills-6" aria-selected="false"
                                        style="text-align: center">Lainnya</a>
                                </div>
                                <hr style="border: 2px solid #007bff;">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-1-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-7 heading-section text-center ftco-animate">
                                        <a href="#"><span class="subheading">Kopi</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content1')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-2-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-7 heading-section text-center ftco-animate">
                                        <a href="#"><span class="subheading">Teh</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content2')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-3-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-7 heading-section text-center ftco-animate">
                                        <a href="#"><span class="subheading">MilkShake</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content3')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                aria-labelledby="v-pills-4-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-7 heading-section text-center ftco-animate">
                                        <a href="#"><span class="subheading">Others</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content4')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                aria-labelledby="v-pills-5-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-7 heading-section text-center ftco-animate">
                                        <a href="#"><span class="subheading">Makanan</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content5')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-6" role="tabpanel"
                                aria-labelledby="v-pills-6-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-7 heading-section text-center ftco-animate">
                                        <a href="#"><span class="subheading">Lainnya</span></a>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content6')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Recent Blog</h2>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                            <div class="text">
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control
                                        about</a></h3>
                                <div class="meta">
                                    <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Services</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Cooked</a></li>
                            <li><a href="#" class="py-2 d-block">Deliver</a></li>
                            <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                            <li><a href="#" class="py-2 d-block">Mixed</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St.
                                        Mountain View, San Francisco, California, USA</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2
                                            392 3929 210</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@yourdomain.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="icon-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- Core JS -->
    <script src="/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/sneat/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <script src="/sneat/src/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/sneat/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/sneat/src/assets/js/sidebarmenu.js"></script>
    <script src="/sneat/src/assets/js/app.min.js"></script>
    <script src="/sneat/src/assets/libs/simplebar/dist/simplebar.js"></script>
    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="/sneat/assets/js/main.js"></script>
    <script src="js/bootstrap.min.js"></script>


    <!-- Page JS -->
    <script>
        $(".custom-file-input").on("change", function() {
            var filename = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(filename);
        })
    </script>
    @yield('js')
    <!-- Place this tag in your head or just before your close body tag. -->
    @if (session('success'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif



</body>

</html>
