@extends('dashboard.dash')

@section('main')

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="shadow-none position-relative overflow-hidden mb-4">
                <div class="d-sm-flex d-block justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold text-uppercase"> Site Ayarları</h5>
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
                            <form method="post" action="{{ route('dashboard.updateSystem') }}">
                                @csrf
                                @method("put")
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="title" placeholder="Başlık"
                                                   value="{{ $setting->title ?? null }}"/>
                                            @error('title')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="title">Başlık</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="description" placeholder="Açıklama"
                                                   value="{{ $setting->description ?? null }}"/>
                                            @error('description')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="description">Açıklama</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="keywords" placeholder="Anahtar Kelimeler"
                                                   value="{{ $setting->keywords ?? null }}"/>
                                            @error('keywords')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="keywords">Anahtar Kelimeler</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="facebook" placeholder="Facebook"
                                                   value="{{ $setting->facebook ?? null }}"/>
                                            @error('facebook')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="facebook">Facebook</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="instagram" placeholder="Instagram"
                                                   value="{{ $setting->instagram ?? null }}"/>
                                            @error('instagram')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="instagram">Instagram</label>
                                        </div>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="twitter" placeholder="Twitter"
                                                   value="{{ $setting->twitter ?? null }}"/>
                                            @error('twitter')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="twitter">Twitter</label>
                                        </div>
                                        </div>

                                    <div class="col-md-12">
                                         <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="youtube" placeholder="Youtube"
                                                   value="{{ $setting->youtube ?? null }}"/>
                                            @error('youtube')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="youtube">Youtube</label>
                                        </div>
                                        </div>

                                    </div>

                                    <div class="ms-auto mt-3 mt-md-0">
                                                <button type="submit" class="btn btn-success hstack gap-6">
                                                    <iconify-icon icon="tabler:edit" class="fs-7"></iconify-icon>
                                                </button>
                                            </div>

                            </form>
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
