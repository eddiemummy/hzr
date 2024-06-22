@props(['newProducts'])
<div class="product-area pt-80 pb-35">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="section-title text-center">
								<h2 class="title-border">Yeni Ürünlerimiz</h2>
							</div>
							<div class="product-slider style-1 arrow-left-right">
                                @foreach($newProducts as $newProduct)
								<!-- Single-product start -->
								<div class="single-product">
									<div class="product-img">
										<span class="pro-label new-label">Yeni</span>
                                        <a href="{{ route('product.single',['slug'=>$newProduct->slug]) }}"><img
                                                src="{{ asset('storage/'.$newProduct->default_image) }}"
                                                alt=""></a>
									</div>
									<div class="product-info clearfix">
										<div class="fix">
											<h4 class="post-title floatleft"><a href="{{ route('product.single',['slug'=>$newProduct->slug]) }}">{!! $newProduct->name !!}</a></h4>
											<p class="floatright hidden-sm d-none d-md-block">{!! $newProduct->category->name !!}</p>
										</div>
										<div class="fix">
                                            @isset($newProduct->old_price)
                                                @if($newProduct->old_price - $newProduct->new_price > 0)
                                            <span class="pro-price floatleft" style='color:black;text-decoration:line-through;color:darkcyan; margin-right: 10px;'> &#8378; {{ $newProduct->old_price }}</span>
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
					</div>
				</div>
			</div>
