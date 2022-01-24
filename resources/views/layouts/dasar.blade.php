<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <link rel="shortcut icon" href="{!! asset('admin/images/favicon.png') !!}">
    <title>@yield('title', 'Perpustakaan')</title>
    <!-- StyleSheets  -->
    @livewireStyles
    <link rel="stylesheet" href="{!! asset('admin/assets/css/dashlite.css?ver=2.9.0') !!}">
    <link id="skin-default" rel="stylesheet" href="{!! asset('admin/assets/css/theme.css?ver=2.9.0') !!}">
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main  -->
        <div class="nk-main ">
            <!-- sidebar -->
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="#" class="logo-link nk-sidebar-logo">
                             <picture><img src="{!! asset('admin/images/pustaka-light.png') !!}" class="img-fluid-sm" width="270" height="100" style="margin-right: -50px; margin-left:-10px" ></picture>
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                               
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                </li><!-- .nk-menu-item -->
                         
                                <li class="nk-menu-item">
                                    <a href="/dataanggota" data-turbolinks="true" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-book-read"></em></span>
                                        <span class="nk-menu-text">Data Anggota</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/pendaftaran" data-turbolinks="false" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">Tambah Anggota</span>
                                    </a>
                                </li>
                                {{-- <li class="nk-menu-item">
                                    <a href="html/index-analytics.html" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth-fill"></em></span>
                                        <span class="nk-menu-text">Analytics</span>
                                    </a>
                                </li> --}}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <!-- wrap  -->
            <div class="nk-wrap ">
                <!-- main header -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
  
                           
                            <div class="nk-header-tools">
                      

                               
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-xl-block">
                                                    <div class="user-status user-status-unverified">verified</div>
                                                    <div class="user-name dropdown-indicator">Admin Perpustakaan</div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">Admin Perpustakaan</span>
                                                        <span class="sub-text">admin@Perpustakaan.com</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header -->
                <!-- content -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content -->
                <!-- footer-->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 Rojaur Rafiqi</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer-->
            </div>
            <!-- wrap -->
        </div>
        <!-- main -->
    </div>
  
    <!-- JavaScript -->
    <script src="{!! asset('admin/assets/js/bundle.js?ver=2.9.0') !!}"></script>
    <script src="{!! asset('admin/assets/js/scripts.js?ver=2.9.0') !!}"></script>

    {{-- turbolinks --}}
     {{-- <script src="{{ mix('js/app.js') }}"></script> --}}

    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> 
    @livewireScripts
</body>

</html>