@extends('admin.layouts.master')
@section('content')
<div class="row">
  <div class="col">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:;"><i class="ti-home"></i> Dashboard</a></li>
      </ol>
  </div>
</div>
<div class="row">
  <div class="col-md-4">
      <div class="card mb-3">
          <div class="card-body">
              <div class="icon-left text-secondary"><i class="ti-bar-chart"></i></div>
              <div class="number-right text-right">
                  <h6 class="bold text-secondary">Monthly Goal</h6>
                  <h3 class="card-title text-warning bold">$74,502</h3>
              </div>
              <div class="progress progress-bar-sm">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                      aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress-text text-secondary">
                  <span class="float-left"><small>$0</small></span>
                  <span class="float-right"><small>$100,000</small></span>
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card mb-3">
          <div class="card-body">
              <div class="icon-left text-secondary"><i class="ti-receipt"></i></div>
              <div class="number-right text-right">
                  <h6 class="bold text-secondary">Monthly Orders</h6>
                  <h3 class="card-title text-primary bold">9,432</h3>
              </div>
              <div class="progress progress-bar-sm">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="100"
                      aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress-text text-secondary">
                  <span class="float-left"><small>Total Monthly Orders</small></span>
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-4">
      <div class="card mb-3">
          <div class="card-body">
              <div class="icon-left text-secondary"><i class="ti-wallet"></i></div>
              <div class="number-right text-right">
                  <h6 class="bold text-secondary">Monthly Expenses</h6>
                  <h3 class="card-title text-bubblegum bold">$2,942</h3>
              </div>
              <div class="progress progress-bar-sm">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-bubblegum" role="progressbar" style="width: 30%" aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress-text text-secondary">
                  <span class="float-left"><small>0%</small></span>
                  <span class="float-right"><small>100%</small></span>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Year Comparison Chart -->
<div class="row">
  <div class="col-md-12">
      <div class="card mb-3">
          <div class="card-body" id="year-comparison-chart"></div>
      </div>
  </div>
</div>

<div class="row">
  <!-- Employees Sales -->
  <div class="col-md-6">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption">
                  <i class="ti-user"></i> Employees Sales
              </div>
              <div class="tools">
                  <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Today</a>
                  <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Week</a>
                  <a href="javascript:;" class="btn btn-round btn-sm btn-outline-secondary">Month</a>
              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-md-6">
                      <div class="card border-0">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-6 text-right">
                                      <h6 class="bold text-secondary">Daily</h6>
                                      <h5 class="card-title text-tuscany bold">$7,524</h3>
                                  </div>
                                  <div class="col-6">
                                      <div id="sparkline-chart1"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="card border-0">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-6 text-right">
                                      <h6 class="bold text-secondary">Weekly</h6>
                                      <h5 class="card-title text-info bold">$18,852</h3>
                                  </div>
                                  <div class="col-6">
                                      <div id="sparkline-chart2"></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12 scrollbox-md" data-simplebar>
                      <div class="table-responsive">
                          <table class="table table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>Employee</th>
                                      <th class="text-right">Daily</th>
                                      <th class="text-right">Totals</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td scope="row"><img src="assets/img/profile/profile-07.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">siQuang Humbleman</a></td>
                                      <td class="text-right">$2,546</td>
                                      <td class="text-right">$14,587</td>
                                  </tr>
                                  <tr>
                                      <td scope="row"><img src="assets/img/profile/profile-02.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Bob OfHope</a></td>
                                      <td class="text-right">$2,338</td>
                                      <td class="text-right">$8,321</td>
                                  </tr>
                                  <tr>
                                      <td scope="row"><img src="assets/img/profile/profile-03.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Dana Squash</a></td>
                                      <td class="text-right">$1,478</td>
                                      <td class="text-right">$6,720</td>
                                  </tr>
                                  <tr>
                                      <td scope="row"><img src="assets/img/profile/profile-04.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Pear Appleton</a></td>
                                      <td class="text-right">$2,338</td>
                                      <td class="text-right">$8,321</td>
                                  </tr>
                                  <tr>
                                      <td scope="row"><img src="assets/img/profile/profile-06.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Lemony Tang</a></td>
                                      <td class="text-right">$1,478</td>
                                      <td class="text-right">$6,720</td>
                                  </tr>
                                  <tr>
                                      <td scope="row"><img src="assets/img/profile/profile-01.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Duke Turnbull</a></td>
                                      <td class="text-right">$1,338</td>
                                      <td class="text-right">$4,321</td>
                                  </tr>
                                  <tr>
                                      <td scope="row"><img src="assets/img/profile/profile-05.jpg" class="rounded-circle mr-2" width="30" alt=""> <a href="javascript:;">Berry Cherry</a></td>
                                      <td class="text-right">$978</td>
                                      <td class="text-right">$3,720</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- My Tasks -->
  <div class="col-md-6">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption">
                  <i class="ti-pencil-alt"></i> My Tasks
              </div>
              <div class="tools">
                  <a href="javascript:;" class="btn btn-sm btn-primary" data-toggle="tooltip" title="Add New Task"><i class="ti-plus"></i></a>
                  <a href="javascript:;" class="btn btn-sm btn-outline-secondary" data-toggle="dropdown" aria-expanded="false">
                      <i class="ti-settings"></i> Settings <i class="ti-arrow-circle-down"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                      <a href="javascript:;" class="dropdown-item">Action</a>
                      <a href="javascript:;" class="dropdown-item">Another Action</a>
                      <div class="dropdown-divider"></div>
                      <a href="javascript:;" class="dropdown-item">Some Setting</a>
                  </div>
              </div>
          </div>
          <div class="card-body">
              <div class="row py-3">
                  <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                      <h2 class="text-primary bold">10</h2>
                      Active
                  </div>
                  <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                      <h2 class="text-success bold">2</h2>
                      In-Progress
                  </div>
                  <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                      <h2 class="text-warning bold">3</h2>
                      On-Hold
                  </div>
                  <div class="col-md-3 col-6 d-flex flex-column align-items-center">
                      <h2 class="text-secondary bold">4</h2>
                      Completed
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-12 scrollbox-md" data-simplebar>
                      <ul class="list-group list-group-flush">
                          <li class="list-group-item">
                              <div class="d-flex align-items-baseline">
                                  <div class="custom-checkbox custom-control">
                                      <input type="checkbox" class="custom-control-input" id="checkbox1" name="checkbox1">
                                      <label class="custom-control-label" for="checkbox1">&nbsp;</label>
                                  </div>
                                  <div class="pl-4">
                                      <strong>Doctor Appointment <i class="ti-hand-open text-warning"></i></strong><br>Annual checkup with doctor
                                  </div>
                                  <div class="ml-auto text-right">
                                      <div class="btn-group btn-group-sm">
                                          <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                          <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-baseline">
                                  <div class="custom-checkbox custom-control">
                                      <input type="checkbox" class="custom-control-input" id="checkbox2" name="checkbox2">
                                      <label class="custom-control-label" for="checkbox2">&nbsp;</label>
                                  </div>
                                  <div class="pl-4">
                                      <strong>Write Unit Test <i class="ti-timer text-success"></i></strong><br>Unit test for dashboard widgets
                                  </div>
                                  <div class="ml-auto text-right">
                                      <div class="btn-group btn-group-sm">
                                          <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                          <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-baseline">
                                  <div class="custom-checkbox custom-control">
                                      <input type="checkbox" class="custom-control-input" id="checkbox3" name="checkbox3">
                                      <label class="custom-control-label" for="checkbox3">&nbsp;</label>
                                  </div>
                                  <div class="pl-4">
                                      <strong>Annual Report <i class="ti-notepad text-primary"></i></strong><br>Design annual report cover
                                  </div>
                                  <div class="ml-auto text-right">
                                      <div class="btn-group btn-group-sm">
                                          <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                          <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-baseline">
                                  <div class="custom-checkbox custom-control">
                                      <input type="checkbox" class="custom-control-input" id="checkbox4" name="checkbox4">
                                      <label class="custom-control-label" for="checkbox4">&nbsp;</label>
                                  </div>
                                  <div class="pl-4">
                                      <strong>Management Meeting <i class="ti-notepad text-primary"></i></strong><br>Coming up meeting with staffs
                                  </div>
                                  <div class="ml-auto text-right">
                                      <div class="btn-group btn-group-sm">
                                          <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                          <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-baseline">
                                  <div class="custom-checkbox custom-control">
                                      <input type="checkbox" class="custom-control-input" id="checkbox5" name="checkbox5">
                                      <label class="custom-control-label" for="checkbox5">&nbsp;</label>
                                  </div>
                                  <div class="pl-4">
                                      <strong>Merge Development <i class="ti-timer text-success"></i></strong><br>Merge development branch with master
                                  </div>
                                  <div class="ml-auto text-right">
                                      <div class="btn-group btn-group-sm">
                                          <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                          <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-baseline">
                                  <div class="custom-checkbox custom-control">
                                      <input type="checkbox" class="custom-control-input" id="checkbox6" name="checkbox6">
                                      <label class="custom-control-label" for="checkbox6">&nbsp;</label>
                                  </div>
                                  <div class="pl-4">
                                      <strong>Build Report <i class="ti-hand-open text-warning"></i></strong><br>Build report graph for dashboard
                                  </div>
                                  <div class="ml-auto text-right">
                                      <div class="btn-group btn-group-sm">
                                          <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                          <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                          <li class="list-group-item">
                              <div class="d-flex align-items-baseline">
                                  <div class="custom-checkbox custom-control">
                                      <input type="checkbox" class="custom-control-input" id="checkbox7" name="checkbox7">
                                      <label class="custom-control-label" for="checkbox7">&nbsp;</label>
                                  </div>
                                  <div class="pl-4">
                                      <strong>Add New Vendor <i class="ti-hand-open text-warning"></i></strong><br>Add new third-party vendor
                                  </div>
                                  <div class="ml-auto text-right">
                                      <div class="btn-group btn-group-sm">
                                          <a href="javascript:;" class="btn btn-sm btn-success"><i class="ti-check"></i></a>
                                          <a href="javascript:;" class="btn btn-sm btn-secondary"><i class="ti-trash"></i></a>
                                      </div>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- Articles -->
<div class="row" id="articles"></div>

<div class="row">
  <!-- Product Sales Chart -->
  <div class="col-md-6">
      <div class="card mb-3">
          <div class="card-body" id="product-sales-chart"></div>
      </div>
  </div>

  <!-- Expenses Chart -->
  <div class="col-md-6">
      <div class="card mb-3">
          <div class="card-body" id="expenses-chart"></div>
      </div>
  </div>
</div>

<div class="row">
  <!-- Company Timeline -->
  <div class="col-md-6">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption text-primary">
                  <i class="ti-panel"></i> Company Timeline
              </div>
          </div>
          <div class="card-body scrollbox-md" data-simplebar>
              <div class="timeline-wrapper">
                  <div class="timeline-item" data-date="04-22-2020">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quam nisi distinctio dolorum est tempora.</p>
                      <a href="javascript:;" class="btn btn-sm btn-primary">More Info</a>
                  </div>
                  <div class="timeline-item" data-date="04-16-2020">
                      <p>Completed dashboard layout and add all required widgets.</p>
                  </div>
                  <div class="timeline-item" data-date="04-14-2020">
                      <p>Added new page to UI Element category. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit officiis ut natus et minima expedita.</p>
                      <a href="javascript:;" class="btn btn-sm btn-primary">Read More</a>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!-- Recent Memebers -->
  <div class="col-md-6">
      <div class="card mb-3">
          <div class="card-header">
              <div class="caption text-primary">
                  <i class="ti-user"></i> Recent Members
              </div>
              <div class="tools">
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary"><i class="ti-import" data-toggle="tooltip" title="Download List"></i></a>
              </div>
          </div>
          <div class="card-body">
              <div class="row">
                  <div class="col-md-4 mb-3 mb-md-0">
                      <div class="card">
                          <img src="assets/img/profile/profile-01.jpg" alt="" class="card-img-top">
                          <div class="card-body p-2 text-center">
                              <h5 class="card-title">Jason Crispy</h5>
                              <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                              <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 3.5k</a>
                              <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 2.4k</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                      <div class="card">
                          <img src="assets/img/profile/profile-02.jpg" alt="" class="card-img-top">
                          <div class="card-body p-2 text-center">
                              <h5 class="card-title">Bob OfHope</h5>
                              <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                              <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 4.1k</a>
                              <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 7.2k</a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                      <div class="card">
                          <img src="assets/img/profile/profile-03.jpg" alt="" class="card-img-top">
                          <div class="card-body p-2 text-center">
                              <h5 class="card-title">Dana Squash</h5>
                              <p class="card-text font-size-12">Lorem Ipsum text placeholder.</p>
                              <a href="javascript:;" class="card-link"><i class="ti-twitter"></i> 6.1k</a>
                              <a href="javascript:;" class="card-link"><i class="ti-facebook"></i> 5.5k</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab" aria-selected="false">Audiences</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics" role="tab" aria-selected="false">Demographics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab" aria-selected="false">More</a>
              </li>
            </ul>
            <div>
              <div class="btn-wrapper">
                <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i> Share</a>
                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
              </div>
            </div>
          </div>
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
              <div class="row">
                <div class="col-sm-12">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div>
                      <p class="statistics-title">Bounce Rate</p>
                      <h3 class="rate-percentage">32.53%</h3>
                      <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>-0.5%</span></p>
                    </div>
                    <div>
                      <p class="statistics-title">Page Views</p>
                      <h3 class="rate-percentage">7,682</h3>
                      <p class="text-success d-flex"><i class="mdi mdi-menu-up"></i><span>+0.1%</span></p>
                    </div>
                    <div>
                      <p class="statistics-title">New Sessions</p>
                      <h3 class="rate-percentage">68.8</h3>
                      <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                    </div>
                    <div class="d-none d-md-block">
                      <p class="statistics-title">Avg. Time on Site</p>
                      <h3 class="rate-percentage">2m:35s</h3>
                      <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                    </div>
                    <div class="d-none d-md-block">
                      <p class="statistics-title">New Sessions</p>
                      <h3 class="rate-percentage">68.8</h3>
                      <p class="text-danger d-flex"><i class="mdi mdi-menu-down"></i><span>68.8</span></p>
                    </div>
                    <div class="d-none d-md-block">
                      <p class="statistics-title">Avg. Time on Site</p>
                      <h3 class="rate-percentage">2m:35s</h3>
                      <p class="text-success d-flex"><i class="mdi mdi-menu-down"></i><span>+0.8%</span></p>
                    </div>
                  </div>
                </div>
              </div> 
              <div class="row">
                <div class="col-lg-8 d-flex flex-column"> 
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                              <h4 class="card-title card-title-dash">Pending Requests</h4>
                             <p class="card-subtitle card-subtitle-dash">You have 50+ new requests</p>
                            </div>
                            <div>
                              <button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i class="mdi mdi-account-plus"></i>Add new member</button>
                            </div>
                          </div>
                          <div class="table-responsive  mt-1">
                            <table class="table select-table">
                              <thead>
                                <tr>
                                  <th>
                                    <div class="form-check form-check-flat mt-0">
                                      <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                    </div>
                                  </th>
                                  <th>Customer</th>
                                  <th>Company</th>
                                  <th>Progress</th>
                                  <th>Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="form-check form-check-flat mt-0">
                                      <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex ">
                                      <img src="images/faces/face1.jpg" alt="">
                                      <div>
                                        <h6>Brandon Washington</h6>
                                        <p>Head admin</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <h6>Company name 1</h6>
                                    <p>company type</p>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                        <p class="text-success">79%</p>
                                        <p>85/162</p>
                                      </div>
                                      <div class="progress progress-md">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </td>
                                  <td><div class="badge badge-opacity-warning">In progress</div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check form-check-flat mt-0">
                                      <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex">
                                      <img src="images/faces/face2.jpg" alt="">
                                      <div>
                                        <h6>Laura Brooks</h6>
                                        <p>Head admin</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <h6>Company name 1</h6>
                                    <p>company type</p>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                        <p class="text-success">65%</p>
                                        <p>85/162</p>
                                      </div>
                                      <div class="progress progress-md">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </td>
                                  <td><div class="badge badge-opacity-warning">In progress</div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check form-check-flat mt-0">
                                      <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex">
                                      <img src="images/faces/face3.jpg" alt="">
                                      <div>
                                        <h6>Wayne Murphy</h6>
                                        <p>Head admin</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <h6>Company name 1</h6>
                                    <p>company type</p>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                        <p class="text-success">65%</p>
                                        <p>85/162</p>
                                      </div>
                                      <div class="progress progress-md">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </td>
                                  <td><div class="badge badge-opacity-warning">In progress</div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check form-check-flat mt-0">
                                      <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex">
                                      <img src="images/faces/face4.jpg" alt="">
                                      <div>
                                        <h6>Matthew Bailey</h6>
                                        <p>Head admin</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <h6>Company name 1</h6>
                                    <p>company type</p>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                        <p class="text-success">65%</p>
                                        <p>85/162</p>
                                      </div>
                                      <div class="progress progress-md">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </td>
                                  <td><div class="badge badge-opacity-danger">Pending</div></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="form-check form-check-flat mt-0">
                                      <label class="form-check-label">
                                      <input type="checkbox" class="form-check-input" aria-checked="false"><i class="input-helper"></i></label>
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex">
                                      <img src="images/faces/face5.jpg" alt="">
                                      <div>
                                        <h6>Katherine Butler</h6>
                                        <p>Head admin</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <h6>Company name 1</h6>
                                    <p>company type</p>
                                  </td>
                                  <td>
                                    <div>
                                      <div class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                        <p class="text-success">65%</p>
                                        <p>85/162</p>
                                      </div>
                                      <div class="progress progress-md">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                                    </div>
                                  </td>
                                  <td><div class="badge badge-opacity-success">Completed</div></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row flex-grow">
                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body card-rounded">
                          <h4 class="card-title  card-title-dash">Recent Events</h4>
                          <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                              <p class="mb-2 font-weight-medium">
                                Change in Directors
                              </p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="mdi mdi-calendar text-muted me-1"></i>
                                  <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                              <p class="mb-2 font-weight-medium">
                                Other Events
                              </p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="mdi mdi-calendar text-muted me-1"></i>
                                  <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                              <p class="mb-2 font-weight-medium">
                                Quarterly Report
                              </p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="mdi mdi-calendar text-muted me-1"></i>
                                  <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="list align-items-center border-bottom py-2">
                            <div class="wrapper w-100">
                              <p class="mb-2 font-weight-medium">
                                Change in Directors
                              </p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                  <i class="mdi mdi-calendar text-muted me-1"></i>
                                  <p class="mb-0 text-small text-muted">Mar 14, 2019</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                          <div class="list align-items-center pt-3">
                            <div class="wrapper w-100">
                              <p class="mb-0">
                                <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <h4 class="card-title card-title-dash">Activities</h4>
                            <p class="mb-0">20 finished, 5 remaining</p>
                          </div>
                          <ul class="bullet-line-list">
                            <li>
                              <div class="d-flex justify-content-between">
                                <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                <p>Just now</p>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex justify-content-between">
                                <div><span class="text-light-green">Oliver Noah</span> assign you a task</div>
                                <p>1h</p>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex justify-content-between">
                                <div><span class="text-light-green">Jack William</span> assign you a task</div>
                                <p>1h</p>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex justify-content-between">
                                <div><span class="text-light-green">Leo Lucas</span> assign you a task</div>
                                <p>1h</p>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex justify-content-between">
                                <div><span class="text-light-green">Thomas Henry</span> assign you a task</div>
                                <p>1h</p>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex justify-content-between">
                                <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                <p>1h</p>
                              </div>
                            </li>
                            <li>
                              <div class="d-flex justify-content-between">
                                <div><span class="text-light-green">Ben Tossell</span> assign you a task</div>
                                <p>1h</p>
                              </div>
                            </li>
                          </ul>
                          <div class="list align-items-center pt-3">
                            <div class="wrapper w-100">
                              <p class="mb-0">
                                <a href="#" class="fw-bold text-primary">Show all <i class="mdi mdi-arrow-right ms-2"></i></a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 d-flex flex-column">
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title card-title-dash">Todo list</h4>
                                <div class="add-items d-flex mb-0">
                                  <!-- <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?"> -->
                                  <button class="add btn btn-icons btn-rounded btn-primary todo-list-add-btn text-white me-0 pl-12p"><i class="mdi mdi-plus"></i></button>
                                </div>
                              </div>
                              <div class="list-wrapper">
                                <ul class="todo-list todo-list-rounded">
                                  <li class="d-block">
                                    <div class="form-check w-100">
                                      <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                      </label>
                                      <div class="d-flex mt-2">
                                        <div class="ps-4 text-small me-3">24 June 2020</div>
                                        <div class="badge badge-opacity-warning me-3">Due tomorrow</div>
                                        <i class="mdi mdi-flag ms-2 flag-color"></i>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="d-block">
                                    <div class="form-check w-100">
                                      <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                      </label>
                                      <div class="d-flex mt-2">
                                        <div class="ps-4 text-small me-3">23 June 2020</div>
                                        <div class="badge badge-opacity-success me-3">Done</div>
                                      </div>
                                    </div>
                                  </li>
                                  <li>
                                    <div class="form-check w-100">
                                      <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                      </label>
                                      <div class="d-flex mt-2">
                                        <div class="ps-4 text-small me-3">24 June 2020</div>
                                        <div class="badge badge-opacity-success me-3">Done</div>
                                      </div>
                                    </div>
                                  </li>
                                  <li class="border-bottom-0">
                                    <div class="form-check w-100">
                                      <label class="form-check-label">
                                        <input class="checkbox" type="checkbox"> Lorem Ipsum is simply dummy text of the printing <i class="input-helper rounded"></i>
                                      </label>
                                      <div class="d-flex mt-2">
                                        <div class="ps-4 text-small me-3">24 June 2020</div>
                                        <div class="badge badge-opacity-danger me-3">Expired</div>
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4 class="card-title card-title-dash">Type By Amount</h4>
                              </div>
                              <canvas class="my-auto" id="doughnutChart" height="200"></canvas>
                              <div id="doughnut-chart-legend" class="mt-5 text-center"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                  <h4 class="card-title card-title-dash">Leave Report</h4>
                                </div>
                                <div>
                                  <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                      <h6 class="dropdown-header">week Wise</h6>
                                      <a class="dropdown-item" href="#">Year Wise</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mt-3">
                                <canvas id="leaveReport"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row flex-grow">
                    <div class="col-12 grid-margin stretch-card">
                      <div class="card card-rounded">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                  <h4 class="card-title card-title-dash">Top Performer</h4>
                                </div>
                              </div>
                              <div class="mt-3">
                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                  <div class="d-flex">
                                    <img class="img-sm rounded-10" src="images/faces/face1.jpg" alt="profile">
                                    <div class="wrapper ms-3">
                                      <p class="ms-1 mb-1 fw-bold">Brandon Washington</p>
                                      <small class="text-muted mb-0">162543</small>
                                    </div>
                                  </div>
                                  <div class="text-muted text-small">
                                    1h ago
                                  </div>
                                </div>
                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                  <div class="d-flex">
                                    <img class="img-sm rounded-10" src="images/faces/face2.jpg" alt="profile">
                                    <div class="wrapper ms-3">
                                      <p class="ms-1 mb-1 fw-bold">Wayne Murphy</p>
                                      <small class="text-muted mb-0">162543</small>
                                    </div>
                                  </div>
                                  <div class="text-muted text-small">
                                    1h ago
                                  </div>
                                </div>
                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                  <div class="d-flex">
                                    <img class="img-sm rounded-10" src="images/faces/face3.jpg" alt="profile">
                                    <div class="wrapper ms-3">
                                      <p class="ms-1 mb-1 fw-bold">Katherine Butler</p>
                                      <small class="text-muted mb-0">162543</small>
                                    </div>
                                  </div>
                                  <div class="text-muted text-small">
                                    1h ago
                                  </div>
                                </div>
                                <div class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                  <div class="d-flex">
                                    <img class="img-sm rounded-10" src="images/faces/face4.jpg" alt="profile">
                                    <div class="wrapper ms-3">
                                      <p class="ms-1 mb-1 fw-bold">Matthew Bailey</p>
                                      <small class="text-muted mb-0">162543</small>
                                    </div>
                                  </div>
                                  <div class="text-muted text-small">
                                    1h ago
                                  </div>
                                </div>
                                <div class="wrapper d-flex align-items-center justify-content-between pt-2">
                                  <div class="d-flex">
                                    <img class="img-sm rounded-10" src="images/faces/face5.jpg" alt="profile">
                                    <div class="wrapper ms-3">
                                      <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                      <small class="text-muted mb-0">Alaska, USA</small>
                                    </div>
                                  </div>
                                  <div class="text-muted text-small">
                                    1h ago
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




      
@endsection