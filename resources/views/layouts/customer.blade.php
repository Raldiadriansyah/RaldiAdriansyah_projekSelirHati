<!DOCTYPE html>
<html lang="en">

<head>
    <title>Daftar Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" type="image/x-icon" href="/sneat/assets/img/backgrounds/warkop.png" />
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
            <div class="row justify-content-center mb-2">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="app-brand-text demo menu-text fw-bolder ms-2" ><img src="/sneat/assets/img/backgrounds/warkop.png" alt="" style="width: 300px; margin: auto; "></span>
                    <br>
                    
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

                    <div class="col-md-12 d-flex align-items-center" style="margin-top: 10px">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                aria-labelledby="v-pills-1-tab">
                                <div class="row justify-content-center mb-5" >
                                    <div class="col-md-3 heading-section text-center ftco-animate" >
                                        <span style="font-family: cursive ; font-style: oblique; font-size: 40px; color: #c7b705"><b>Kopi</b></span>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content1')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-2" role="tabpanel"
                                aria-labelledby="v-pills-2-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-3 heading-section text-center ftco-animate" >
                                        <span style="font-family: cursive ; font-style: oblique; font-size: 40px; color: #c7b705"><b>Teh</b></span>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content2')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-3" role="tabpanel"
                                aria-labelledby="v-pills-3-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-3 heading-section text-center ftco-animate" >
                                        <span style="font-family: cursive ; font-style: oblique; font-size: 40px; color: #c7b705"><b>Milkshake</b></span>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content3')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-4" role="tabpanel"
                                aria-labelledby="v-pills-4-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-3 heading-section text-center ftco-animate" >
                                        <span style="font-family: cursive ; font-style: oblique; font-size: 40px; color: #c7b705"><b>Others</b></span>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content4')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-5" role="tabpanel"
                                aria-labelledby="v-pills-5-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-3 heading-section text-center ftco-animate" >
                                        <span style="font-family: cursive ; font-style: oblique; font-size: 40px; color: #c7b705"><b>Makanan</b></span>
                                    </div>
                                </div>
                                <div class="row">
                                    @yield('content5')
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-6" role="tabpanel"
                                aria-labelledby="v-pills-6-tab">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-md-3 heading-section text-center ftco-animate" >
                                        <span style="font-family: cursive ; font-style: oblique; font-size: 40px; color: #c7b705"><b>Lainnya</b></span>
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

    <script type="text/javascript">
        function showOutOfStockAlert() {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'Stok kosong',
                text: 'Maaf, Item saat ini tidak tersedia.',
                showConfirmButton: true,
                backdrop: false,  
            });
        }
    </script>
    
      <script type="text/javascript">
        function closeModal() {      
            $('#modalTambah').modal('hide');
        }
    </script>


</body>

</html>
