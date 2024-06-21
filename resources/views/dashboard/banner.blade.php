@extends('dashboard.dash')
@section('main')

    <form method="POST" action="{{ route('dashboard.banner') }}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
    <div class="row py-xl-5">
            <div class="col-lg-6">
              <div class="card">
                <div class="px-4 py-3 border-bottom">
                  <h4 class="card-title mb-0">Reklam</h4>
                </div>

                <div class="card-body p-4">
                     <div class="mb-4">
                    <label for="image" class="form-label">Resim</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="exampleInputname" name="image">
                        @isset($banner->image)
                        <img src="{{ asset('storage/'. $banner->image) }}" width="200">
                        @endisset
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
