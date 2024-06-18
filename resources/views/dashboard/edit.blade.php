@extends('dashboard.dash')
@section('main')

    <form method="POST" action="{{ route('dashboard.update') }}">
        @csrf
        @method("PUT")
    <div class="row py-xl-5">
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h4 class="card-title mb-0">İletişim Adresini Düzenle</h4>
                </div>
                <div class="card-body p-4">
                  <div class="mb-4">
                    <label for="address" class="form-label">Adres</label>
                    <input type="text" class="form-control" id="exampleInputname" name="address" value="{{ $contact->address }}">
                  </div>
                  <div class="mb-4">
                    <label for="phone" class="form-label">Telefon</label>
                    <input type="text" class="form-control" id="exampleInputname" name="phone" value="{{ $contact->phone }}">
                  </div>
                  <div class="mb-4">
                    <label class="form-label">Email</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="exampleInputname" name="email" value="{{ $contact->email }}">
                    </div>
                  </div>
                  <button class="btn btn-success" type="submit">
                      <iconify-icon icon="tabler:edit" class="fs-7"></iconify-icon>
                  </button>
                </div>
              </div>
            </div>
    </div>
    </form>

@endsection
