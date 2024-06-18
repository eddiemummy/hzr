<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Red_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{!! asset("assets/images/logos/favicon.png") !!}">

    <!-- Core Css -->
    <link rel="stylesheet" href="{!! asset("assets/css/styles.css") !!}">
    <title>Huzur Yönetim Paneli</title>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <style>
        .ck-content {
            height:200px !important;
        }
    </style>
</head>

<body>
{{-- TODO: revert this part--}}
{{--<div class="toast toast-onload align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">--}}
{{--    <div class="toast-body hstack align-items-start gap-6">--}}
{{--        <i class="ti ti-alert-circle fs-6"></i>--}}
{{--        <div>--}}
{{--            <h5 class="text-white fs-3 mb-1">Yönetim Paneline Hoşgeldiniz</h5>--}}
{{--            <h6 class="text-white fs-2 mb-0">Ödemeleri, kullanıcı ektileşimlerini yönetebilirsiniz.</h6>--}}
{{--        </div>--}}
{{--        <button type="button" class="btn-close btn-close-white fs-2 m-0 ms-auto shadow-none" data-bs-dismiss="toast" aria-label="Close"></button>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Preloader -->
<div class="preloader">
    <img src="{{ asset('assets/images/logos/logo-icon.svg') }}" alt="loader" class="lds-ripple img-fluid">
</div>
<div id="main-wrapper">
    <!-- Sidebar Start -->
    <aside class="left-sidebar with-vertical">
        <div><!-- ---------------------------------- -->
            <!-- Start Vertical Layout Sidebar -->
            <!-- ---------------------------------- -->
            <!-- Sidebar scroll-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                <ul id="sidebarnav">
                    <!-----------Profile------------------>
                    <li class="sidebar-item sidebar-profile pt-2">
                        <a class="sidebar-link has-arrow opacity-100 gap-2" href="javascript:void(0)"
                           aria-expanded="false">
                <span class="d-flex">
                  <img src="{{ asset('assets/images/profile/user-1.jpg') }}" class="rounded" width="30" alt="user">
                </span>
                            <span class="hide-menu fw-medium">{!! auth()->user()->name !!}</span>
                        </a>
                        <ul aria-expanded="false" class="collapse first-level">

                            <li class="sidebar-item">
                                <a href="javascript:void(0)" class="sidebar-link sublink">
                                    <div class="round-16 d-flex align-items-center justify-content-center">
                                        <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                    </div>
                                    <span class="hide-menu">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- ---------------------------------- -->
                    <!-- Home -->
                    <!-- ---------------------------------- -->
                    <li class="nav-small-cap">
                        <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon fs-4"></iconify-icon>
                        <span class="hide-menu">Panel</span>
                    </li>
                    <li class="sidebar-item">
                            <a class="sidebar-link" href="{!! route('dashboard') !!}" id="get-url">
                            <iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
                            <span class="hide-menu">Ana Sayfa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <span class="d-flex">
                    <iconify-icon icon="mdi:car-search-outline" class="fs-6"></iconify-icon>
                </span>
                    <span class="hide-menu">Ürünler</span>

                    </a>
                    <ul aria-expanded="false" class="collapse first-level">

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('products.index') }}" aria-expanded="false">
                                <div class="d-flex">
                                    <iconify-icon icon="solar:money-bag-outline"></iconify-icon>
                                </div>
                                <span class="hide-menu">Ürün</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('categories.index') }}" aria-expanded="false">
                                <div class="d-flex">
                                    <iconify-icon icon="solar:money-bag-outline"></iconify-icon>
                                </div>
                                <span class="hide-menu">Kategoriler</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('colors.index') }}" aria-expanded="false">
                                <div class="d-flex">
                                    <iconify-icon icon="solar:money-bag-outline"></iconify-icon>
                                </div>
                                <span class="hide-menu">Renkler</span>
                            </a>
                        </li>

                    </ul>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('sliders.index') }}" aria-expanded="false">
                            <div class="d-flex">
                                <iconify-icon icon="solar:money-bag-outline"></iconify-icon>
                            </div>
                            <span class="hide-menu">Slider</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('dashboard.system') }}" aria-expanded="false">
                            <div class="d-flex">
                                <iconify-icon icon="solar:money-bag-outline"></iconify-icon>
                            </div>
                            <span class="hide-menu">Site Ayarları</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('dashboard.updateAbout') }}" aria-expanded="false">
                            <div class="d-flex">
                                <iconify-icon icon="solar:money-bag-outline"></iconify-icon>
                            </div>
                            <span class="hide-menu">Hakkımızda</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('dashboard.edit') }}" aria-expanded="false">
                            <div class="d-flex">
                                <iconify-icon icon="solar:phone-outline"></iconify-icon>
                            </div>
                            <span class="hide-menu">İletişim</span>
                        </a>
                    </li>


            <!-- End Sidebar scroll-->
        </div>
    </aside>

    <!--  Sidebar End -->
    <div class="page-wrapper">
        <!--  Header Start -->
        <header class="topbar card rounded-0 border-0">
            <div class="with-vertical"><!-- ---------------------------------- -->
                <!-- Start Vertical Layout Header -->
                <!-- ---------------------------------- -->
                <nav class="navbar navbar-expand-lg px-0 py-0">
                    <div class="d-none d-lg-block">
                        <div class="brand-logo d-flex align-items-center justify-content-between">
                            <a href="index.html" class="text-nowrap logo-img d-flex align-items-center gap-6">
                                <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                    <img src="{{ asset('assets/images/logos/logo-icon.svg') }}" alt="homepage"
                                         class="dark-logo">
                                    <!-- Light Logo icon -->
                                    <img src="{{ asset('assets/images/logos/logo-light-icon.svg') }}" alt="homepage"
                                         class="light-logo">
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="{!! asset("assets/images/logos/logo-text.svg") !!}" alt="homepage" class="dark-logo">
                                    <!-- Light Logo text -->
                    <img src="{!! asset("assets/images/logos/logo-light-text.svg") !!}" alt="homepage"
                         class="dark-logo">
                  </span>
                            </a>
                        </div>
                    </div>

                    <ul class="navbar-nav align-items-center">

                        <li class="nav-item nav-icon-hover-bg rounded-circle">
                            <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                <iconify-icon icon="solar:list-broken"></iconify-icon>
                            </a>
                        </li>
                        <!-- ------------------------------- -->
                        <!-- start notification Dropdown -->
                        <!-- ------------------------------- -->


                        <li class="nav-item dropdown nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                            <div class="hover-dd">
                                <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true"
                                   aria-expanded="false">
                                    <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <div class="d-block d-lg-none">
                        <div class="brand-logo d-flex align-items-center justify-content-between">
                            <a href="index.html" class="text-nowrap logo-img d-flex align-items-center gap-6">
                                <b class="logo-icon">
                                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                    <!-- Dark Logo icon -->
                                    <img src="{{ asset('assets/images/logos/logo-icon.svg') }}" alt="homepage"
                                         class="dark-logo">
                                    <!-- Light Logo icon -->
                                    <img src="{{ asset('assets/images/logos/logo-light-icon.svg') }}" alt="homepage"
                                         class="light-logo">
                                </b>
                                <!--End Logo icon -->
                                <!-- Logo text -->
                                <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="{{ asset('assets/images/logos/logo-text.svg') }}" alt="homepage" class="dark-logo">
                                    <!-- Light Logo text -->
                    <img src="{{ asset('assets/images/logos/logo-light-text.svg') }}" class="light-logo" alt="homepage">
                  </span>
                            </a>
                        </div>
                    </div>
                    <a class="navbar-toggler p-0 border-0 nav-icon-hover-bg rounded-circle" href="javascript:void(0)"
                       data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                       aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav flex-row align-items-center justify-content-center d-flex d-lg-none">
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a href="javascript:void(0)"
                                       class="nav-link d-flex d-lg-none align-items-center justify-content-center"
                                       type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                       aria-controls="offcanvasWithBothOptions">
                                        <iconify-icon icon="solar:menu-dots-circle-linear"></iconify-icon>
                                    </a>
                                </li>
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                        <iconify-icon icon="solar:bell-bing-line-duotone"></iconify-icon>
                                        <div class="notify">
                                            <span class="heartbit"></span>
                                            <span class="point"></span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-start py-0 content-dd overflow-hidden"
                                         aria-labelledby="drop2">
                                        <div class="py-3 px-4 bg-primary">
                                            <div class="fs-6 fw-bold text-white">Bildirimler</div>
                                            <div class="fs-2 fw-medium text-white">4 yeni bildiriminiz var</div>
                                        </div>
                                        <div class="message-body" data-simplebar="">
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center justify-content-between dropdown-item gap-3   justify-content-between border-bottom">
                          <span
                              class="flex-shrink-0 bg-secondary-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 ">Luanch Admin</h6>
                                                        <span
                                                            class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                          <span
                              class="flex-shrink-0 bg-primary-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 ">Event today</h6>
                                                        <span
                                                            class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                                                    </div>

                                                    <span class="fs-3 d-block text-truncate text-muted">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                          <span
                              class="flex-shrink-0 bg-info-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-info">
                            <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 ">Settings</h6>
                                                        <span
                                                            class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                          <span
                              class="flex-shrink-0 bg-warning-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:link-circle-line-duotone"></iconify-icon>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 ">Luanch Admin</h6>
                                                        <span
                                                            class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                          <span
                              class="flex-shrink-0 bg-success-subtle rounded round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="calendar" class="feather-sm fill-white text-success"></i>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 ">Event today</h6>
                                                        <span
                                                            class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                          <span
                              class="flex-shrink-0 bg-primary-subtle rounded round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="settings" class="feather-sm fill-white text-primary"></i>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 ">Settings</h6>
                                                        <span
                                                            class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <a class="d-flex btn btn-primary rounded align-items-center justify-content-center gap-2"
                                               href="javascript:void(0);">
                                                <span>Check all Notifications</span>
                                                <iconify-icon icon="solar:alt-arrow-right-outline"
                                                              class="iconify-sm"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                        <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                                        <div class="notify">
                                            <span class="heartbit"></span>
                                            <span class="point"></span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-start py-0 content-dd overflow-hidden"
                                         aria-labelledby="drop2">
                                        <div class="py-3 px-4 bg-secondary">
                                            <div class="fs-6 fw-bold text-white">Messages</div>
                                            <div class="fs-2 fw-medium text-white">You have 5 new messages</div>
                                        </div>
                                        <div class="message-body" data-simplebar="">
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded w-100 round-40">
                            <span class="profile-status bg-success position-absolute rounded"></span>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 lh-base">Genelia Roshan</h6>
                                                        <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded w-100 round-40">
                            <span class="profile-status bg-success position-absolute rounded"></span>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 lh-base">Bianca Anderson</h6>
                                                        <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                                    </div>

                                                    <span class="fs-3 d-block text-truncate text-muted">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="../assets/images/profile/user-4.jpg" alt="user" class="rounded w-100 round-40">
                            <span class="profile-status bg-success position-absolute rounded"></span>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 lh-base">Andrew Johnson</h6>
                                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded w-100 round-40">
                            <span class="profile-status bg-success position-absolute rounded"></span>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 lh-base">Mark Strokes</h6>
                                                        <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">Just see the my new admin!</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="../assets/images/profile/user-6.jpg" alt="user" class="rounded w-100 round-40">
                            <span class="profile-status bg-success position-absolute rounded"></span>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 lh-base">Mark, Stoinus & Rishvi..</h6>
                                                        <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">Just a reminder that you have event</span>
                                                </div>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="../assets/images/profile/user-7.jpg" alt="user" class="rounded w-100 round-40">
                            <span class="profile-status bg-success position-absolute rounded"></span>
                          </span>
                                                <div class="w-80">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h6 class="mb-0 lh-base">Settings</h6>
                                                        <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                    </div>
                                                    <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="p-3">
                                            <a class="d-flex btn btn-secondary rounded align-items-center justify-content-center gap-2"
                                               href="javascript:void(0);">
                                                <span>Check all Messages</span>
                                                <iconify-icon icon="solar:alt-arrow-right-outline"
                                                              class="iconify-sm"></iconify-icon>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                <li class="nav-item nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                        <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                    </a>
                                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                                        <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                    </a>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end notification Dropdown -->
                                <!-- ------------------------------- -->
                                <!-- ------------------------------- -->
                                <!-- start language Dropdown -->
                                <!-- ------------------------------- -->
                                <!-- ------------------------------- -->
                                <!-- end language Dropdown -->
                                <!-- ------------------------------- -->

                                <!-- ------------------------------- -->
                                <!-- start profile Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                        <img src="{!! asset('assets/images/profile/user-1.jpg') !!}" alt="user"
                                             class="profile-pic rounded round-30">
                                    </a>
                                    <div
                                        class="dropdown-menu pt-0 content-dd overflow-hidden pt-0 dropdown-menu-end user-dd"
                                        aria-labelledby="drop2">
                                        <div class="profile-dropdown position-relative" data-simplebar="">
                                            <div class=" py-3 border-bottom">
                                                <div class="d-flex align-items-center px-3">
                                                    <img src="{!! asset('assets/images/profile/user-1.jpg') !!}"
                                                         class="rounded"
                                                         width="50" height="50" alt="ample-img">
                                                    <div class="ms-3">
                                                        <h5 class="mb-0 fs-4">{!! auth()->user()->name !!}</h5>
                                                        <p class="mb-0 d-flex align-items-center text-muted">
                                                            {!! auth()->user()->email !!}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-body pb-3">

                                                <hr>
                                                <div class="px-3">

                                                    <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                                                        <a href="{{ route('dashboard.password') }}"
                                                           class=" d-flex  align-items-center ">
                                                            Şifre Değiştirme
                                                        </a>
                                                    </div>
                                                    <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                                                        <a href="{{ route('dashboard.logout') }}"
                                                           class=" d-flex  align-items-center ">
                                                            Çıkış
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                                <!-- ------------------------------- -->
                                <!-- end profile Dropdown -->
                                <!-- ------------------------------- -->
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- ---------------------------------- -->
                <!-- End Vertical Layout Header -->
                <!-- ---------------------------------- -->

                <!-- ------------------------------- -->
                <!-- apps Dropdown in Small screen -->
                <!-- ------------------------------- -->
                <!--  Mobilenavbar -->
                <div class="offcanvas offcanvas-start dropdown-menu-nav-offcanvas" data-bs-scroll="true" tabindex="-1"
                     id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <nav class="sidebar-nav scroll-sidebar">
                        <div class="offcanvas-header justify-content-between">
                            <div class="brand-logo d-flex align-items-center justify-content-between">
                                <a href="index.html" class="text-nowrap logo-img d-flex align-items-center gap-6">
                                    <b class="logo-icon">
                                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                        <!-- Dark Logo icon -->
                                        <img src="{{ asset('assets/images/logos/logo-icon.svg') }}" alt="homepage"
                                             class="dark-logo">
                                        <!-- Light Logo icon -->
                                        <img src="{{ asset('assets/images/logos/logo-light-icon.svg') }}" alt="homepage"
                                             class="light-logo">
                                    </b>
                                    <!--End Logo icon -->
                                    <!-- Logo text -->
                                    <span class="logo-text">
                      <!-- dark Logo text -->
                      <img src="{{ asset('assets/images/logos/logo-text.svg') }}" alt="homepage" class="dark-logo">
                                        <!-- Light Logo text -->
                      <img src="{{ asset('assets/images/logos/logo-light-text.svg') }}" class="light-logo"
                           alt="homepage">
                    </span>
                                </a>
                            </div>
                            <button type="button" class="btn-close ms-auto" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body h-n80" data-simplebar="">
                            <ul id="sidebarnav" class="px-0">
                                <li class="sidebar-item">
                                    <a class="sidebar-link gap-2 has-arrow" href="javascript:void(0)"
                                       aria-expanded="false">
                                        <iconify-icon icon="solar:list-bold-duotone" class="fs-7"></iconify-icon>
                                        <span class="hide-menu">Apps</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse first-level my-3">
                                        <li class="sidebar-item py-2">
                                            <a href="app-chat.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('assets/images/svgs/icon-dd-chat.svg') }}"
                                                         alt="ample-img"
                                                         class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Chat Application</h6>
                                                    <span
                                                        class="fs-2 d-block fw-normal text-muted">New messages arrived</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="app-invoice.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('assets/images/svgs/icon-dd-invoice.svg') }}"
                                                         alt="ample-img"
                                                         class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Invoice App</h6>
                                                    <span
                                                        class="fs-2 d-block fw-normal text-muted">Get latest invoice</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="../main/app-cotact.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('assets/images/svgs/icon-dd-mobile.svg') }}"
                                                         alt="ample-img"
                                                         class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Contact Application</h6>
                                                    <span
                                                        class="fs-2 d-block fw-normal text-muted">2 Unsaved Contacts</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="app-email.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('assets/images/svgs/icon-dd-message-box.svg') }}"
                                                         alt="ample-img" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Email App</h6>
                                                    <span
                                                        class="fs-2 d-block fw-normal text-muted">Get new emails</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="page-user-profile.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('assets/images/svgs/icon-dd-cart.svg') }}"
                                                         alt="ample-img"
                                                         class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">User Profile</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">learn more information</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="app-calendar.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-date.svg" alt="ample-img"
                                                         class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Calendar App</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">Get dates</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="app-contact2.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="{{ asset('assets/images/svgs/icon-dd-lifebuoy.svg') }}"
                                                         alt="ample-img" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Contact List Table</h6>
                                                    <span
                                                        class="fs-2 d-block fw-normal text-muted">Add new contact</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="sidebar-item py-2">
                                            <a href="app-notes.html" class="d-flex align-items-center">
                                                <div
                                                    class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                    <img src="../assets/images/svgs/icon-dd-application.svg"
                                                         alt="ample-img" class="img-fluid" width="24" height="24">
                                                </div>
                                                <div>
                                                    <h6 class="mb-1 bg-hover-primary">Notes Application</h6>
                                                    <span class="fs-2 d-block fw-normal text-muted">To-do and Daily tasks</span>
                                                </div>
                                            </a>
                                        </li>
                                        <ul class="px-8 mt-6 mb-4">
                                            <li class="sidebar-item mb-3">
                                                <h5 class="fs-5 fw-semibold">Quick Links</h5>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="page-pricing.html">Pricing
                                                    Page</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="authentication-login.html">Authentication
                                                    Design</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="authentication-register.html">Register
                                                    Now</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="authentication-error.html">404
                                                    Error Page</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="app-notes.html">Notes App</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="page-user-profile.html">User
                                                    Application</a>
                                            </li>
                                            <li class="sidebar-item py-2">
                                                <a class="fw-semibold text-dark" href="page-account-settings.html">Account
                                                    Settings</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link gap-2" href="app-chat.html" aria-expanded="false">
                                        <iconify-icon icon="solar:chat-round-unread-line-duotone"
                                                      class="fs-6 text-dark"></iconify-icon>
                                        <span class="hide-menu">Chat</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link gap-2" href="app-calendar.html" aria-expanded="false">
                                        <iconify-icon icon="solar:calendar-add-line-duotone"
                                                      class="fs-6 text-dark"></iconify-icon>
                                        <span class="hide-menu">Calendar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link gap-2" href="app-email.html" aria-expanded="false">
                                        <iconify-icon icon="solar:mailbox-line-duotone"
                                                      class="fs-6 text-dark"></iconify-icon>
                                        <span class="hide-menu">Email</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="app-header with-horizontal">
                <nav class="navbar navbar-expand-xl container-fluid">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none">
                            <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                                <iconify-icon icon="solar:hamburger-menu-line-duotone"></iconify-icon>
                            </a>
                        </li>
                        <li class="nav-item d-none d-xl-block">
                            <div class="brand-logo d-flex align-items-center justify-content-between">
                                <a href="index.html" class="text-nowrap logo-img d-flex align-items-center gap-6">
                                    <b class="logo-icon">
                                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                        <!-- Dark Logo icon -->
                                        <img src="../assets/images/logos/logo-icon.svg" alt="homepage"
                                             class="dark-logo">
                                        <!-- Light Logo icon -->
                                        <img src="../assets/images/logos/logo-light-icon.svg" alt="homepage"
                                             class="light-logo">
                                    </b>
                                    <!--End Logo icon -->
                                    <!-- Logo text -->
                                    <span class="logo-text">
                      <!-- dark Logo text -->
                      <img src="../assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo">
                                        <!-- Light Logo text -->
                      <img src="{{ asset('assets/images/logos/logo-light-text.svg') }}" class="light-logo"
                           alt="homepage">
                    </span>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown d-none d-lg-flex">
                            <div class="hover-dd">
                                <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                    <iconify-icon icon="solar:bell-bing-line-duotone"></iconify-icon>
                                    <div class="notify">
                                        <span class="heartbit"></span>
                                        <span class="point"></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu py-0 content-dd  dropdown-menu-start overflow-hidden"
                                     aria-labelledby="drop2">
                                    <div class="py-3 px-4 bg-primary">
                                        <div class="fs-6 fw-bold text-white">Bildirimler</div>
                                        <div class="fs-2 fw-medium text-white">4 yeni bildiriminiz var</div>
                                    </div>
                                    <div class="message-body" data-simplebar="">
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center justify-content-between dropdown-item gap-3   justify-content-between border-bottom">
                        <span
                            class="flex-shrink-0 bg-secondary-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-secondary">
                          <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 ">Yeni İlan</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted ">9:30</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">SUNROOF / KLİMA / EXTRALI / HATASIZ / EKSİKSİZ CLIO</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                        <span
                            class="flex-shrink-0 bg-primary-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-primary">
                          <iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 ">Event today</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                                                </div>

                                                <span class="fs-3 d-block text-truncate text-muted">Just a reminder that you have event</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                        <span
                            class="flex-shrink-0 bg-info-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-info">
                          <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 ">Settings</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                        <span
                            class="flex-shrink-0 bg-warning-subtle rounded round-40 d-flex align-items-center justify-content-center fs-6 text-warning">
                          <iconify-icon icon="solar:link-circle-line-duotone"></iconify-icon>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 ">Yeni İlan</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted ">9:30 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">Just see the my new admin!</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                        <span
                            class="flex-shrink-0 bg-success-subtle rounded round-40 d-flex align-items-center justify-content-center">
                          <i data-feather="calendar" class="feather-sm fill-white text-success"></i>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 ">Event today</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted ">9:10 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">Just a reminder that you have event</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3  justify-content-between border-bottom">
                        <span
                            class="flex-shrink-0 bg-primary-subtle rounded round-40 d-flex align-items-center justify-content-center">
                          <i data-feather="settings" class="feather-sm fill-white text-primary"></i>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 ">Settings</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted ">9:08 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-3">
                                        <a class="d-flex btn btn-primary rounded align-items-center justify-content-center gap-2"
                                           href="javascript:void(0);">
                                            <span>Check all Notifications</span>
                                            <iconify-icon icon="solar:alt-arrow-right-outline"
                                                          class="iconify-sm"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-icon-hover-bg rounded-circle dropdown d-none d-lg-flex">
                            <div class="hover-dd">
                                <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                    <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                                    <div class="notify">
                                        <span class="heartbit"></span>
                                        <span class="point"></span>
                                    </div>
                                </a>
                                <div class="dropdown-menu py-0 content-dd dropdown-menu-start overflow-hidden"
                                     aria-labelledby="drop2">
                                    <div class="py-3 px-4 bg-secondary">
                                        <div class="fs-6 fw-bold text-white">Mesajlar</div>
                                        <div class="fs-2 fw-medium text-white">5 yeni mesajınız var</div>
                                    </div>
                                    <div class="message-body" data-simplebar="">
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-2.jpg" alt="user" class="rounded w-100 round-40">
                          <span class="profile-status bg-success position-absolute rounded"></span>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 lh-base">Sude Evren</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted">9:30</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">En son ne kadar olur?</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-3.jpg" alt="user" class="rounded w-100 round-40">
                          <span class="profile-status bg-success position-absolute rounded"></span>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 lh-base">Kaan Yıldız</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted">9:10</span>
                                                </div>

                                                <span class="fs-3 d-block text-truncate text-muted">Orta yolu bulabiliriz bence.</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-4.jpg" alt="user" class="rounded w-100 round-40">
                          <span class="profile-status bg-success position-absolute rounded"></span>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 lh-base">Andrew Johnson</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded w-100 round-40">
                          <span class="profile-status bg-success position-absolute rounded"></span>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 lh-base">Mark Strokes</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted">9:30 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">Just see the my new admin!</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-6.jpg" alt="user" class="rounded w-100 round-40">
                          <span class="profile-status bg-success position-absolute rounded"></span>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 lh-base">Mark, Stoinus & Rishvi..</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted">9:10 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">Just a reminder that you have event</span>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0)"
                                           class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                        <span class="user-img position-relative d-inline-block">
                          <img src="../assets/images/profile/user-7.jpg" alt="user" class="rounded w-100 round-40">
                          <span class="profile-status bg-success position-absolute rounded"></span>
                        </span>
                                            <div class="w-80">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h6 class="mb-0 lh-base">Settings</h6>
                                                    <span class="fs-2 text-nowrap d-block text-muted">9:08 AM</span>
                                                </div>
                                                <span class="fs-3 d-block text-truncate text-muted">You can customize this template as you want</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-3">
                                        <a class="d-flex btn btn-secondary rounded align-items-center justify-content-center gap-2"
                                           href="javascript:void(0);">
                                            <span>Check all Messages</span>
                                            <iconify-icon icon="solar:alt-arrow-right-outline"
                                                          class="iconify-sm"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex dropdown">
                            <div class="hover-dd">
                                <a class="nav-link" id="drop2" href="javascript:void(0)" aria-haspopup="true"
                                   aria-expanded="false">
                                    <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                                </a>
                                <div class="dropdown-menu dropdown-menu-nav" aria-labelledby="drop2">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="ps-3 pt-3">
                                                <div class="border-bottom">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="app-chat.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-chat.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Chat Application
                                                                        </h6>
                                                                        <span class="fs-2 d-block text-body-secondary">New messages arrived</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-invoice.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-invoice.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">Invoice
                                                                            App</h6>
                                                                        <span class="fs-2 d-block text-body-secondary">Get latest invoice</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact2.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-mobile.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Contact Application
                                                                        </h6>
                                                                        <span class="fs-2 d-block text-body-secondary">2 Unsaved Contacts</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-email.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-message-box.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">Email App</h6>
                                                                        <span class="fs-2 d-block text-body-secondary">Get new emails</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="position-relative">
                                                                <a href="page-user-profile.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-cart.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            User Profile
                                                                        </h6>
                                                                        <span class="fs-2 d-block text-body-secondary">learn more information</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-calendar.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-date.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Calendar App
                                                                        </h6>
                                                                        <span class="fs-2 d-block text-body-secondary">Get dates</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-contact.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Contact List Table
                                                                        </h6>
                                                                        <span class="fs-2 d-block text-body-secondary">Add new contact</span>
                                                                    </div>
                                                                </a>
                                                                <a href="app-notes.html"
                                                                   class="d-flex align-items-center pb-9 position-relative">
                                                                    <div
                                                                        class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                        <img
                                                                            src="../assets/images/svgs/icon-dd-application.svg"
                                                                            alt="ample-img" class="img-fluid" width="24"
                                                                            height="24">
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-1 fw-semibold fs-3">
                                                                            Notes Application
                                                                        </h6>
                                                                        <span class="fs-2 d-block text-body-secondary">To-do and Daily tasks</span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center py-3">
                                                    <div class="col-8">
                                                        <a class="fw-semibold d-flex align-items-center lh-1"
                                                           href="javascript:void(0)">
                                                            <i class="ti ti-help fs-6 me-2"></i>Frequently Asked
                                                            Questions
                                                        </a>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="d-flex justify-content-end pe-4">
                                                            <button class="btn btn-primary">Check</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 ms-n4">
                                            <div class="position-relative p-7 border-start h-100">
                                                <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                                <ul class="">
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                           href="page-pricing.html">Pricing Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                           href="authentication-login.html">Authentication
                                                            Design</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                           href="authentication-register.html">Register Now</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                           href="authentication-error.html">404 Error Page</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary" href="app-notes.html">Notes
                                                            App</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                           href="page-user-profile.html">User Application</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a class="fw-semibold bg-hover-primary"
                                                           href="page-account-settings.html">Account Settings</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 border-0" href="javascript:void(0)"
                       data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                       aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
                    </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <div class="d-flex align-items-center justify-content-between">
                            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                <li class="nav-item nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                        <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                    </a>
                                    <a class="nav-link sun light-layout" href="javascript:void(0)">
                                        <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                    </a>
                                </li>

                                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex search-box">
                                    <a class="nav-link d-none d-md-flex" href="javascript:void(0)"
                                       data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                                    </a>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end notification Dropdown -->
                                <!-- ------------------------------- -->
                                <!-- ------------------------------- -->
                                <!-- start language Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                                    <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                        <img src="../assets/images/svgs/icon-flag-en.svg" alt="ample-img" width="20px"
                                             height="20px" class="round-20">
                                    </a>
                                    <div class="dropdown-menu pt-0 dropdown-menu-end" aria-labelledby="drop2">
                                        <div class="message-body">
                                            <a href="javascript:void(0)"
                                               class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="../assets/images/svgs/icon-flag-en.svg" alt="ample-img"
                                                         width="20px" height="20px" class="round-20">
                                                </div>
                                                <p class="mb-0 fs-3">English</p>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="../assets/images/svgs/icon-flag-cn.svg" alt="ample-img"
                                                         width="20px" height="20px" class="round-20">
                                                </div>
                                                <p class="mb-0 fs-3">Chinese</p>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="../assets/images/svgs/icon-flag-fr.svg" alt="ample-img"
                                                         width="20px" height="20px" class="round-20">
                                                </div>
                                                <p class="mb-0 fs-3">French</p>
                                            </a>
                                            <a href="javascript:void(0)"
                                               class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                                                <div class="position-relative">
                                                    <img src="../assets/images/svgs/icon-flag-sa.svg" alt="ample-img"
                                                         width="20px" height="20px" class="round-20">
                                                </div>
                                                <p class="mb-0 fs-3">Arabic</p>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <!-- ------------------------------- -->
                                <!-- end language Dropdown -->
                                <!-- ------------------------------- -->

                                <!-- ------------------------------- -->
                                <!-- start profile Dropdown -->
                                <!-- ------------------------------- -->
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                                        <img src="../assets/images/profile/user-1.jpg" alt="user" width="30"
                                             class="profile-pic rounded">
                                    </a>
                                    <div
                                        class="dropdown-menu pt-0 content-dd overflow-hidden pt-0 dropdown-menu-end user-dd"
                                        aria-labelledby="drop2">
                                        <div class="profile-dropdown position-relative" data-simplebar="">
                                            <div class=" py-3 border-bottom">
                                                <div class="d-flex align-items-center px-3">
                                                    <img src="../assets/images/profile/user-1.jpg" class="rounded"
                                                         width="50" height="50" alt="ample-img">
                                                    <div class="ms-3">
                                                        <h5 class="mb-0 fs-4">James White</h5>
                                                        <p class="mb-0 d-flex align-items-center text-muted">
                                                            info@ampleadmin.com
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="message-body pb-3">
                                                <div class="px-3 pt-3">
                                                    <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                                                        <a href="page-user-profile.html"
                                                           class=" d-flex  align-items-center ">
                                                            My Profile
                                                        </a>
                                                    </div>
                                                    <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                                                        <a href="javascript:void(0)"
                                                           class=" d-flex  align-items-center ">
                                                            My Projects
                                                        </a>
                                                    </div>
                                                    <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                                                        <a href="app-email.html" class=" d-flex  align-items-center ">
                                                            Inbox
                                                        </a>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="px-3">
                                                    <div
                                                        class="py-8 px-3 d-flex justify-content-between dropdown-item align-items-center h6 mb-0  rounded-2 link">
                                                        <a href="javascript:void(0)" class="">
                                                            Mode
                                                        </a>
                                                        <div>
                                                            <a class="moon dark-layout" href="javascript:void(0)">
                                                                <iconify-icon icon="solar:moon-line-duotone"
                                                                              class="moon"></iconify-icon>
                                                            </a>
                                                            <a class="sun light-layout" href="javascript:void(0)">
                                                                <iconify-icon icon="solar:sun-2-line-duotone"
                                                                              class="sun"></iconify-icon>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                                                        <a href="page-account-settings.html"
                                                           class=" d-flex  align-items-center  ">
                                                            Account Settings
                                                        </a>
                                                    </div>
                                                    <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                                                        <a href="authentication-login.html"
                                                           class=" d-flex  align-items-center ">
                                                            Sign Out
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- ------------------------------- -->
                                <!-- end profile Dropdown -->
                                <!-- ------------------------------- -->
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!--  Header End -->
        <aside class="left-sidebar with-horizontal">
            <!-- Sidebar scroll-->
            <div>
                <!-- Sidebar navigation-->
                <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                    <ul id="sidebarnav">

                        <!----Dashboards----->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:screencast-2-outline" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="index.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">General</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Classic</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index3.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Analytical</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index4.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Campaign</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index5.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Modern</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="index6.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Ecommerce</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!---Apps--->
                        <li class="sidebar-item">
                            <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                               aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:atom-linear" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Apps</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-calendar.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Calendar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-kanban.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Kanban</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-chat.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Chat Apps</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-email.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Email</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-notes.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Notes</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-contact.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Contact Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-contact2.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Contact List</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="app-invoice.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Invoice</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="page-user-profile.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">User Profile</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="blog-posts.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Posts </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="blog-detail.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Details </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-shop.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Shop </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-shop-detail.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Details </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-product-list.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> List </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-checkout.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Checkout </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-add-product.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Add Product </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="eco-edit-product.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Edit Product </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!---Pages--->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:file-broken" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Pages</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="page-pricing.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Pricing</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="page-faq.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">FAQ</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sublink" href="page-account-settings.html"
                                       aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Account Settings</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link sidebar-link" href="../landingpage/index.html"
                                       aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Landing Page</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-cards.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Cards </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-charts.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Charts </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-banners.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Banner </span>
                                    </a>
                                </li>

                                <li class="sidebar-item">
                                    <a href="widgets-feeds.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Feed Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-apps.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Apps Widgets </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="widgets-data.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu"> Data Widgets </span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- =================== -->
                        <!-- UI -->
                        <!-- =================== -->
                        <li class="sidebar-item mega-dropdown">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:text-underline-cross-line-duotone" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Ui</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="ui-accordian.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Accordian</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-badge.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Badge</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-buttons.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Buttons</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-dropdowns.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Dropdowns</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-modals.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Modals</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tab.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Tab</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-tooltip-popover.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Tooltip & Popover</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-notification.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Alerts</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-progressbar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Progressbar</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-pagination.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Pagination</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-typography.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Typography</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-bootstrap-ui.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Bootstrap UI</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-breadcrumb.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-offcanvas.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Offcanvas</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-lists.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Lists</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-grid.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-carousel.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Carousel</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-scrollspy.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Scrollspy</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-spinner.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Spinner</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="ui-link.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Link</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- =================== -->
                        <!-- Forms -->
                        <!-- =================== -->
                        <li class="sidebar-item mega-dropdown">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:book-2-line-duotone" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Forms</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="form-inputs.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Forms Input</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-groups.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Input Groups</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-input-grid.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Input Grid</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-checkbox-radio.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Checkbox & Radios</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-switch.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Bootstrap Switch</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-select2.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Select2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-dropzone.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Dropzone</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-mask.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Mask</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-typeahead.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Typehead</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-bootstrap-validation.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Bootstrap Validation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-custom-validation.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Custom Validation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-colorpicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Colorpicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-rangepicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Bootstrap Rangepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-bootstrap-datepicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Bootstrap Datepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="form-picker-material-datepicker.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Material Datepicker</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-basic.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Basic Form</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-vertical.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Vertical</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-horizontal.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Horizontal</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-actions.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Actions</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-row-separator.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Row Separator</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-bordered.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Bordered</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-detail.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Detail</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-striped-row.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Striped Rows</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-floating-input.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Floating Input</span>
                                    </a>
                                </li>
                                <!-- ---------------------------------- -->
                                <!-- Form Wizard -->
                                <!-- ---------------------------------- -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-wizard.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Wizard</span>
                                    </a>
                                </li>
                                <!-- ---------------------------------- -->
                                <!-- Form Repeater -->
                                <!-- ---------------------------------- -->
                                <li class="sidebar-item">
                                    <a class="sidebar-link" href="form-repeater.html" aria-expanded="false">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Form Repeater</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- =================== -->
                        <!-- Tables -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:sidebar-minimalistic-line-duotone" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Tables</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="table-basic.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Basic Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-dark-basic.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Dark Basic Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-sizing.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Sizing Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item ">
                                    <a href="table-layout-coloured.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Coloured Table</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-basic.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Basic Initialisation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-api.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">API</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="table-datatable-advanced.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Advanced Initialisation</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- =================== -->
                        <!-- Charts -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:pie-chart-3-outline" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Charts</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="chart-apex-line.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Line Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-area.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Area Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-bar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Bar Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-pie.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Pie Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-radial.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Radial Chart</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="chart-apex-radar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Radar Chart</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- =================== -->
                        <!-- Tabler Icon -->
                        <!-- =================== -->
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <span class="d-flex">
                    <iconify-icon icon="solar:clipboard-heart-linear" class="fs-6"></iconify-icon>
                  </span>
                                <span class="hide-menu">Icon</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="icon-tabler.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Tabler Icon</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="icon-solar.html" class="sidebar-link sublink">
                                        <div class="round-16 d-flex align-items-center justify-content-center">
                                            <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        </div>
                                        <span class="hide-menu">Solar Icon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Others</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                               aria-expanded="false">
                                <iconify-icon icon="solar:align-left-line-duotone"></iconify-icon>
                                <span class="hide-menu">Multi level dd</span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="../docs/index.html" class="sidebar-link">
                                        <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        <span class="hide-menu">
                        Documentation</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        <span class="hide-menu">
                        item 1.1</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        <span class="hide-menu">
                        item 1.2</span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a class="has-arrow sidebar-link" href="javascript:void(0)" aria-expanded="false">
                                        <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        <span class="hide-menu">Menu 1.3</span>
                                    </a>
                                    <ul aria-expanded="false" class="collapse second-level">
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                                <span class="hide-menu">
                            item 1.3.1</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                                <span class="hide-menu">
                            item 1.3.2</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                                <span class="hide-menu">
                            item 1.3.3</span>
                                            </a>
                                        </li>
                                        <li class="sidebar-item">
                                            <a href="javascript:void(0)" class="sidebar-link">
                                                <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                                <span class="hide-menu">
                            item 1.3.4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sidebar-item">
                                    <a href="javascript:void(0)" class="sidebar-link">
                                        <iconify-icon icon="solar:stop-circle-line-duotone"></iconify-icon>
                                        <span class="hide-menu"> item 1.4</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        @yield('main')
        <script>
            function handleColorTheme(e) {
                document.documentElement.setAttribute("data-color-theme", e);
            }
        </script>
        <button
            class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class="icon ti ti-settings fs-7 text-white"></i>
        </button>

        <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
             aria-labelledby="offcanvasExampleLabel">
            <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                    Settings
                </h4>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body h-n80" data-simplebar="">
                <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                           autocomplete="off">
                    <label class="btn p-9 btn-outline-primary " for="light-layout">
                        <iconify-icon icon="solar:sun-2-outline" class="icon fs-7 me-2"></iconify-icon>
                        Light</label>
                    <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout"
                           autocomplete="off">
                    <label class="btn p-9 btn-outline-primary" for="dark-layout">
                        <iconify-icon icon="solar:moon-outline" class="icon fs-7 me-2"></iconify-icon>
                        Dark</label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off">
                    <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                        <iconify-icon icon="solar:align-left-linear" class="icon fs-7 me-2"></iconify-icon>
                        LTR</label>

                    <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off">
                    <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                        <iconify-icon icon="solar:align-right-linear" class="icon fs-7 me-2"></iconify-icon>
                        RTL
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                    <input type="radio" class="btn-check" name="color-theme-layout" id="Red_Theme" autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                           onclick="handleColorTheme('Red_Theme')" for="Red_Theme" data-bs-toggle="tooltip"
                           data-bs-placement="top" data-bs-title="RED_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                           onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                           data-bs-placement="top" data-bs-title="AQUA_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                           autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                           onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                           data-bs-placement="top" data-bs-title="PURPLE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                           autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                           onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
                           data-bs-placement="top" data-bs-title="GREEN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                           autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                           onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                           data-bs-placement="top" data-bs-title="CYAN_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>

                    <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                           autocomplete="off">
                    <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                           onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
                           data-bs-placement="top" data-bs-title="ORANGE_THEME">
                        <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                            <i class="ti ti-check text-white d-flex icon fs-5"></i>
                        </div>
                    </label>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="vertical-layout"
                               autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                            <iconify-icon icon="solar:slider-vertical-minimalistic-linear"
                                          class="icon fs-7 me-2"></iconify-icon>
                            Vertical
                        </label>
                    </div>
                    <div>
                        <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout"
                               autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                            <iconify-icon icon="solar:slider-minimalistic-horizontal-outline"
                                          class="icon fs-7 me-2"></iconify-icon>
                            Horizontal
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="layout" id="boxed-layout" autocomplete="off">
                    <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                        <iconify-icon icon="solar:cardholder-linear" class="icon fs-7 me-2"></iconify-icon>
                        Boxed
                    </label>

                    <input type="radio" class="btn-check" name="layout" id="full-layout" autocomplete="off">
                    <label class="btn p-9 btn-outline-primary" for="full-layout">
                        <iconify-icon icon="solar:scanner-linear" class="icon fs-7 me-2"></iconify-icon>
                        Full
                    </label>
                </div>

                <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <a href="javascript:void(0)" class="fullsidebar">
                        <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                            <iconify-icon icon="solar:sidebar-minimalistic-outline"
                                          class="icon fs-7 me-2"></iconify-icon>
                            Full</label>
                    </a>
                    <div>
                        <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar" autocomplete="off">
                        <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                            <iconify-icon icon="solar:siderbar-outline" class="icon fs-7 me-2"></iconify-icon>
                            Collapse
                        </label>
                    </div>
                </div>

                <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                <div class="d-flex flex-row gap-3 customizer-box" role="group">
                    <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off">
                    <label class="btn p-9 btn-outline-primary" for="card-with-border">
                        <iconify-icon icon="solar:library-broken" class="icon fs-7 me-2"></iconify-icon>
                        Border</label>

                    <input type="radio" class="btn-check" name="card-layout" id="card-without-border"
                           autocomplete="off">
                    <label class="btn p-9 btn-outline-primary" for="card-without-border">
                        <iconify-icon icon="solar:box-outline" class="icon fs-7 me-2"></iconify-icon>
                        Shadow
                    </label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dark-transparent sidebartoggler"></div>
<script src="{!! asset("assets/js/vendor.min.js") !!}"></script>
<!-- Import Js Files -->
<script src="{!! asset("assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js") !!}"></script>
<script src="{!! asset("assets/libs/simplebar/dist/simplebar.min.js") !!}"></script>
<script src="{!! asset("assets/js/theme/app.init.js") !!}"></script>
<script src="{!! asset("assets/js/theme/theme.js") !!}"></script>
<script src="{!! asset("assets/js/theme/app.min.js") !!}"></script>
<script src="{!! asset("assets/js/theme/sidebarmenu.js") !!}"></script>
<script src="{!! asset("assets/js/theme/feather.min.js") !!}"></script>
<script src="{!! asset("assets/libs/apexcharts/dist/apexcharts.min.js") !!}"></script>
<script src="{!! asset("assets/js/dashboards/dashboard1.js") !!}"></script>
<script src="{!! asset("assets/libs/apexcharts/dist/apexcharts.min.js") !!}"></script>
<script src="{!! asset("assets/js/dashboards/dashboard5.js") !!}"></script>


<!-- solar icons -->
<script src="{!! asset("assets/js/icon.js") !!}"></script>
<script src="{!! asset("npm/iconify-icon%401.0.8/dist/iconify-icon.min.js") !!}"></script>
<script src="{!! asset("assets/libs/datatables.net/js/jquery.dataTables.min.js") !!}"></script>
<script src="{!! asset("assets/js/datatable/datatable-advanced.init.js") !!}"></script>
<script src="{!! asset("buttons/2.4.2/js/dataTables.buttons.min.js") !!}"></script>
<script src="{!! asset("ajax/libs/jszip/3.10.1/jszip.min.js") !!}"></script>
<script src="{!! asset("ajax/libs/pdfmake/0.1.53/pdfmake.min.js") !!}"></script>
<script src="{!! asset("ajax/libs/pdfmake/0.1.53/vfs_fonts.js") !!}"></script>
<script src="{!! asset("buttons/2.4.2/js/buttons.html5.min.js") !!}"></script>
<script src="{!! asset("buttons/2.4.2/js/buttons.print.min.js") !!}"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

</body>

</html>
