@extends('dashboard.dash')

@section('main')

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="shadow-none position-relative overflow-hidden mb-4">
                <div class="d-sm-flex d-block justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold text-uppercase"> ÜRÜN OLUŞTUR</h5>
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
                            <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_id">Kategori</label>
                                            <select id="category_id" name="category_id" class="form-control">
                                                @foreach($categories as $category)
                                                    <option
                                                        value="{!! $category->id !!}">{!! $category->name !!}</option>
                                                @endforeach
                                            </select>

                                            @error('category_id')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="name" placeholder="İsim  value="{{ old('name') }}""
                                                   value="{{ old('name') }}"/>
                                            @error('name')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="body">İsim</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">

                                            <input type="number" name="old_price" class="form-control" placeholder="Eski Fiyat" value="{{ old('old_price') }}">
                                            @error('old_price')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="old_price">Eski Fiyat</labeL>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">

                                            <input type="number" name="new_price" class="form-control" placeholder="Yeni Fiyat"  value="{{ old('new_price') }}">
                                            @error('new_price')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="new_price">Yeni Fiyat</labeL>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_id">Renkler</label>

                                            @foreach($colors as $color)
                                                <input type="checkbox" name=colors[]" value="{!! $color->hex !!}"/> {!! $color->name !!}
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea id="editor" name="description"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_id">Nerelerde Gözüksün?</label>
                                            <input type="checkbox" name=segment[]" value="highlight"/> Öne Çıkanlar
                                            <input type="checkbox" name=segment[]" value="best_seller"/> En Çok Satanlar
                                            <input type="checkbox" name=segment[]" value="discount"/> İndirimli
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-md-flex align-items-center">
                                            <div class="mb-4">
                                                <label for="image" class="form-label">Ana Görsel</label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="exampleInputname"
                                                           name="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="d-md-flex align-items-center">
                                            <div class="mb-4">
                                                <label for="image" class="form-label">Diğer Görseller</label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="exampleInputname"
                                                           name="other[]" multiple>
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
