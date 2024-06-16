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
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <h2 class="fw-semibold">354.50 &#8378;</h2>
                  <h5 class="text-muted fw-normal mb-0">Toplam Gelir</h5>
                </div>
                <div class="col-5">
                  <div class="" id="total-income"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                  <h2 class="fw-semibold">3456</h2>
                  <h5 class="text-muted fw-normal mb-0">Yıllık Satışlar</h5>
                </div>
                <div class="col-5">
                  <div id="yearly-sales"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <h2 class="fw-semibold">356</h2>
                  <h5 class="text-muted fw-normal mb-0">Aylık Satışlar</h5>
                </div>
                <div class="col-6">
                  <div id="monthly-sales"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="card w-100 overflow-hidden">
            <div class="p-3">
              <div class="d-flex align-items-center">
                <h4 class="card-title mb-0">Masraflar</h4>
                <ul class="d-flex align-items-center gap-3 mb-0 ms-auto">
                  <li class="d-flex align-items-center gap-1 item text-secondary">
                    <iconify-icon icon="ri:circle-fill" class="fs-3"></iconify-icon> Xtreme
                  </li>
                  <li class="d-flex align-items-center gap-1 item text-primary">
                    <iconify-icon icon="ri:circle-fill" class="fs-3"></iconify-icon> ample
                  </li>
                </ul>
              </div>
              <div id="Expense" class="mx-n6"></div>
            </div>
            <div class="row border-top">
              <div class="col-md-6 border-end border-bottom">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:clapperboard-play-outline" class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">$250</h3>
                    <h4 class="text-muted fw-normal mb-0">Entertainment</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6 border-end border-bottom">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:home-line-duotone" class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">$60.50</h3>
                    <h4 class="text-muted fw-normal mb-0">House Rent
                    </h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6 border-end ">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:plain-linear" class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">$28</h3>
                    <h4 class="text-muted fw-normal mb-0">Travel</h4>
                  </div>
                </div>
              </div>
              <div class="col-md-6 border-end ">
                <div class="d-flex align-items-center px-4 py-3 gap-3">
                  <iconify-icon icon="solar:bag-2-linear" class="iconify-lg icon-center text-secondary"></iconify-icon>
                  <div>
                    <h3 class="fw-normal mb-1">$70</h3>
                    <h4 class="text-muted fw-normal mb-0">Shopping</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="card w-100">
            <div class="card-body">
              <h4 class="card-title">Satışlar</h4>
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
        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row">
                <div class="">
                  <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded" width="100">
                </div>
                <div class="ps-3">
                  <h3>Daniel Kristeen</h3>
                  <h6 class="text-muted">UI/UX Designer</h6>
                  <button class="btn btn-secondary">
                    Follow
                  </button>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col text-center border-end">
                  <h2 class="fw-light">14</h2>
                  <h6 class="text-muted mb-0">Photos</h6>
                </div>
                <div class="col text-center border-end">
                  <h2 class="fw-light">54</h2>
                  <h6 class="text-muted mb-0">Videos</h6>
                </div>
                <div class="col text-center">
                  <h2 class="fw-light">145</h2>
                  <h6 class="text-muted mb-0">Tasks</h6>
                </div>
              </div>
            </div>

            <div class="card-body border-top">
              <div class="row text-center">
                <div class="col-12 mb-3">
                  <h4 class="my-2">Followers</h4>
                </div>
                <div class="col-3">
                  <span class="round" data-bs-toggle="tooltip" title="Varun">
                    <img class="rounded round-50" src="../assets/images/profile/user-6.jpg" alt="user" width="45">
                  </span>
                </div>
                <div class="col-3">
                  <span class="round" data-bs-toggle="tooltip" title="Alia">
                    <img class="rounded round-50" src="../assets/images/profile/user-3.jpg" alt="user" width="45">
                  </span>
                </div>
                <div class="col-3">
                  <span class="round" data-bs-toggle="tooltip" title="Akshay">
                    <img class="rounded round-50" src="../assets/images/profile/user-5.jpg" alt="user" width="45">
                  </span>
                </div>
                <div class="col-3">
                  <div class="d-flex
                                        justify-content-center">
                    <span class="
                                      round
                                      d-flex align-items-center
                                      justify-content-center
                                      text-center text-white
                                      bg-secondary
                                      fs-5 fw-semibold
                                      rounded round-50
                                    " data-bs-toggle="tooltip" title="More">5+</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body border-top">

              <ul class="
                                  list-icons
                                  d-flex
                                  flex-item
                                  text-center
                                  mb-0
                                  list-style-none
                                ">
                <li class="col">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Website"><iconify-icon icon="ph:globe-simple-bold" class="ps-2 fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="col">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="twitter"><iconify-icon icon="ph:twitter-logo-bold" class="ps-2 fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="col">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Facebook"><iconify-icon icon="ph:facebook-logo-bold" class="ps-2 fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="col">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Youtube"><iconify-icon icon="ph:youtube-logo-bold" class="ps-2 fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="col">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Linkd-in"><iconify-icon icon="ph:linkedin-logo-bold" class="ps-2 fs-6 text-muted"></iconify-icon></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card  overflow-hidden w-100">
            <div class="row no-gutters">
              <div class="col-md-4 position-relative">
                <div class="card-body">
                  <span class="display-6">
                    <span class="fw-normal">23</span>
                  </span>
                  <h4 class="pb-2 mb-0 text-muted fw-normal">Thursday</h4>
                  <span class="weight-border"></span>
                  <h5 class="pt-3">March 2021</h5>
                  <div class="bottom-text">
                    <a href="javascript:void(0)" class="text-secondary text-capitalize fw-semibold">3
                      Tasks</a>
                    <h5 class="mb-0 mt-2">Prepare Project</h5>
                  </div>
                </div>
              </div>
              <div class="col-md-8">
                <div class="bg-purple text-white">
                  <div class="table-responsive p-3">
                    <table class="calendar-schedule-table">
                      <tbody>
                        <tr>
                          <td colspan="5">
                            <h3 class="month-option text-white">March</h3>
                          </td>
                          <td></td>
                          <td>
                            <a href="javascript:void(0)" class="text-white"><iconify-icon icon="tabler:plus" class="iconify-lg"></iconify-icon></a>
                          </td>
                        </tr>
                        <tr class="text-capitalize">
                          <td class="opacity-50">Sun</td>
                          <td class="opacity-50">Mon</td>
                          <td class="opacity-50">Tue</td>
                          <td class="opacity-50">Wed</td>
                          <td class="opacity-50">Thu</td>
                          <td class="opacity-50">Fri</td>
                          <td class="opacity-50">Sat</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>8</td>
                          <td>9</td>
                          <td>10</td>
                          <td>11</td>
                          <td>12</td>
                          <td>13</td>
                        </tr>
                        <tr>
                          <td>14</td>
                          <td>15</td>
                          <td>16</td>
                          <td>17</td>
                          <td>18</td>
                          <td>19</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>21</td>
                          <td>22</td>
                          <td class="cal-active">23</td>
                          <td>24</td>
                          <td>25</td>
                          <td>26</td>
                          <td>27</td>
                        </tr>
                        <tr>
                          <td>28</td>
                          <td>29</td>
                          <td>30</td>
                          <td>31</td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td colspan="7"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card w-100">
            <div class="card-body">
              <h4 class="card-title">Weekly Usage</h4>
              <div class="">
                <div id="weekly-usage"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card w-100">
            <div class="card-body">
              <h4 class="card-title">Monthly Usage</h4>
              <div>
                <div id="monthly-usage"></div>
              </div>
            </div>
            <div class="d-flex align-items-center border-top p-3 mt-5">
              <div>
                <span class="mb-0 display-7">26.30</span>
                <h5 class="mb-0 fw-normal text-muted">AMps Used</h5>
              </div>
              <div class="ms-auto">
                <button class="btn btn-secondary round-50 btn-rounded text-white p-0">
                  <iconify-icon icon="solar:spedometer-middle-outline" class="fs-7 icon-center"></iconify-icon>
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
              <h4 class="card-title mb-0">Son Satışlar</h4>
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
        <div class="col-lg-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-row gap-3">
                <div class="">
                  <img src="../assets/images/profile/user-5.jpg" alt="user" class="rounded" width="100">
                </div>
                <div class="">
                  <h3 class="fw-semibold mb-1">Daniel Kristeen</h3>
                  <h6 class="text-muted fw-normal mb-2">UI/UX Designer</h6>
                  <button class="btn btn-secondary">
                    Follow
                  </button>
                </div>
              </div>
              <div class="row mt-4 pt-4">
                <div class="col text-center border-end">
                  <h3 class="fw-semibold">14</h3>
                  <h6 class="text-muted">Photos</h6>
                </div>
                <div class="col text-center border-end">
                  <h3 class="fw-semibold">54</h3>
                  <h6 class="text-muted">Videos</h6>
                </div>
                <div class="col text-center">
                  <h3 class="fw-semibold">145</h3>
                  <h6 class="text-muted">Tasks</h6>
                </div>
              </div>
            </div>
            <div class="card-body border-top">
              <p class="text-center text-muted scrollable mt-3">
                Lorem ipsum dolor sit ametetur adipisicing elit, sed do
                eiusmod tempor incididunt adipisicing elit, sed do eiusmod
                tempor incididunLorem ipsum dolor sit ametetur
              </p>
              <ul class="
                  list-icons
                  d-flex
                  flex-item
                  text-center
                  list-style-none
                  justify-content-center
                  gap-4
                  mb-0
                ">
                <li class="my-1">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Website"><iconify-icon icon="ph:globe-simple-bold" class=" fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="my-1">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="twitter"><iconify-icon icon="ph:twitter-logo-bold" class=" fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="my-1">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Facebook"><iconify-icon icon="ph:facebook-logo-bold" class=" fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="my-1">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Youtube"><iconify-icon icon="ph:youtube-logo-bold" class=" fs-6 text-muted"></iconify-icon></a>
                </li>
                <li class="my-1">
                  <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="top" title="social" data-original-title="Linkd-in"><iconify-icon icon="ph:linkedin-logo-bold" class=" fs-6 text-muted"></iconify-icon></a>
                </li>
              </ul>
            </div>
            <div class="card-body border-top">
              <div class="row text-center pt-2">
                <div class="col-12 pb-4">
                  <h4>Followers</h4>
                </div>
                <div class="d-flex justify-content-center gap-3 pb-2">
                  <div class="">
                    <span class="round" data-bs-toggle="tooltip" title="Varun">
                      <img class="rounded round-50" src="../assets/images/profile/user-6.jpg" alt="user">
                    </span>
                  </div>
                  <div class="">
                    <span class="round" data-bs-toggle="tooltip" title="Alia">
                      <img class="rounded round-50" src="../assets/images/profile/user-2.jpg" alt="user">
                    </span>
                  </div>
                  <div class="">
                    <span class="round" data-bs-toggle="tooltip" title="Akshay">
                      <img class="rounded round-50" src="../assets/images/profile/user-3.jpg" alt="user">
                    </span>
                  </div>
                  <div class="">
                    <span class="round" data-bs-toggle="tooltip" title="Roy">
                      <img class="rounded round-50" src="../assets/images/profile/user-5.jpg" alt="user">
                    </span>
                  </div>
                  <div class="">
                    <span class="
                      round
                      d-flex align-items-center
                      justify-content-center
                      text-center text-secondary
                      bg-secondary-subtle
                      fs-6
                      fw-semibold
                      rounded round-50
                    " data-bs-toggle="tooltip" title="More">5+</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card overflow-hidden">
            <div class="card-body bg-purple text-white mailbox-widget">
              <div class="d-flex align-items-center gap-2 pb-4 mb-2">
                <h4 class="card-title mb-0 text-white">Destek Talepleri</h4>
                <div class="bg-secondary py-1 px-2 rounded">Okunmamış 3 talep</div>
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <ul class="nav nav-tabs custom-tab border-bottom-0 gap-3" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="inbox-tab" data-bs-toggle="tab" aria-controls="inbox" href="#inbox" role="tab" aria-selected="true">
                      <span class="d-block d-md-none"><iconify-icon icon="solar:letter-linear" class="iconify-md icon-center"></iconify-icon></span>
                      <span class="d-none d-md-block text-capitalize fw-semibold">
                        Gelenler</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="sent-tab" data-bs-toggle="tab" aria-controls="sent" href="#sent" role="tab" aria-selected="false">
                      <span class="d-block d-md-none"><iconify-icon icon="solar:plain-2-linear" class="iconify-md icon-center"></iconify-icon></span>
                      <span class="d-none d-md-block text-capitalize fw-semibold">Çözülenler</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="spam-tab" data-bs-toggle="tab" aria-controls="spam" href="#spam" role="tab" aria-selected="false">
                      <span class="d-block d-md-none"><iconify-icon icon="solar:user-block-linear" class="iconify-md icon-center"></iconify-icon></span>
                      <span class="d-none d-md-block text-capitalize fw-semibold">Bekleyenler</span>
                    </a>
                  </li>
                </ul>
              </div>


            </div>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                <div>
                  <!-- Mail list-->
                  <div class="table-responsive mt-3">
                    <table class="
                        table
                        email-table
                        no-wrap
                        table-hover
                        v-middle
                        mb-0
                        fs-3
                      ">
                      <tbody>
                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-8.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Roy
                                Anderson</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                  badge
                                  rounded
                                  bg-primary-subtle
                                  text-primary
                                  p-2
                                  me-2
                                  fw-semibold
                                ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 12</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-bold" class="fs-6 text-warning icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-3.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Genelia
                                Roshan</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                  badge
                                  rounded
                                  bg-info-subtle
                                  text-info
                                  p-2
                                  me-2
                                  fw-semibold
                                ">Business</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 13</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-bold" class="fs-6 text-warning icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-4.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Hanna Gover</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-warning-subtle
                                    text-warning
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Freind</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-5.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Jack Corner</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-success-subtle
                                    text-success
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-6.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Harry
                                Callum</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-primary-subtle
                                    text-primary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 18</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-7.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Charlie
                                Kyle</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-secondary-subtle
                                    text-secondary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">important</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 20</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                <div>
                  <div class="table-responsive mt-3">
                    <table class="
                        table
                        email-table
                        no-wrap
                        table-hover
                        v-middle
                        mb-0
                        fs-3
                      ">
                      <tbody>
                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-bold" class="fs-6 text-warning icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-4.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Hanna Gover</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-warning-subtle
                                    text-warning
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Freind</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-5.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Jack Corner</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-success-subtle
                                    text-success
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-6.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Harry
                                Callum</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-primary-subtle
                                    text-primary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 18</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-7.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Charlie
                                Kyle</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-secondary-subtle
                                    text-secondary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">important</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 20</td>
                        </tr>
                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-8.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Roy
                                Anderson</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                  badge
                                  rounded
                                  bg-primary-subtle
                                  text-primary
                                  p-2
                                  me-2
                                  fw-semibold
                                ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 12</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-bold" class="fs-6 text-warning icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-3.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Genelia
                                Roshan</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                  badge
                                  rounded
                                  bg-info-subtle
                                  text-info
                                  p-2
                                  me-2
                                  fw-semibold
                                ">Business</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 13</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                <div>
                  <div class="table-responsive mt-3">
                    <table class="
                        table
                        email-table
                        no-wrap
                        table-hover
                        v-middle
                        mb-0
                        fs-3
                      ">
                      <tbody>
                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-bold" class="fs-6 text-warning icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-4.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Hanna Gover</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-warning-subtle
                                    text-warning
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Freind</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-5.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Jack Corner</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-success-subtle
                                    text-success
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-6.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Harry
                                Callum</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-primary-subtle
                                    text-primary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 18</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-7.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Charlie
                                Kyle</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-secondary-subtle
                                    text-secondary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">important</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 20</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                <div>
                  <div class="table-responsive mt-3">
                    <table class="
                        table
                        email-table
                        no-wrap
                        table-hover
                        v-middle
                        mb-0
                        fs-3
                      ">
                      <tbody>
                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-bold" class="fs-6 text-warning icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-4.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Hanna Gover</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-warning-subtle
                                    text-warning
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Freind</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-5.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Jack Corner</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-success-subtle
                                    text-success
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 14</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-6.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Harry
                                Callum</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-primary-subtle
                                    text-primary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">Work</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 18</td>
                        </tr>

                        <!-- row -->
                        <tr>
                          <td>
                            <div class="d-flex gap-3 align-items-center">
                              <div class="form-check ms-2">
                                <input type="checkbox" class="form-check-input" id="cst1">
                                <label class="form-check-label" for="cst1">&nbsp;</label>
                              </div>
                              <iconify-icon icon="solar:star-linear" class="fs-6 text-muted icon-center"></iconify-icon>
                              <img src="../assets/images/profile/user-7.jpg" class="rounded round-40" width="35">
                              <span class="mb-0 h6 text-nowrap">Charlie
                                Kyle</span>
                            </div>
                          </td>
                          <!-- Message -->
                          <td>
                            <a class="link" href="javascript: void(0)">
                              <span class="
                                    badge
                                    rounded
                                    bg-secondary-subtle
                                    text-secondary
                                    p-2
                                    me-2
                                    fw-semibold
                                  ">important</span>
                              <span class="text-muted fs-3 text-nowrap">Lorem
                                ipsum perspiciatis...</span>
                            </a>
                          </td>
                          <!-- Attachment -->
                          <td>
                            <iconify-icon icon="solar:link-minimalistic-bold" class="fs-6 text-muted icon-center"></iconify-icon>
                          </td>
                          <!-- Time -->
                          <td class="text-muted text-nowrap">May 20</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 ">
          <div class="card earning-widget w-100">
            <div class="d-flex justify-content-between px-9 py-9 border-bottom">
              <div>
                <h4 class="card-title">Total Earning</h4>
                <p class="card-subtitle">Earning of This Month</p>
              </div>
              <div class="ms-auto mt-1">
                <select class="form-select border-0 bg-inverse">
                  <option selected="">March</option>
                  <option value="1">February</option>
                  <option value="2">May</option>
                  <option value="3">April</option>
                </select>
              </div>
            </div>
            <div class="card-body table-responsive">

              <ul class="list-unstyled mb-0">
                <li class="hstack justify-content-between mb-4">
                  <div class="hstack gap-3">
                    <img src="../assets/images/profile/user-9.jpg" class="img-fluid rounded round-50 flex-shrink-0" alt="ample-img">
                    <h5 class="mb-0 fw-bold">Andrew Simon</h5>
                  </div>
                  <span class="badge bg-secondary-subtle text-secondary rounded fw-semibold p-2">$2300</span>
                </li>
                <li class="hstack justify-content-between mb-4">
                  <div class="hstack gap-3">
                    <img src="../assets/images/profile/user-6.jpg" class="img-fluid rounded round-50" alt="ample-img">
                    <h5 class="mb-0 fw-bold">Daniel Kristeen</h5>
                  </div>
                  <span class="badge bg-success-subtle text-success  rounded fw-semibold p-2">$3300</span>
                </li>
                <li class="hstack justify-content-between mb-4">
                  <div class="hstack gap-3">
                    <img src="../assets/images/profile/user-5.jpg" class="img-fluid rounded round-50" alt="ample-img">
                    <h5 class="mb-0 fw-bold">Dany John</h5>
                  </div>
                  <span class="badge bg-secondary-subtle text-secondary  rounded fw-semibold p-2">$4300</span>
                </li>
                <li class="hstack justify-content-between mb-4">
                  <div class="hstack gap-3">
                    <img src="../assets/images/profile/user-7.jpg" class="img-fluid rounded round-50" alt="ample-img">
                    <h5 class="mb-0 fw-bold">Roy John</h5>
                  </div>
                  <span class="badge bg-warning-subtle text-warning  rounded fw-semibold p-2">$5300</span>
                </li>
                <li class="hstack justify-content-between mb-4">
                  <div class="hstack gap-3">
                    <img src="../assets/images/profile/user-8.jpg" class="img-fluid rounded round-50" alt="ample-img">
                    <h5 class="mb-0 fw-bold">George Thomas</h5>
                  </div>
                  <span class="badge bg-danger-subtle text-danger  rounded fw-semibold p-2">$4567</span>
                </li>
                <li class="hstack justify-content-between my-4 mb-0 py-2">
                  <div class="hstack gap-3">
                    <img src="../assets/images/profile/user-3.jpg" class="img-fluid rounded round-50" alt="ample-img">
                    <h5 class="mb-0 fw-bold">Willy John</h5>
                  </div>
                  <span class="badge bg-info-subtle text-secondary  rounded fw-semibold p-2">$7889</span>
                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
@endsection


