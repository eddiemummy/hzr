@extends('dashboard.dash')
@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase"> Ürünler</h5>

            </div>
          </div>
            <a href="{{ route('products.create') }}" type="submit" class="btn btn-warning me-6">
                        Yeni Ürün Oluştur
            </a>
          <div class="datatables">
            <!-- start File export -->
            <div class="card">
              <div class="card-body">


                <div class="table-responsive">
                  <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Kategori</th>
                        <th>İsim</th>
                        <th>Eski Fiyat</th>
                        <th>Yeni Fiyat</th>
                        <th>Resim</th>
                        <th>Eylem</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      @foreach($products as $product)
                      <tr>
                        <td>{{ Str::words($product->category->name,4,'..') }}</td>
                        <td>{{ Str::words($product->name,4,'..') }}</td>
                        <td>{{ $product->old_price }}</td>
                          <td>{{ $product->new_price }}</td>
                        <td><img src="{{ asset('storage/'.$product->default_image) }}" width="200"/></td>
                          <td>
                              <div class="flex-lg-row">
                                  <a href="{{ route('products.edit',['product'=>$product]) }}" class="btn btn-success">
                              Düzenle
                            </a>
                                  <a href="{{ route('products.display',['product'=>$product]) }}" class="btn btn-info">Göster</a>
                              <a href="{{ route('products.delete',['product'=>$product]) }}" class="btn btn-primary" onclick="return confirm('Silmek istediğinizden emin misiniz?');">
                                  Sil
                                  </a>

                              </div>

                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    {{ $products->links() }}
                </div>
              </div>
            </div>
@endsection
