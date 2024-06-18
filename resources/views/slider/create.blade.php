@extends('dashboard.dash')

@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase"> SLİDER OLUŞTUR</h5>
              <nav aria-label="breadcrumb" class="d-flex align-items-center">


              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <!-- ----------------------------------------- -->
              <!-- 1. Basic Form -->
              <!-- ----------------------------------------- -->
              <!-- start Basic Form -->
              <div class="card">
                <div class="card-body">
                  <form method="post" action="{{ route('sliders.store') }}" enctype="multipart/form-data">
                      @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="title" placeholder="Başlık" value="{{ old('title') }}">
                            @error('title')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="title">Başlık</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name ="body" placeholder="İçerik">{{ old('body') }}</textarea>
                            @error('body')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="body">İçerik</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control"  name="highlight" placeholder="Vurgu" {{ old('highlight') }}>
                            @error('highlight')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="highlight">Vurgu</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control"  name="button" placeholder="Buton">
                            @error('button')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="button">Buton</label>
                        </div>
                      </div>
                        <div class="col-md-12">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control"  name="link" placeholder="Link">
                            @error('link')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="link">Link</label>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-md-flex align-items-center">
                            <div class="mb-4">
                    <label for="image" class="form-label">Resim</label>
                    <div class="input-group">
                      <input type="file" class="form-control" id="exampleInputname" name="image">
                    </div>
                  </div>
                          <div class="ms-auto mt-3 mt-md-0">
                            <button type="submit" class="btn btn-primary hstack gap-6">
                              Oluştur
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- end Basic Form -->
            </div>

        </div>
        <!----Footer--->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
      </div>
@endsection
