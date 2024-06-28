@php $contact = getContact(); @endphp
<x-layout>
     <x-slot name="heading">
        <x-head>
        <x-slot:title>
            {!! 'İletişim' !!}
        </x-slot:title>
       </x-head>
    </x-slot>
    <div class="contact-us-area  pt-80 pb-80">
				<div class="container">
					<div class="contact-us customer-login bg-white">
						<div class="row">
							<div class="col-lg-4 col-md-5">
								<div class="contact-details">
									<h4 class="title-1 title-border text-uppercase mb-30">İLETİŞİM BİLGİLERİ</h4>
									<ul>
										<li>
											<i class="zmdi zmdi-phone"></i>
											<span>{{ $contact->phone }} </span>

										</li>
										<li>
											<i class="zmdi zmdi-email"></i>
											<span>{{ $contact->email }}</span>

										</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-8 col-md-7 mt-xs-30">
                                <x-alert/>
								<div class="map-area">
                                        <form id="contact-form" method="post" action="{{ route('contact.mail') }}">
                                            @csrf
                                            <h4 class="title-1 title-border text-uppercase mb-30">Mesaj Gönder</h4>
                                            <input type="text" name="name" placeholder="İsminiz...">
                                            <input type="text" name="email" placeholder="Emailiniz...">
                                            <textarea class="custom-textarea" name="message" placeholder="Yorumunuz..."></textarea>
                                            <button class="button-one submit-button mt-20" data-text="Gönder" type="submit">GÖNDER</button>
                                        </form>
								</div>
                            </div>
						</div>
					</div>
				</div>
			</div>
</x-layout>
