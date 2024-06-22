@extends('dashboard.dash')
@section('main')
    <div class="body-wrapper">
    <div class="container-fluid">
      <!-- -------------------------------------------------------------- -->
      <!-- Breadcrumb -->
      <!-- -------------------------------------------------------------- -->
      <div class="shadow-none position-relative overflow-hidden mb-4">

      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- Breadcrumb End -->
      <!-- -------------------------------------------------------------- -->

      <div class="row">




        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body">
              <h4 class="card-title">Segment Sayıları</h4>
              <div class="mt-3">
                <div id="sales"></div>
              </div>
            </div>
            <div class="d-flex align-items-center card-body">
              <div>
                <h3>Toplam Satışlar</h3>
                <h5 class="text-muted fw-normal">Aylık 160 satış</h5>
              </div>
              <div class="ms-auto">
                <button class="btn round-50 btn-secondary text-white btn-lg icon-center">
                  <iconify-icon icon="solar:cart-check-outline" class="iconify-md icon-center"></iconify-icon>
                </button>
              </div>
            </div>
          </div>
        </div>

          <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body">
              <h4 class="card-title">Kategori Sayıları</h4>
              <div class="mt-3">
                <div id="sales"></div>
              </div>
            </div>
            <div class="d-flex align-items-center card-body">
              <div>
                <h3>Toplam Satışlar</h3>
                <h5 class="text-muted fw-normal">Aylık 160 satış</h5>
              </div>
              <div class="ms-auto">
                <button class="btn round-50 btn-secondary text-white btn-lg icon-center">
                  <iconify-icon icon="solar:cart-check-outline" class="iconify-md icon-center"></iconify-icon>
                </button>
              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-6">
          <div class="card">
            <h4 class="card-title px-9 py-4 mb-0">Son Yorumlar</h4>
            <div class="card-body">

              <!-- ============================================================== -->
              <!-- Comment widgets -->
              <!-- ============================================================== -->
              <div class="comment-widgets position-relative mb-2 h-475" data-simplebar="">
                <!-- Comment Row -->
                <div class="d-flex gap-9 comment-row mb-5">
                  <span class="flex-shrink-0">
                    <img src="../assets/images/profile/user-3.jpg" alt="user" width="56" height="56" class="rounded round-50">
                  </span>
                  <div class="comment-text">
                    <div class="hstack justify-content-between gap-6 mb-1">
                      <div class="hstack gap-6">
                        <h5 class="mb-0">James Anderson</h5>
                        <p class="mb-0 fs-3">5 minutes ago</p>
                      </div>
                      <span class="badge bg-success-subtle text-success rounded fw-semibold p-2">Approved</span>
                    </div>
                    <p class="comment-details mb-6 fs-3 text-muted truncate-2 truncate-2">
                      Lorem Ipsum is simply dummy text of the printing and type setting
                      industry.
                      Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing
                      and type setting industry.
                    </p>
                    <ul class="list-unstyled mb-0 hstack gap-3 lh-1">
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-edit"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-square-check"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex gap-9 comment-row mb-5">
                  <span class="flex-shrink-0">
                    <img src="../assets/images/profile/user-6.jpg" alt="user" width="56" height="56" class="rounded round-50">
                  </span>
                  <div class="comment-text">
                    <div class="hstack justify-content-between gap-6 mb-1">
                      <div class="hstack gap-6">
                        <h5 class="mb-0">Johnathan Doeting</h5>
                        <p class="mb-0 fs-3">5 minutes ago</p>
                      </div>
                      <span class="badge bg-danger-subtle text-danger rounded fw-semibold p-2">Rejected</span>
                    </div>
                    <p class="comment-details mb-6 fs-3 text-muted truncate-2">
                      Lorem Ipsum is simply dummy text of the printing and type setting
                      industry.
                      Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing
                      and type setting industry.
                    </p>
                    <ul class="list-unstyled mb-0 hstack gap-3 lh-1">
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-edit"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-square-check"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex gap-9 comment-row mb-5">
                  <span class="flex-shrink-0">
                    <img src="../assets/images/profile/user-7.jpg" alt="user" width="56" height="56" class="rounded round-50">
                  </span>
                  <div class="comment-text">
                    <div class="hstack justify-content-between gap-6 mb-1">
                      <div class="hstack gap-6">
                        <h5 class="mb-0">James Anderson</h5>
                        <p class="mb-0 fs-3">5 minutes ago</p>
                      </div>
                      <span class="badge bg-info-subtle text-info rounded fw-semibold p-2">Pending</span>
                    </div>
                    <p class="comment-details mb-6 fs-3 text-muted truncate-2">
                      Lorem Ipsum is simply dummy text of the printing and type setting
                      industry.
                      Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing
                      and type setting industry.
                    </p>
                    <ul class="list-unstyled mb-0 hstack gap-3 lh-1">
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-edit"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-square-check"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Comment Row -->
                <div class="d-flex gap-9 comment-row mb-5">
                  <span class="flex-shrink-0">
                    <img src="../assets/images/profile/user-5.jpg" alt="user" width="56" height="56" class="rounded round-50">
                  </span>
                  <div class="comment-text">
                    <div class="hstack justify-content-between gap-6 mb-1">
                      <div class="hstack gap-6">
                        <h5 class="mb-0">James Anderson</h5>
                        <p class="mb-0 fs-3">5 minutes ago</p>
                      </div>
                      <span class="badge bg-success-subtle text-success rounded fw-semibold p-2">Approved</span>
                    </div>
                    <p class="comment-details mb-6 fs-3 text-muted truncate-2">
                      Lorem Ipsum is simply dummy text of the printing and type setting
                      industry.
                      Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing
                      and type setting industry.
                    </p>
                    <ul class="list-unstyled mb-0 hstack gap-3 lh-1">
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-edit"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-square-check"></i>
                        </a>
                      </li>
                      <li>
                        <a class="fs-6 text-muted" href="javascript:void(0)">
                          <i class="ti ti-heart"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="d-flex align-items-center px-9 py-4">
              <h4 class="card-title mb-0">En Çok Tıklananlar</h4>
              <div class="ms-auto">
                <select class="form-select border-0 bg-inverse">
                  <option>March</option>
                  <option>April</option>
                  <option>May</option>
                  <option>June</option>
                  <option>July</option>
                </select>
              </div>
            </div>
            <div class="px-9 py-4 bg-inverse">
              <div class="d-flex align-items-center ">
                <div>
                  <h2 class="fw-medium">March 2021</h2>
                  <p class="mb-0 fs-4 text-muted">Sales Report</p>
                </div>
                <div class="ms-auto">
                  <h3 class="text-secondary mb-0 fw-medium">$3,690
                </h3></div>
              </div>
            </div>
            <div class="p-3">
              <div class="table-responsive" data-simplebar="">
                <table class="table mb-0 text-nowrap no-wrap recent-table table-hover">
                  <thead>
                    <tr class="fs-4 fw-semibold">
                      <th class="border-0">#</th>
                      <th class="border-0">Name</th>
                      <th class="border-0">Status</th>
                      <th class="border-0">Date</th>
                      <th class="border-0 text-end">Price</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td class="txt-oflo">Elite admin</td>
                      <td>
                        <span class="
                                        badge p-2
                                        rounded
                                        text-capitalize text-secondary
                                        fw-semibold
                                        bg-secondary-subtle
                                        rounded
                                      ">sale</span>
                      </td>
                      <td class="txt-oflo">April 18, 2021</td>
                      <td class="text-end">
                        <span class="text-secondary fw-medium ">$24</span>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td class="txt-oflo">Real Homes WP Theme</td>
                      <td>
                        <span class="
                                        badge p-2
                                        rounded
                                        text-capitalize text-info
                                        fw-semibold
                                        bg-info-subtle
                                        rounded
                                      ">extended</span>
                      </td>
                      <td class="txt-oflo">April 19, 2021</td>
                      <td class="text-end">
                        <span class="text-secondary fw-medium">$1250</span>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td class="txt-oflo">Ample Admin</td>
                      <td>
                        <span class="
                                        badge p-2
                                        rounded
                                        text-capitalize text-success
                                        fw-semibold
                                        bg-success-subtle
                                        rounded
                                      ">sale</span>
                      </td>
                      <td class="txt-oflo">April 19, 2021</td>
                      <td class="text-end">
                        <span class="text-success fw-medium">$1250</span>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td class="txt-oflo">Medical Pro WP Theme</td>
                      <td>
                        <span class="
                                        badge p-2
                                        rounded
                                        text-capitalize text-danger
                                        fw-semibold
                                        bg-danger-subtle
                                        rounded
                                      ">tax</span>
                      </td>
                      <td class="txt-oflo">April 20, 2021</td>
                      <td class="text-end">
                        <span class="text-danger fw-medium">-$24</span>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td class="txt-oflo">Hosting press html</td>
                      <td>
                        <span class="
                                        badge p-2
                                        rounded
                                        text-capitalize text-warning
                                        fw-semibold
                                        bg-warning-subtle
                                        rounded
                                      ">member</span>
                      </td>
                      <td class="txt-oflo">April 21, 2021</td>
                      <td class="text-end">
                        <span class="text-success fw-medium">$24</span>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>



      </div>
@endsection


