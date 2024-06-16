@extends('dashboard.dash')
@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase"> Kategoriler</h5>

            </div>
          </div>
            <a href="{{ route('categories.create') }}" type="submit" class="btn btn-warning me-6">
                        Yeni Kategori Oluştur
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
                        <th>İsim</th>
                        <th>Ürün Sayısı</th>
                        <th>Eylem</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      @foreach($categories as $category)
                      <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->count }}</td>
                          <td>
                              <div class="flex-lg-row">
                                  <a href="{{ route('categories.edit',['category'=>$category]) }}" class="btn btn-success">
                              Düzenle
                            </a>
                                  <a href="{{ route('categories.delete',['category'=>$category]) }}" class="btn btn-primary" onclick="return confirm('Silmek istediğinizden emin misiniz?');">Sil</a>
                               </div>

                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    {{ $categories->links() }}
                </div>
              </div>
            </div>
@endsection
