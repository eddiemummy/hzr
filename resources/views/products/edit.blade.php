@extends('dashboard.dash')

@section('main')

    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="shadow-none position-relative overflow-hidden mb-4">
                <div class="d-sm-flex d-block justify-content-between align-items-center">
                    <h5 class="mb-0 fw-semibold text-uppercase"> ÜRÜN DÜZENLE</h5>
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
                            <form method="post" action="{{ route('products.update',['product'=>$product]) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
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
                                            <input type="text" class="form-control" name="name" placeholder="İsim"
                                                   value="{{ $product->name }}"/>
                                            @error('name')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="name">İsim</label>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">

                                            <input type="number" name="old_price" class="form-control" placeholder="Eski Fiyat" value="{{ $product->old_price }}">
                                            @error('old_price')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="old_price">Eski Fiyat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">

                                            <input type="number" name="new_price" class="form-control" placeholder="Yeni Fiyat" value="{{ $product->new_price }}">
                                            @error('new_price')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                            <label for="new_price">Yeni Fiyat</label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="category_id">Renkler</label>
                                            @php $colorList = explode(",", $product->colors); @endphp
                                            @foreach($colors as $color)
                                                <input type="checkbox" name=colors[]" @if(in_array($color->hex, $colorList)) checked @endif value="{!! $color->hex !!}"/> {!! $color->name !!}
                                            @endforeach

                                            @error('name')
                                            <p style="color:red; font-size: small">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-floating mb-3">
                                            <textarea id="editor" name="description">{!! $product->description !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="ms-auto mt-3 mt-md-0">
                                                <button type="submit" class="btn btn-success hstack gap-6">
                                                    <iconify-icon icon="tabler:edit" class="fs-7"></iconify-icon>
                                                </button>
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
