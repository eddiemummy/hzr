@props(['segments'])
<div class="purchase-online-area pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2 class="title-border">Ürünlerimiz</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Nav tabs -->
                <ul class="tab-menu nav clearfix">
                    <li><a class="active" href="#best-seller" data-bs-toggle="tab">En Çok Satılanlar</a></li>
                    <li><a href="#most-view" data-bs-toggle="tab">Öne Çıkanlar </a></li>
                    <li><a href="#discounts" data-bs-toggle="tab">İndirimli Ürünler</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="best-seller">
                        <div class="row">
                            @foreach($segments["Çok satanlar"] as $newProduct)
                                <!-- Single-product start -->
                                <div class="single-product col-xl-3 col-lg-4 col-md-6">
                                    <div class="product-img">
                                        <span class="pro-label new-label">Çok satanlar</span>
                                        <a href="{{ route('product.single',['slug'=>$newProduct->slug]) }}"><img
                                                src="{{ asset('storage/'.$newProduct->default_image) }}"
                                                alt=""></a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <div class="fix">
                                            <h4 class="post-title floatleft"><a
                                                    href="{{ route('product.single',['slug'=>$newProduct->slug]) }}">{!! $newProduct->name !!}</a>
                                            </h4>
                                            <p class="floatright hidden-sm d-none d-md-block">{!! $newProduct->category->name !!}</p>
                                        </div>
                                        <div class="fix">
                                            @isset($newProduct->old_price)
                                                @if($newProduct->old_price - $newProduct->new_price > 0)
                                                    <span class="pro-price floatleft"
                                                          style='color:black;text-decoration:line-through;color:darkcyan; margin-right: 10px;'> &#8378; {{ $newProduct->old_price }}</span>
                                                @endif
                                            @endisset
                                            <span class="pro-price floatleft">{!! $newProduct->new_price !!} ₺</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="most-view">
                        <div class="row">
                            @foreach($segments["Öne çıkanlar"] as $newProduct)
                                <!-- Single-product start -->
                                <div class="single-product col-xl-3 col-lg-4 col-md-6">
                                    <div class="product-img">
                                        <span class="pro-label new-label">Öne çıkanlar</span>
                                        <a href="{{ route('product.single',['slug'=>$newProduct->slug]) }}"><img
                                                src="{{ asset('storage/'.$newProduct->default_image) }}"
                                                alt=""></a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <div class="fix">
                                            <h4 class="post-title floatleft"><a
                                                    href="{{ route('product.single',['slug'=>$newProduct->slug]) }}">{!! $newProduct->name !!}</a>
                                            </h4>
                                            <p class="floatright hidden-sm d-none d-md-block">{!! $newProduct->category->name !!}</p>
                                        </div>
                                        <div class="fix">
                                            @isset($newProduct->old_price)
                                                @if($newProduct->old_price - $newProduct->new_price > 0)
                                                    <span class="pro-price floatleft"
                                                          style='color:black;text-decoration:line-through;color:darkcyan; margin-right: 10px;'> &#8378; {{ $newProduct->old_price }}</span>
                                                @endif
                                            @endisset
                                            <span class="pro-price floatleft">{!! $newProduct->new_price !!} ₺</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="discounts">
                        <div class="row">
                            @foreach($segments["İndirimli"] as $newProduct)
                                <!-- Single-product start -->
                                <div class="single-product col-xl-3 col-lg-4 col-md-6">
                                    <div class="product-img">
                                        <span class="pro-label new-label">İndirimli</span>
                                        <a href="{{ route('product.single',['slug'=>$newProduct->slug]) }}"><img
                                                src="{{ asset('storage/'.$newProduct->default_image) }}"
                                                alt=""></a>
                                    </div>
                                    <div class="product-info clearfix">
                                        <div class="fix">
                                            <h4 class="post-title floatleft"><a
                                                    href="{{ route('product.single',['slug'=>$newProduct->slug]) }}">{!! $newProduct->name !!}</a>
                                            </h4>
                                            <p class="floatright hidden-sm d-none d-md-block">{!! $newProduct->category->name !!}</p>
                                        </div>
                                        <div class="fix">
                                            @isset($newProduct->old_price)
                                                    <span class="pro-price floatleft"
                                                          style='color:black;text-decoration:line-through;color:darkcyan; margin-right: 10px;'> &#8378; {{ $newProduct->old_price }}</span>
                                            @endisset
                                            <span class="pro-price floatleft">{!! $newProduct->new_price !!} ₺</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single-product end -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
