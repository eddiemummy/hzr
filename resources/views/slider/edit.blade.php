@extends('dashboard.dash')

@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase"> SLİDER DÜZENLE</h5>
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
                  <form method="post" action="{{ route('sliders.update',['slider'=>$slider]) }}" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control" name="title" value="{{ $slider->title }}">
                            @error('title')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="title">Başlık</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name ="body">{!! $slider->body !!}</textarea>
                            @error('body')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="body">İçerik</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control"  name="highlight" value="{{ $slider->highlight }}">
                            @error('highlight')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="highlight">Vurgu</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control"  name="button" value="{{ $slider->button }}">
                            @error('button')
                            <p style="color:red; font-size: small">{{ $message }}</p>
                            @enderror
                          <label for="button">Buton</label>
                        </div>
                      </div>
                        <div class="col-md-6">
                        <div class="form-floating mb-3">
                          <input type="text" class="form-control"  name="link" value="{{ $slider->link }}">
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
                        <img src="{{ asset('storage/'.$slider->image) }}" width="200">
                      <input type="file" class="form-control" id="exampleInputname" name="image">
                    </div>
                  </div>
                          <div class="ms-auto mt-3 mt-md-0">
                            <button type="submit" class="btn btn-primary hstack gap-6">
                              Güncelle
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
            <div class="col-12">

          </div>
        </div>
        <!----Footer--->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
      </div>
@endsection
