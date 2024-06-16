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
                            <form method="post" action="{{ route('products.storeImage',['product'=>$product]) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">

                                    <div class="col-6">
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
