@props(['sliders','products'])
<section class="slider-banner-area clearfix">
				<!-- Sidebar-social-media start -->
				<div class="sidebar-social d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
                                @php $socials = getSiteSetting() @endphp
                                @if($socials->instagram)
								<li><a href="{!! $socials->instagram !!}" target="_blank" title="Twitter"><i class="zmdi zmdi-instagram"></i></a></li>
                                @endif
                                @if($socials->twitter)
                                    <li><a href="{!! $socials->twitter !!}" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                                @endif
                                @if($socials->facebook)
                                    <li><a href="{!! $socials->facebook !!}" target="_blank" title="Twitter"><i class="zmdi zmdi-facebook"></i></a></li>
                                @endif
                                @if($socials->youtube)
                                    <li><a href="{!! $socials->youtube !!}" target="_blank" title="Twitter"><i class="zmdi zmdi-youtube"></i></a></li>
                                @endif
							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
				<div class="banner-left floatleft">
					<!-- Slider-banner start -->
					<div class="slider-banner">
                        @php $prods = \App\Models\Product::latest()->take(2)->get(); @endphp
                        @foreach($prods as $product)
                        <div class="single-banner banner-{!! $product->id !!}">
							<a class="banner-thumb" href="#"><img src="{!! asset('storage/'.$product->default_image) !!}" alt=""></a>
							<span class="pro-label new-label">yeni</span>
							<span class="price">{!! $product->new_price !!}&#8378;</span>
							<div class="banner-brief">
								<h2 class="banner-title"><a href="{{route('product.single',['slug'=>$product->slug])}}">{!! $product->name !!}</a></h2>
								<p class="mb-0">{{ $product->category->name }}</p>
							</div>
							<a href="{{route('product.single',['slug'=>$product->slug])}}" class="button-one font-16px" data-text="İncele">İncele</a>
						</div>
                        @endforeach

					</div>
					<!-- Slider-banner end -->
				</div>
				<div class="slider-right floatleft">
					<!-- Slider-area start -->
					<div class="slider-area">
						<div class="bend niceties preview-2">
							<div id="ensign-nivoslider" class="slides">
                                @foreach($sliders as $slider)
								<img src="{!! asset("storage/".$slider->image) !!}" alt="" title="#slider-direction-{!! $slider->id !!}">
                                 @endforeach
							</div>

                            @foreach($sliders as $slider)
                               <div id="slider-direction-{!! $slider->id !!}" class="slider-direction">
								<div class="slider-progress"></div>
								<div class="slider-content t-lfl s-tb slider-1">
									<div class="title-container s-tb-c title-compress">
										<div class="layer-1">
											<div class="wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.5s">
												<h2 class="slider-title3 text-uppercase mb-0">{!! $slider->title !!}</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="1.5s" data-wow-delay="0.5s">
												<h2 class="slider-title1 text-uppercase">{!! $slider->highlight !!}</h2>
											</div>
											<div class="wow fadeInUpBig" data-wow-duration="2s" data-wow-delay="0.5s">
												<p class="slider-pro-brief">{!! $slider->body !!}</p>
											</div>
                                            @isset($slider->button)
											<div class="wow fadeInUpBig" data-wow-duration="2.5s" data-wow-delay="0.5s">
												<a href="{!! $slider->link !!}" class="button-one style-2 text-uppercase mt-20" data-text="{!! $slider->button !!}">{!! $slider->button !!}</a>
											</div>
                                            @endisset
										</div>
									</div>
								</div>
							</div>
                            @endforeach
						</div>
					</div>
					<!-- Slider-area end -->
				</div>
				<!-- Sidebar-social-media start -->
				<div class="sidebar-account d-none d-md-block">
					<div class="table">
						<div class="table-cell">
							<ul>
								<li><a class="search-open" href="#" title="Search"><i class="zmdi zmdi-search"></i></a></li>

							</ul>
						</div>
					</div>
				</div>
				<!-- Sidebar-social-media start -->
			</section>
