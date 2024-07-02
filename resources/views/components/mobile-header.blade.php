<header id="sticky-menu" class="header">
    <div class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-4 col-7">
                    <div class="logo text-md-center">
                        <a href="/"><img src="{!! asset('img/logo/logo.png?v=11') !!}" alt="logo" width="200"></a>
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
                                <ul>
                                    @foreach(getCategories() as $category)
                                        <li>
                                            <a href="{!! route('product.category.all', ["slug" => $category->slug]) !!}">{!! $category->name !!}</a>
                                        </li>
                                    @endforeach
                                </ul>
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
