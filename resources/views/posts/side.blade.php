<x-layout>
    <x-slot name="heading">
        <x-head>
        <x-slot:title>
            {{ $is_cat ? $catName : 'Ürünler'  }}
        </x-slot:title>
       </x-head>
    </x-slot>
    <x-mobile-header/>
    <div class="product-area pt-80 pb-80 product-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <!-- Widget-Search start -->
                    <aside class="widget widget-search mb-30">
                        <form action="{!! Request::url() !!}" method="GET">
                            <input type="text" name="s" placeholder="Ürün ara..."
                                   value="{!! request()->get("s") ?: null !!}">
                            <button type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                    </aside>
                    <!-- Widget-search end -->
                    <!-- Widget-Categories start -->
                    @if(!$is_cat)
                        <aside class="widget widget-categories  mb-30">
                            <div class="widget-title">
                                <h4>Kategoriler</h4>
                            </div>
                            <div id="cat-treeview" class="widget-info">
                                <ul>
                                    @foreach(getCategories() as $cat)
                                        <li><a href="{!! route('product.category.all', ["slug" => $cat->slug]) !!}">{!! $cat->name !!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    @endif
                    <!-- Widget-categories end -->
                    <!-- Shop-Filter start -->
                    <form action="{!! request()->url() !!}" method="GET">
                        <aside class="widget shop-filter">
                            <div class="widget-title">
                                <h4>FİYAT</h4>
                            </div>
                            <div class="widget-info">
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="submit" value="Fiyat aralığı :">
                                        <input type="text" id="amount" name="p">
                                    </div>
                                    <div id="slider-range" data-min="{!! $filterMin !!}" data-max="{!! $filterMax !!}"></div>
                                </div>
                            </div>
                        </aside>
                        <!-- Shop-Filter end -->
                        <!-- Widget-Color start -->
                        <aside class="widget widget-color">
                            <div class="widget-title">
                                <h4>RENK</h4>
                            </div>
                            <div class="widget-info color-filter clearfix">
                                <ul>
                                    @foreach($colors as $color)
                                        <li>
                                            <input type="checkbox" @if(in_array($color->hex, $selectedColors)) checked @endif name="c[]" value="{!! $color->hex !!}">
                                           <span style="color: {!! $color->hex !!}">{!! $color->name !!}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>

                        <!-- Widget-Color end -->
                        <!-- Widget-Size start -->
                        <aside class="widget widget-size">
                            <div class="widget-info clearfix">
                                <button class="submit-button submit-btn-2 button-one" type="submit">Ara</button>
                            </div>
                        </aside>
                    </form>
                    <!-- Widget-Size end -->
                    <!-- Widget-banner start -->
                    <aside class="widget widget-banner hidden-sm">
                        <div class="widget-info widget-banner-img">
                            <a href="#"><img src="img/banner/5.jpg" alt=""></a>
                        </div>
                    </aside>
                    <!-- Widget-banner end -->
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <!-- Shop-Content End -->
                    <div class="shop-content mt-tab-30 mb-30 mb-lg-0">
                        <div class="product-option mb-30 clearfix">
                            <!-- Nav tabs -->
                            <ul class="nav d-block shop-tab">
                                <li><a class="active" href="#grid-view" data-bs-toggle="tab"><i
                                            class="zmdi zmdi-view-module"></i></a></li>
                                <li><a href="#list-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-list"></i></a>
                                </li>
                            </ul>
                        </div>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="grid-view">
                                <div class="row">
                                    <!-- Single-product start -->
                                    @if(count($products) == 0)
                                        Üzgünüz, aradığınız kriterlere uygun ürün bulunamadı.
                                    @endif
                                    @foreach($products as $product)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    {!! $product->getLabels(); !!}
                                                    <a href="{{ route('product.single',['slug'=>$product->slug]) }}"><img
                                                            src="{{ asset('storage/'.$product->default_image) }}"
                                                            alt="{!! $product->name !!}"></a>
                                                </div>
                                                <div class="product-info clearfix text-center">
                                                    <div class="fix">
                                                        <h4 class="post-title"><a
                                                                href="{{ route('product.single',['slug'=>$product->slug]) }}">{!! $product->name !!}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="fix">
                                                        @isset($product->old_price)
                                    @if(($product->old_price - $product->new_price) > 0)
                                        <span class="pro-price" style='color:black;text-decoration:line-through;'>
                                            <span style="color:darkcyan">&#8378; {{ $product->old_price }}</span>
                                        </span>
                                        &nbsp;&nbsp;
                                    @endif
                                @endisset
                                                        <span class="pro-price">{!! $product->new_price !!} ₺</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="tab-pane" id="list-view">
                                <div class="row shop-list">
                                    <!-- Single-product start -->
                                    @foreach($products as $product)
                                        <div class="col-lg-12">
                                            <div class="single-product clearfix">
                                                <div class="product-img">
                                                    {!! $product->getLabels() !!}
                                                    <a href="{{ route('product.single',['slug'=>$product->slug]) }}"><img
                                                            src="{{ asset('storage/'.$product->default_image) }}"
                                                            alt="{!! $product->name !!}"></a>
                                                </div>
                                                <div class="product-info">
                                                    <div class="fix">
                                                        <h4 class="post-title floatleft"><a
                                                                href="{{ route('product.single',['slug'=>$product->slug]) }}">{!! $product->name !!}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="fix">
                                                        @isset($product->old_price)
                                                            @if(($product->old_price - $product->new_price) > 0)
                                                                <span class="pro-price" style='color:black;text-decoration:line-through;'>
                                            <span style="color:darkcyan">&#8378; {{ $product->old_price }}</span>
                                        </span>
                                                                &nbsp;&nbsp;
                                                            @endif
                                                        @endisset
                                                        <span class="pro-price">{!! $product->new_price !!} ₺</span>
                                                    </div>
                                                    <div class="product-description">
                                                        <p>{!! $product->description !!}</p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <!-- Single-product end -->
                                    <!-- Single-product start -->

                                    <!-- Single-product end -->
                                    <!-- Single-product start -->

                                    <!-- Single-product end -->
                                    <!-- Single-product start -->

                                    <!-- Single-product end -->
                                    <!-- Single-product start -->

                                    <!-- Single-product end -->
                                </div>
                            </div>
                        </div>
                        <!-- Pagination start -->
                        <div class="shop-pagination text-center">
                            {!! $products->links() !!}
                        </div>
                        <!-- Pagination end -->
                    </div>
                    <!-- Shop-Content End -->
                </div>
            </div>
        </div>
    </div>
</x-layout>
