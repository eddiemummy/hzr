@extends('dashboard.dash')

@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase"> KATEGORİ OLUŞTUR</h5>
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
                  <form method="post" action="{{ route('categories.store') }}">
                      @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="name" placeholder="Kategori" value="{{ old('name') }}">
                            @error('name')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="title">Başlık</label>
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
