<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title> |@yield('title')|</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }} ">

    @yield('time')

    @yield('alert1')
    <link href="{{ asset('backend/libs/ion-rangeslider/css/ion.rangeSlider.min.css') }} " rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('backend/libs/magnific-popup/magnific-popup.css') }} " rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/css/bootstrap.min.css') }} " id="bootstrap-style" rel="stylesheet" type="text/css" />

    <link href="{{ asset('backend/css/icons.min.css') }} " rel="stylesheet" type="text/css" />

    <link href="{{ asset('backend/css/app.min.css') }} " id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    @yield('styles')
</head>

<body data-topbar="colored">

    <div id="layout-wrapper">

        <header id="page-topbar">

            <div class="navbar-header">
                <div class="d-flex">
                    <div class="navbar-brand-box">
                        <a href="#" class="logo logo-dark bt btn-60">
                            <span class="logo-sm bt btn-12">
                                <img src="{{ asset('backend/images/logo-sm-dark.png') }} " alt="" height="22">
                            </span>

                            <span class="logo-lg bt btn-12">

                                <img src="{{ asset('backend/images/logo-dark.png') }} "
                                    style="height: 0%; width: 50%; object-fit: contain;" alt="" height="24">
                            </span>
                        </a>
                        <a href="#" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('backend/images/logo-sm-light.png') }} " alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('backend/images/logo-light.png') }} "
                                    style="height: 0%;width: 50%;object-fit: contain;" alt="" height="24">
                            </span>
                        </a>

                    </div>

                    <button type="button" class="btn px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>
                <div class="d-flex">
                    <div class="dropdown d-inline-block">
                        <div class="dropdown-menu dropdown-menu-end">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                          <i class="fas fa-sun"></i>
                          <i class="fas fa-moon"></i>
                        </button>
                    </div>

                </div>
            </div>
        </header>

        <div class="vertical-menu">
            <div data-simplebar class="h-100">
                <div class="user-details">
                    <div class="d-flex">
                        <div class="me-2">
                            <img src="" alt="" class="avatar-md rounded-circle">
                        </div>
                    </div>
                </div>
                <div id="sidebar-menu">
                    <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Principal</li>
                        <li>
                            <a href="{{ route('admin.index') }}" class="waves-effect">
                                <i class="fas fa-plus"></i><span class="badge bg-primary float-end"></span>
                                <span>Series</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('view.index') }}" class="waves-effect">
                                <i class="fas fa-plus"></i><span class="badge bg-primary float-end"></span>
                                <span>Mas Populares</span>
                            </a>
                        </li>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
        @yield('content')

        <footer class="footer">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-sm-12 text-center">
                      <script>
                          document.write(new Date().getFullYear())
                      </script>
                      © Full Tecnologia <span class="d-none d-sm-inline-block">
                  </div>
              </div>
          </div>
      </footer>

        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Ajustes</h5>
                </div>
                <hr class="" />
                <h6 class="text-center mb-0">Seleccione tema</h6>
                <div class="p-4">
                    <div class="mb-2">
                        <label for="light-mode-switch" class="cursor-pointer user-select-none">
                            <img src="{{ asset('backend/images/layouts/layout-1.png') }} "
                                class="img-fluid img-thumbnail image-scale" alt="">
                        </label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="radio" class="form-check-input theme-choice cursor-pointer" id="light-mode-switch"
                            checked />
                        <label class="form-check-label cursor-pointer user-select-none" for="light-mode-switch">Tema
                            claro</label>
                    </div>

                    <div class="mb-2">
                        <label for="dark-mode-switch" class="cursor-pointer user-select-none">
                            <img src="{{ asset('backend/images/layouts/layout-2.png') }}"
                                class="img-fluid img-thumbnail image-scale" alt="">
                        </label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input type="radio" class="form-check-input theme-choice cursor-pointer" id="dark-mode-switch"
                            data-bsStyle="{{ asset('backend/assets/css/bootstrap-dark.min.css') }}"
                            data-appStyle="{{ asset('backend/assets/css/app-dark.min.css') }}" />
                        <label class="form-check-label cursor-pointer user-select-none" for="dark-mode-switch">Tema
                            oscuro</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="rightbar-overlay"></div>
        <script src="{{ asset('backend/libs/jquery/jquery.min.js') }} "></script>
        <script src="{{ asset('backend/libs/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="{{ asset('backend/libs/metismenu/metisMenu.min.js') }} "></script>
        <script src="{{ asset('backend/libs/simplebar/simplebar.min.js') }} "></script>
        <script src="{{ asset('backend/libs/node-waves/waves.min.js') }} "></script>
        <script src="{{ asset('backend/libs/jquery-sparkline/jquery.sparkline.min.js') }} "></script>
        <script src="{{ asset('backend/libs/peity/jquery.peity.min.js') }} "></script>
        <script src="{{ asset('backend/libs/morris.js/morris.min.js') }} "></script>
        <script src="{{ asset('backend/libs/raphael/raphael.min.js') }} "></script>
        {{-- <script src="{{ asset ('backend/js/pages/dashboard.init.js') }} "></script> --}}
        <script src="{{ asset('backend/js/app.js') }} "></script>
        <script src="{{ asset('backend/libs/magnific-popup/jquery.magnific-popup.min.js') }} "></script>
        <script src="{{ asset('backend/js/pages/lightbox.init.js') }} "></script>
        <script src="{{ asset('backend/libs/ion-rangeslider/js/ion.rangeSlider.min.js') }} "></script>
        <script src="{{ asset('backend/js/pages/range-sliders.init.js') }} "></script>
        {{-- <script src="{{ asset ('backend/js/pages/jquery.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
        @yield('scripts')


</body>

</html>
