@extends('dashboard.dash')
@section('main')
    <div class="body-wrapper">
        <div class="container-fluid">
          <div class="shadow-none position-relative overflow-hidden mb-4">
            <div class="d-sm-flex d-block justify-content-between align-items-center">
              <h5 class="mb-0 fw-semibold text-uppercase"> Renkler</h5>

            </div>
          </div>
            <a href="{{ route('colors.create') }}" type="submit" class="btn btn-warning me-6">
                        Yeni Renk Oluştur
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
                        <th>Renk</th>
                       <th>Eylem</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      @foreach($colors as $color)
                      <tr>
                        <td>{{ $color->name }}</td>
                        <td>
                            <div style="width: 20px; height: 20px; background-color: {{ $color->hex }}">

                            </div>
                        </td>
                         <td>
                              <div class="flex-lg-row">
                                  <a href="{{ route('colors.edit',['color'=>$color]) }}" class="btn btn-success">
                                      <iconify-icon icon="tabler:edit" class="fs-7"></iconify-icon>

                            </a>
                                  <a href="{{ route('colors.delete',['color'=>$color]) }}" class="btn btn-primary" onclick="return confirm('Silmek istediğinizden emin misiniz?');">
                                      <iconify-icon icon="solar:trash-bin-minimalistic-line-duotone" class="fs-7"></iconify-icon>
                                  </a>
                              </div>

                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                    {{ $colors->links() }}
                </div>
              </div>
            </div>
@endsection
