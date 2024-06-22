<x-layout>
<div class="product-area pt-80 pb-80 product-style-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 order-2 order-lg-1">
							<!-- Widget-Search start -->
							<aside class="widget widget-search mb-30">
								<form action="#">
									<input type="text" placeholder="Search here...">
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
									<h4>Categories</h4>
								</div>
								<div id="cat-treeview" class="widget-info product-cat boxscrol2">
									<ul>
										<li><span>Chair</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>
										<li class="open"><span>Furniture</span>
											<ul>
												<li><a href="#">Men Bag</a></li>
												<li><a href="#">Shoes</a></li>
												<li><a href="#">Watch</a></li>
												<li><a href="#">T-shirt</a></li>
												<li><a href="#">Shirt</a></li>
											</ul>
										</li>
										<li><span>Accessories</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>
										<li><span>Top Brands</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>
										<li><span>Jewelry</span>
											<ul>
												<li><a href="#">T-Shirts</a></li>
												<li><a href="#">Striped Shirts</a></li>
												<li><a href="#">Half Shirts</a></li>
												<li><a href="#">Formal Shirts</a></li>
												<li><a href="#">Bilazers</a></li>
											</ul>
										</li>
									</ul>
								</div>
							</aside>
                            @endif
							<!-- Widget-categories end -->
							<!-- Shop-Filter start -->
							<aside class="widget shop-filter mb-30">
								<div class="widget-title">
									<h4>FİYAT</h4>
								</div>
								<div class="widget-info">
									<div class="price_filter">
										<div class="price_slider_amount">
											<input type="submit" value="You range :">
											<input type="text" id="amount" name="price" placeholder="Add Your Price">
										</div>
										<div id="slider-range"></div>
									</div>
								</div>
							</aside>
							<!-- Shop-Filter end -->
							<!-- Widget-Color start -->
							<aside class="widget widget-color mb-30">
								<div class="widget-title">
									<h4>RENK</h4>
								</div>
								<div class="widget-info color-filter clearfix">
									<ul>
										<li><a href="#"><span class="color color-1"></span>LightSalmon<span class="count">12</span></a></li>
										<li><a href="#"><span class="color color-2"></span>Dark Salmon<span class="count">20</span></a></li>
										<li><a href="#"><span class="color color-3"></span>Tomato<span class="count">59</span></a></li>
										<li><a class="active" href="#"><span class="color color-4"></span>Deep Sky Blue<span class="count">45</span></a></li>
										<li><a href="#"><span class="color color-5"></span>Electric Purple<span class="count">78</span></a></li>
										<li><a href="#"><span class="color color-6"></span>Atlantis<span class="count">10</span></a></li>
										<li><a href="#"><span class="color color-7"></span>Deep Lilac<span class="count">15</span></a></li>
									</ul>
								</div>
							</aside>

							<!-- Widget-Color end -->
							<!-- Widget-Size start -->
							<aside class="widget widget-size mb-30">
								<div class="widget-title">
									<h4>ÖLÇÜ</h4>
								</div>
								<div class="widget-info size-filter clearfix">
									<ul>
										<li><a href="#">M</a></li>
										<li><a class="active" href="#">S</a></li>
										<li><a href="#">L</a></li>
										<li><a href="#">SL</a></li>
										<li><a href="#">XL</a></li>
									</ul>
								</div>
							</aside>
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
										<li><a class="active" href="#grid-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-module"></i></a></li>
										<li><a href="#list-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
									</ul>
									<div class="showing text-end d-none d-md-block">
										<p class="mb-0">Showing 01-09 of 17 Results</p>
									</div>
								</div>

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane active" id="grid-view">
										<div class="row">
											<!-- Single-product start -->
                                            @foreach($products as $product)
											<div class="col-lg-4 col-md-6">
												<div class="single-product">
													<div class="product-img">
                                                        @foreach(explode(',', $product->segment) as $segment)
                                                          <span class="pro-label new-label">{!! $segment !!}</span>
                                                        @endforeach
														<a href="{{ route('product.single',['slug'=>$product->slug]) }}"><img src="{{ asset('storage/'.$product->default_image) }}" alt=""></a>
													</div>
													<div class="product-info clearfix text-center">
														<div class="fix">
															<h4 class="post-title"><a href="{{ route('product.single',['slug'=>$product->slug]) }}">{!! $product->name !!}</a></h4>
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
														@foreach(explode(',', $product->segment) as $segment)
                                                          <span class="pro-label new-label">{!! $segment !!}</span>
                                                        @endforeach
														<span class="pro-price-2">&#8378; {!! $product->new_price !!}</span>
														<a href="{{ route('product.single',['slug'=>$product->slug]) }}"><img src="{{ asset('storage/'.$product->default_image) }}" alt=""></a>
													</div>
													<div class="product-info">
														<div class="fix">
															<h4 class="post-title floatleft"><a href="{{ route('product.single',['slug'=>$product->slug]) }}">{!! $product->name !!}</a></h4>
														</div>
														<div class="fix mb-20">
															<span class="pro-price">&#8378; {!! $product->new_price !!}</span>
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
									<div class="pagination">
										<ul>
											<li><a href="#"><i class="zmdi zmdi-long-arrow-left"></i></a></li>
											<li><a href="#">01</a></li>
											<li><a class="active" href="#">02</a></li>
											<li><a href="#">03</a></li>
											<li><a href="#">04</a></li>
											<li><a href="#">05</a></li>
											<li><a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a></li>
										</ul>
									</div>
								</div>
								<!-- Pagination end -->
							</div>
							<!-- Shop-Content End -->
						</div>
					</div>
				</div>
			</div>
</x-layout>