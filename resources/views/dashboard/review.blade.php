@extends('dashboard.dash')
@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase">Kullanıcı Yorumları</h5>

            </div>
          </div>

          <div class="datatables">
            <!-- start File export -->
            <div class="card">
              <div class="card-body">


                <div class="table-responsive">
                  <table id="file_export" class="table w-100 table-striped table-bordered display text-nowrap">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Ürün</th>
                        <th>Kullanıcı</th>
                        <th>Yorum</th>
                        <th>Email</th>
                        <th>Eylem</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      @foreach($reviews as $rev)
                      <tr>
                        <td>{{ $rev->product->name }}</td>
                        <td>{{ $rev->name }}</td>
                        <td>{{ Str::words($rev->review,8,'..')}}</td>
                        <td>{{ $rev->email }}</td>
                          <td>
                              <div class="flex-lg-row">
                                     <a href="#" class="btn btn-primary" onclick="return confirm('Silmek istediğinizden emin misiniz?');">
                                      <iconify-icon icon="solar:trash-bin-minimalistic-line-duotone" class="fs-7"></iconify-icon>

                                  </a>
                               </div>

                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    {{ $reviews->links() }}
                </div>
              </div>
            </div>
@endsection
