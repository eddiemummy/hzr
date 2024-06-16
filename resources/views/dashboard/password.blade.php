@extends('dashboard.dash')
@section('main')

    <form method="POST" action="{{ route('dashboard.security') }}">
        @csrf
        @method("PUT")
    <div class="row py-xl-5">
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h4 class="card-title mb-0">Giriş Bilgilerini Düzenle</h4>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label for="address" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputname" name="email" value="{{ $user->email }}">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Şifre</label>
                    <input type="text" class="form-control" id="exampleInputname" name="password">
                  </div>
               <button class="btn btn-primary" type="submit">Düzenle</button>
                </div>
              </div>
            </div>
    </div>
    </form>

@endsection
