@extends('dashboard.dash')
@section('main')

    <form method="POST" action="{{ route('dashboard.updateAbout') }}", enctype="multipart/form-data">
        @csrf
        @method("PUT")
    <div class="row py-xl-5">
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h4 class="card-title mb-0">Hakkımızda Sayfasını Düzenle</h4>
                </div>
                  <div class="col-md-12">
                      <div class="form-floating mb-3">
                          <textarea id="editor" name="body">{!! $about->body !!}</textarea>
                      </div>
                  </div>
                <div class="card-body p-4">
                     <div class="mb-4">
                    <label for="image" class="form-label">Resim</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="exampleInputname" name="image">
                        <img src="{{ asset('storage/'. $about->image) }}" width="200">
                    </div>
                  </div>
                  <button class="btn btn-primary" type="submit">
                      <iconify-icon icon="tabler:edit" class="fs-7"></iconify-icon>
                  </button>
                </div>
              </div>
            </div>

    </div>
    </form>

@endsection
