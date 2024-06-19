<div class="subscribe-area pt-80">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="subscribe">
								<form action="{{ route("news.store") }}" method="POST" >
                                    @csrf
									<input type="text" name="email" placeholder="Email adresinizi giriniz">
                                    @error('email')
                                    <p style="color: red; font-size: small">{{ $message }}</p>
                                    @enderror
									<button class="submit-button submit-btn-2 button-one" data-text="Abone ol" type="submit">Abone Ol</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
