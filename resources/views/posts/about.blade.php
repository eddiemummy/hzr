<x-layout>
    <div class="about-us-area  pt-80 pb-80">
				<div class="container">
					<div class="about-us bg-white ">
						<div class="row">
							<div class="col-lg-6">
								<div class="about-photo mb-4">
									<img src="{{ asset('storage/'. $about->image) }}" alt="">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="about-photo bg-dark-white">
									<h4 class="title-1 title-border text-uppercase mb-30">Hakkımızda</h4>
									<p>{{ $about->body }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
</x-layout>
