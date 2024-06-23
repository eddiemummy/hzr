<div class="mobile-header-top d-block d-md-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- header-search-mobile start -->
                <div class="header-search-mobile">
                    <div class="table">
                        <div class="table-cell">
                            <ul>
                                <li><a class="search-open" href="#"><i class="zmdi zmdi-search"></i></a></li>
                                <li><a href="login.html"><i class="zmdi zmdi-lock"></i></a></li>
                                <li><a href="my-account.html"><i class="zmdi zmdi-account"></i></a></li>
                                <li><a href="wishlist.html"><i class="zmdi zmdi-favorite"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header-search-mobile start -->
            </div>
        </div>
    </div>
</div>
<header id="sticky-menu" class="header">
    <div class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4 col-7">
                    <div class="logo text-md-center">
                        <a href="/"><img src="{!! asset('img/logo/logo1.png') !!}" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- MAIN-MENU START -->
    <div class="menu-toggle hamburger hamburger--emphatic d-none d-md-block">
        <div class="hamburger-box">
            <div class="hamburger-inner"></div>
        </div>
    </div>
    <div class="main-menu  d-none d-md-block">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">ANA SAYFA</a>

                </li>
                <li><a href="{{ route('product.all') }}">ÜRÜNLERİMİZ</a></li>
                <li><a href="#">KATEGORİLER</a>
                    <div class="sub-menu menu-scroll">
                        <ul>
                            <li class="menu-title">KATEGORİLER</li>
                            @foreach(getCategories() as $category)
                                <li>
                                    <a href="{!! route('product.category.all', ["slug" => $category->slug]) !!}">{!! $category->name !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('about') }}">HAKKIMIZDA</a></li>
                <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
            </ul>
        </nav>
    </div>
    <!-- MAIN-MENU END -->
</header>
<div class="mobile-menu-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 d-block d-md-none">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="{{ route('home') }}l">Ana Sayfa</a>
                            </li>
                            <li><a href="{{ route('product.all') }}">ÜRÜNLERİMİZ</a></li>
                            <li><a href="#">KATEGORİLER</a>
                                <div class="sub-menu menu-scroll">
                                    <ul>
                                        <li class="menu-title">KATEGORİLER</li>
                                        @foreach(getCategories() as $category)
                                            <li>
                                                <a href="{!! route('product.category.all', ["slug" => $category->slug]) !!}">{!! $category->name !!}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{ route('about') }}">HAKKIMIZDA</a></li>
                            <li><a href="{{ route('contact') }}">İLETİŞİM</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
