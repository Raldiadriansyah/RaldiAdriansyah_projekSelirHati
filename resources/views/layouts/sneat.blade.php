<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="/sneat/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Warkop Selir Hati</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/sneat/assets/img/backgrounds/warkop.png" />
    <link rel="stylesheet" href="/sneat/src/assets/css/styles.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>

  <body>
    
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
 

         
          
          <ul class="menu-inner py-1">
            <span class="app-brand-text demo menu-text fw-bolder ms-2" ><img src="/sneat/assets/img/backgrounds/warkop.png" alt="" style="width: 200px; margin: auto; margin-left: 20px; margin-bottom: 20px"></span>
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="/Home" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-header small text-uppercase" style="margin-top: 2px; margin-bottom: 2px">
              <span class="menu-header-text">Menu</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Manajemen Menu</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/Menu" class="menu-link">
                    <div data-i18n="Account">Data Menu</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/Menu/create" class="menu-link">
                    <div data-i18n="Account">Tambah Data Menu</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase" style="margin-top: 2px; margin-bottom: 2px">
              <span class="menu-header-text">Penjualan</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Manajemen Penjualan</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/Penjualan" class="menu-link">
                    <div data-i18n="Account">Data Penjualan</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/laporan-penjualan/create" class="menu-link">
                    <div data-i18n="Account">Laporan</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-header small text-uppercase" style="margin-top: 2px; margin-bottom: 2px">
              <span class="menu-header-text">Pengeluaran</span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Manajemen Pengeluaran</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="/Pengeluaran" class="menu-link">
                    <div data-i18n="Account">Data Pengeluaran</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/Pengeluaran/create" class="menu-link">
                    <div data-i18n="Account">Tambah Data Pengeluaran</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="/laporan-pengeluaran/create" class="menu-link">
                    <div data-i18n="Account">Laporan</div>
                  </a>
                </li>
              </ul>
            </li>
            @if (auth()->user() && auth()->user()->role == 'owner')
                <li class="menu-header small text-uppercase" style="margin-top: 2px; margin-bottom: 2px">
                  <span class="menu-header-text">User</span>
                </li>
                <li class="menu-item">
                  <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                    <div data-i18n="Account Settings">Manajemen User</div>
                  </a>
                  <ul class="menu-sub">
                    <li class="menu-item">
                      <a href="/user" class="menu-link">
                        <div data-i18n="Account">Data User</div>
                      </a>
                    </li>
                  </ul>
                </li>
              @endif

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar" style="width: 100%; height:70px; margin-top: 0%"
          >
    

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse" style="margin-bottom: 20px; margin-top: 0px">
             
              @yield('judul')
            
              <ul class="navbar-nav flex-row align-items-center ms-auto">
              <div style="margin-top: 15px; margin-right: 10px">
                <div class="flex-grow-1">
                  <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                  <small class="text-muted">{{ auth()->user()->role }}</small>
                </div>
              </div>
      
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow p-0" href="javascript:void(0);" data-bs-toggle="dropdown">
                    
                    <div class="avatar avatar-online" style="margin-top: 10px">
                      <img src="/sneat/assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle">
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a href="/login"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"
                      class="btn btn-outline-primary mx-3 mt-2 d-block"
                      ><i class="bx bx-exit bx-md me-3"></i><span>Logout</span></a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                    </li>
                    
                  </ul>
                </li>
                <!--/ User -->
                
      
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          
            <!-- Content -->

            <div class="container-xxl container-p-y">
              
              @yield('content')
            </div>
              <!--/ Layout Demo -->
      
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0">
                 
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
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

    <!-- Page JS -->
    <script>
        $(".custom-file-input").on("change", function() {
            var filename = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(filename);
        })
    </script>
    @yield('js')

    @if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 2000,
                backdrop: false,
            });
        });
    </script>
    @endif
    
    @if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '{{ session('error') }}',
                showConfirmButton: false,
                timer: 2000,
                backdrop: false,
            });
        });
    </script>
    @endif

    <script type="text/javascript">
      $(function() {
          $(document).on('click', '#delete', function(e) {
              let form = $(this).closest("form");
  
              e.preventDefault(); // Mencegah form langsung submit
              Swal.fire({
                  title: "Apakah Anda Yakin?",
                  text: "Jika ya maka data akan dihapus",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  confirmButtonText: "Ya, Hapus!",
                  cancelButtonText: "Batal",
                  backdrop: false,
              }).then((result) => {
                  if (result.isConfirmed) {
                      // Submit form setelah konfirmasi
                      form.submit(); 
                 
                  }
              });
          });
      });
  </script>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@yield('scripts')


    
    
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
