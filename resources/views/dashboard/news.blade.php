@extends('dashboard.dash')
@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase">ABONE BİLGİSİ</h5>

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
                        <th>Email</th>
                        <th>Abone Olma Tarihi</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      @foreach($news as $new)
                      <tr>
                        <td>{{ $new->email }}</td>
                        <td>{{ $new->created_at }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    {{ $news->links() }}
                </div>
              </div>
            </div>
@endsection
