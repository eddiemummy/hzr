@extends('dashboard.dash')
@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
                <h4 class="mb-0 mb-4 fw-bold text-uppercase">ANA GÖRSEL</h4>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="card overflow-hidden">
                        <div class="el-card-item pb-3">
                            <div class="
                      el-card-avatar
                      mb-3
                      el-overlay-1
                      w-100
                      overflow-hidden
                      position-relative
                      text-center
                    ">
                                <img src="{{ asset('storage/'.$product->default_image) }}"
                                     class="d-block position-relative w-100" alt="user">
                            </div>
                            <div class="el-card-content text-center">
                                <h4 class="mb-0 mb-2 card-title">{{ $product->name }}</h4>

                                <div class="flex-lg-row">
                                    <a href="{{ route('products.change',['product'=>$product]) }}" class="btn btn-success">
                                       <iconify-icon icon="tabler:edit" class="fs-7"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-sm-flex d-block justify-content-between align-items-center">
                <h4 class="mb-0 mt-4 mb-4 fw-bold text-uppercase">DİĞER GÖRSELLER</h4>
                </div>
            <div class="mt-2 mb-4">
                <a href="{{ route('products.addImage',["product"=>$product]) }}" class="btn btn-warning">Ekle</a>
                </div>
            <div class="row">
                @foreach($productImages as $pimage)
                    <div class="col-md-3">
                        <div class="card overflow-hidden">
                            <div class="el-card-item pb-3">
                                <div class="
                      el-card-avatar
                      mb-3
                      el-overlay-1
                      w-100
                      overflow-hidden
                      position-relative
                      text-center
                    ">
                                    <img src="{{ asset('storage/'.$pimage->image) }}"
                                         class="d-block position-relative w-100" style="height:200px" alt="user">

                                </div>
                                <div class="el-card-content text-center">

                                    <div class="flex-lg-row">

                                        <a href="{{ route('products.delPic',['id'=>$pimage->id]) }}"
                                           class="btn btn-primary"
                                           onclick="return confirm('Silmek istediğinizden emin misiniz?');">
                                            <iconify-icon icon="solar:trash-bin-minimalistic-line-duotone" class="fs-7"></iconify-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
