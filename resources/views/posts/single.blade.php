<x-layout>
    <x-slot name="heading">
        <x-head>
        <x-slot:title>
            {!! $product->name !!}
        </x-slot:title>
        <x-slot:meta_description>
            {!! mb_substr(strip_tags($product->description), 0, 300) !!}
        </x-slot:meta_description>
       </x-head>
    </x-slot>
    <x-mobile-header/>
    <div class="product-area single-pro-area pt-80 pb-80 product-style-2">
        <div class="container">
            <div class="row shop-list single-pro-info no-sidebar">
                <!-- Single-product start -->
                <div class="col-lg-12">
                    <div class="single-product clearfix">
                        <!-- Single-pro-slider Big-photo start -->
                        <div class="single-pro-slider single-big-photo view-lightbox slider-for">
                            <div>
                                <img src="{{ asset('storage/'.$product->default_image) }}" alt="{!! $product->name !!}">
                                <a class="view-full-screen" href="{{ asset('storage/'.$product->default_image) }}"
                                   data-lightbox="roadtrip" data-title="{!! $product->name !!}">
                                    <i class="zmdi zmdi-zoom-in"></i>
                                </a>
                            </div>
                            @foreach($product->productImages as $img)
                                <div>
                                    <img src="{{ asset('storage/'.$img->image) }}" alt="{!! $product->name !!}">
                                    <a class="view-full-screen" href="{{ asset('storage/'.$img->image) }}"
                                       data-lightbox="roadtrip" data-title="{!! $product->name !!}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <!-- Single-pro-slider Big-photo end -->

                        <div class="product-info">
                            <div class="fix">
                                <h4 class="post-title floatleft">{{ $product->name }}</h4>
                            </div>
                            <div class="fix mb-20">
                                @isset($product->old_price)
                                    @if(($product->old_price - $product->new_price) > 0)
                                        <span class="pro-price" style='color:black;text-decoration:line-through;'>
                                            <span style="color:darkcyan">&#8378; {{ $product->old_price }}</span>
                                        </span>
                                        &nbsp;&nbsp;
                                    @endif
                                @endisset
                                <span class="pro-price">&#8378; {{ $product->new_price }}</span>
                            </div>
                            <div class="product-description">
                                <p>{!! $product->description !!}</p>
                            </div>
                            <!-- color start -->
                            <div class="color-filter single-pro-color mb-20 clearfix">
                                <ul>
                                    <li><span class="color-title text-capitalize">renk</span></li>
                                    @php
                                        $colors = explode(',',$product->colors)
                                    @endphp
                                    @foreach($colors as $color)
                                        <li><a href="#"><span class="color"
                                                              style="width: 15px;height: 15px;background-color:{!! $color !!}"></span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- color end -->
                            <!-- Size start -->
                            <div class="clearfix display-flex">
                                <div class="wp-buy-btn">
                                    <a target="_blank"
                                       href="https://api.whatsapp.com/send?phone=905301179782&text={!! $product->name." ürününüz hakkında bilgi almak istiyorum." !!}"><i
                                            class="zmdi zmdi-whatsapp size-20"></i> Satın Al</a>
                                </div>

                                <div class="phone-buy-btn">
                                    <a target="_blank" href="tel:905301179782"><i class="zmdi zmdi-phone-in-talk size-20"></i> Satın Al</a>
                                </div>
                            </div>
                            <!-- Size end -->

                            <!-- Single-pro-slider Small-photo start -->
                            <div class="single-pro-slider single-sml-photo slider-nav">
                                <div>
                                    <img src="{{ asset('storage/'.$product->default_image) }}" alt="{!! $product->name !!}">
                                </div>
                                @foreach($product->productImages as $img)
                                    <div>
                                        <img src="{{ asset('storage/'.$img->image) }}" alt="{!! $product->name !!}">
                                    </div>
                                @endforeach
                            </div>
                            <!-- Single-pro-slider Small-photo end -->
                        </div>
                    </div>
                </div>
                <!-- Single-product end -->
            </div>
            <!-- single-product-tab start -->
            <div class="single-pro-tab">
                <div class="row">

                    <div class="col-md-9">
                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div class="tab-pane active" id="reviews">
                                <div class="pro-tab-info pro-reviews">
                                    <div class="customer-review mb-60">
                                        <h3 class="tab-title title-border mb-30">KULLANICI YORUMLARI</h3>
                                        @foreach($reviews as $rev)
                                            <div class="fix">
                                                <div class="floatleft mbl-center">
                                                    <h5 class="text-uppercase mb-0"><strong>{!! $rev->name !!}</strong>
                                                    </h5>
                                                    <p class="reply-date">{!! $rev->created_at !!}</p>
                                                </div>

                                            </div>
                                            <p class="mb-0">{!! $rev->review !!}</p>
                                            <br>
                                        @endforeach
                                    </div>
                                    <div class="leave-review">
                                        <h3 class="tab-title title-border mb-30">YORUM BIRAK</h3>
                                        <div class="reply-box">
                                            <form method="POST" action="{{ route('product.review') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="hidden" name="product_id"
                                                               value="{!! $product->id !!}">
                                                        <input type="text" placeholder="isminiz..." name="name">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="mailiniz..." name="email">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="custom-textarea" name="review"
                                                                  placeholder="yorumunuz..." required></textarea>
                                                        <button type="submit" data-text="YORUMU GÖNDER"
                                                                class="button-one submit-button mt-20">YORUMU GÖNDER
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="information">
                                <div class="pro-tab-info pro-information">
                                    <h3 class="tab-title title-border mb-30">Product information</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                        messages in con sectetur posuere dolor non.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                        messages in con sectetur posuere dolor non.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                        messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tags">
                                <div class="pro-tab-info pro-information">
                                    <h3 class="tab-title title-border mb-30">tags</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                        messages in con sectetur posuere dolor non.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                        messages in con sectetur posuere dolor non.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan egestas
                                        elese ifend. Phasellus a felis at est bibendum feugiat ut eget eni Praesent et
                                        messages in con sectetur posuere dolor non.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-product-tab end -->
        </div>
    </div>
</x-layout>
