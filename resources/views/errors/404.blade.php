<x-layout>
    <!-- 404-AREA START -->
			<div class="area-404 pt-80 pb-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="error-content text-center">
								<img src="{{ asset('img/bg/error.png') }}" alt="">
								<h4 class="text-light-black mt-60">Ooops....404 Hatası</h4>
								<h5 class="text-light-black">Üzgünüz ama aradığınız sayfa mevcut değil</h5>
                                <a class="button-one submit-btn-4 go-to-home bg-white text-uppercase text-light-black" href="{{ route('home') }}" data-text="ana sayfaya dön">ana sayfaya dön</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 404-AREA END -->
</x-layout>
