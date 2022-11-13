<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>AMS - UP3 PLN </title>
    <!-- Favicon icon -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}./asset/frontend/images/ams-bg1.png" />
    <link rel="stylesheet" href="{{ asset('/') }}./asset/frontend/vendor/chartist/css/chartist.min.css" />
    <link href="{{ asset('/') }}./asset/frontend/vendor/bootstrap-select/dist/css/bootstrap-select_dark.min.css"
        rel="stylesheet" />
    <link href="{{ asset('/') }}./asset/frontend/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="{{ asset('/') }}./asset/frontend/css/style.css" rel="stylesheet" />

    <!-- Form step -->
    <link href="{{ asset('/') }}./asset/frontend/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css"
        rel="stylesheet" />
        
        <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
        
        
        
         <!-- Summernote -->
        <link href="{{ asset('/') }}./asset/frontend/vendor/summernote/summernote.css" rel="stylesheet">
        
        <link href="{{ asset('/') }}./asset/frontend/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
        
        <link href="{{ asset('/') }}./asset/frontend/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        @yield('stylesheet')
        @livewireStyles
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="/dashboard" class="brand-logo">
                <img class="logo-abbr" src="{{ asset('/') }}./asset/frontend/images/ams-sq.png" alt="">
                <img class="logo-compact" src="{{ asset('/') }}./asset/frontend/images/ams-sq.png" alt="">
                <img class="brand-title" src="{{ asset('/') }}./asset/frontend/images/ams-lg.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->

        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                {{ $title }}
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">

                                <a href="/buat-kontrak" type="button" class="btn btn-primary mr-auto ml-3 ">Buat
                                    Kontrak (PO)<span class="btn-icon-right"><i class="fa fa-plus-circle"></i></span>
                                </a>
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('/') }}./asset/frontend/images/profile/17.jpg" width="20"
                                        alt="" />
                                    <div class="header-info">
                                        <span class="text-black"><strong>Nama User</strong></span>
                                        <p class="fs-12 mb-0">Level User</p>
                                    </div>


                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a class="nav-link" href="/dashboard">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>                    
                    <h5>
                        <p class="fs-12 ml-3 mt-3 mb-3 text-black">Anggaran</p>
                    </h5>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="bi bi-cash-coin"></i>
                            <span class="nav-text">SKK/PRK </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a class="nav-link {{ Request::is('spkk*') ? 'active' : '' }}" href="/skk">SKK</a>
                            </li>
                            <li><a class="nav-link {{ Request::is('prk*') ? 'active' : '' }}" href="/prk">PRK</a>
                            </li>
                        </ul>
                    </li>
                    {{-- <h5>
                        <p class="fs-12 ml-3 mt-3 mb-3 text-black">Rincian Pekerjaan</p>
                    </h5>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-notepad-2"></i>
                            <span class="nav-text">Rincian Pekerjaan</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a class="" href="/categories">Kategori</a></li>
                            <li><a class="nav-link {{ $title === 'Kontrak Induk' ? 'active' : '' }}"
                                    href="/rincian">Item</a></li>
                        </ul>
                    </li>                     --}}
                    <h5>
                        <p class="fs-12 ml-3 mt-3 mb-1 text-black">KHS</p>
                    </h5>
                    <li>
                        <a class="nav-link {{ Request::is('khs*') ? 'active' : '' }}" href="/khs"
                            aria-expanded="">
                            <i class="bi bi-table"></i>
                            <span class="nav-text">Buat PO</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a class="" href="/jeniskhs">Jenis KHS</a></li>
                            <li><a class="" href="/itemkhs">Item KHS</a></li>
                            <li><a class="" href="/vendorkhs">Vendor KHS</a></li>
                            <li><a class="" href="/kontrakinduk">Kontrak Induk KHS</a></li>
                            <li><a class="" href="/detailkhs">Addendum KHS</a></li>
                            {{-- <li><a class="nav-link {{ $title === 'Kontrak Induk' ? 'active' : '' }}"
                                    href="/rincian">Item</a></li> --}}
                            {{-- <ul aria-expanded="false">
                                <li><a class="" href="">Jenis KHS</a></li>
                            </ul> --}}
                        </ul>
                    </li>
                    <h5>
                        <p class="fs-12 ml-3 mt-3 mb-1 text-black">Pejabat</p>
                    </h5>
                    <li>
                        <a class="nav-link {{ Request::is('khs*') ? 'active' : '' }}" href="/pejabat"
                            aria-expanded="">
                            <i class="bi bi-table"></i>
                            <span class="nav-text">Tabel Pejabat</span>
                        </a>                        
                    </li>
                    {{-- <h5>
                        <p class="fs-12 ml-3 mt-3 mb-1 text-black">Harga HPE</p>
                    </h5>
                    <li>
                        <a class="nav-link {{ Request::is('hpe*') ? 'active' : '' }}" href="/hpe"
                            aria-expanded="">
                            <i class="bi bi-file-earmark-spreadsheet"></i>
                            <span class="nav-text">HPE</span>
                        </a>
                    </li> --}}
                </ul>
                <div class="add-menu-sidebar" id="products">
                    <img src="{{ asset('/') }}./asset/frontend/images/calendar.png" alt=""
                        class="mr-3" />
                    <p class="font-w500 mb-0" id="reload" name="reload">{{ date('j F Y H:i:s') }} </p>
                </div>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>

        {{-- <div class="floating-container">
            <div class="floating-button">+</div>
            <div class="element-container">
                <span class="float-element">
                    <i class="material-icons">phone
                    </i>
                </span>
                <span class="float-element">
                    <i class="material-icons">Apa</i>
                </span>
                <span class="float-element">
                    <i class="material-icons">chat</i>
                </span>
            </div>
        </div> --}}

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://telkom.co.id/" target="_blank">....</a>
                    2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('/') }}./asset/frontend/vendor/global/global.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/custom.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/deznav-init.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('/') }}./asset/frontend/vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('/') }}./asset/frontend/vendor/apexchart/apexchart.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/chartjs-init.js"></script>

    <script src="/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/chartjs-init.js"></script>


    <!-- Dashboard 1 -->
    <script src="{{ asset('/') }}./asset/frontend/js/dashboard/dashboard-1.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/dashboard/dashboard-1.js"></script>

    <script src="{{ asset('/') }}./asset/frontend/vendor/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/vendor/jquery-validation/jquery.validate.min.js"></script>

    <!-- Form Steps -->
    <script src="{{ asset('/') }}./asset/frontend/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/jquery.validate-init.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/tambah-field.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

    {{-- <script src="{{ asset('/') }}./asset/frontend/js/cascading-dropdown.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"
        integrity="sha512-jTgBq4+dMYh73dquskmUFEgMY5mptcbqSw2rmhOZZSJjZbD2wMt0H5nhqWtleVkyBEjmzid5nyERPSNBafG4GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>



    <script type="text/javascript">
        function updateDiv() {
            document.getElementById("reload").innerHTML = document.getElementById("reload").innerHTML;
        }
    </script>

    <script>
        $(document).ready(function() {
            // SmartWizard initialize
            $('#smartwizard').smartWizard();
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });

        // $(document).ready(function() {
        //     setInterval(function() {
        //         $('#reload').load(window.location.href + " #reload");
        //     }, 1000);
        // });
    </script>

    @yield('ajax')
    {{-- <!-- Summernote -->
    <script src="{{ asset('/') }}./asset/frontend/vendor/summernote/js/summernote.min.js"></script>
    <!-- Summernote init -->
    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/summernote-init.js"></script> --}}

    {{-- <script src="{{ asset('/') }}./asset/frontend/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/sweetalert.init.js"></script>

    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/sweetalert-init.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/vendor/sweetalert/sweetalert.all.js"></script>

    <script src="{{ asset('./asset/frontend/js/plugins-init/sweetalert-init.js') }}"></script>
    <script src="{{ asset('./asset/frontend/js/plugins-init/sweetalert.init.js') }}"></script>
    <script src="{{ asset('./asset/frontend/vendor/sweetalert2/dist/sweetalert2.min.js') }}"></script> --}}
    <!-- Datatable -->
    <script src="{{ asset('/') }}./asset/frontend/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/datatables.init.js"></script>

    <script src="{{ asset('/') }}./asset/frontend/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}./asset/frontend/js/plugins-init/datatables.init.js"></script>
    @yield('script')
    @stack('scripts')


    {{-- <script>
        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery(".testimonial-one").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 30,
                nav: false,
                dots: false,
                left: true,
                navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                    '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    484: {
                        items: 2,
                    },
                    882: {
                        items: 3,
                    },
                    1200: {
                        items: 2,
                    },

                    1540: {
                        items: 3,
                    },
                    1740: {
                        items: 4,
                    },
                },
            });
        }
        jQuery(window).on("load", function() {
            setTimeout(function() {
                carouselReview();
            }, 1000);
        });
    </script> --}}
    @livewireScripts
</body>

</html>
