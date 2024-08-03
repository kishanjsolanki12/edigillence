@extends('admin.layouts.main')
@section('content')
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container-full">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Basic Doctor Dashboard</h3>
                </div>              
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xl-8 col-12">                   
                    <div class="row">
                        <div class="col-xl-6 col-12">                       
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Next Patient</h4>
                                </div>
                                <div class="box-body">  
                                    <div class="news-slider owl-carousel owl-sl">   
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="me-15">
                                                    <img src="{{asset('images/1.jpg')}}" class="w-auto avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14">Shawn Hampton</p>
                                                    <span class="text-dark fs-16">Emergency appointment</span>
                                                </div>
                                                <div>
                                                    <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm mx-15"><i class="fa fa-phone"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-40 py-10 bt-dashed border-top">
                                                <div>
                                                    <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:00 <span class="mx-20">$ 30</span></p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                          <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="me-15">
                                                    <img src="{{asset('images/2.jpg')}}" class="w-auto avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14">Polly Paul</p>
                                                    <span class="text-dark fs-16">USG + Consultation</span>
                                                </div>
                                                <div>
                                                    <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm mx-15"><i class="fa fa-phone"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-40 py-10 bt-dashed border-top">
                                                <div>
                                                    <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:30 <span class="mx-20">$ 50</span></p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                          <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="me-15">
                                                    <img src="{{asset('images/3.jpg')}}" class="w-auto avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                                </div>
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14">Johen Doe</p>
                                                    <span class="text-dark fs-16">Laboratory screening</span>
                                                </div>
                                                <div>
                                                    <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm mx-15"><i class="fa fa-phone"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-40 py-10 bt-dashed border-top">
                                                <div>
                                                    <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:00 <span class="mx-20">$ 70</span></p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                          <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">                       
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Laboratory tests</h4>
                                </div>
                                <div class="box-body">  
                                    <div class="news-slider owl-carousel owl-sl">   
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i> Shawn Hampton</p>
                                                    <span class="text-dark fs-16">Beta 2 Microglobulin</span>
                                                    <p class="mb-0 fs-14">Marker Test <span class="badge badge-dot badge-primary"></span></p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                          <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end py-10">
                                                <div>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Contact Patient</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light"><i class="fa fa-check"></i> Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i> Johen Doe</p>
                                                    <span class="text-dark fs-16">Keeping pregnant</span>
                                                    <p class="mb-0 fs-14">Prga Test <span class="badge badge-dot badge-primary"></span></p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                          <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end py-10">
                                                <div>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Contact Patient</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light"><i class="fa fa-check"></i> Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center mb-10">
                                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                                    <p class="hover-primary text-fade mb-1 fs-14"><i class="fa fa-link"></i> Polly Paul</p>
                                                    <span class="text-dark fs-16">USG + Consultation</span>
                                                    <p class="mb-0 fs-14">Marker Test <span class="badge badge-dot badge-primary"></span></p>
                                                </div>
                                                <div>
                                                    <div class="dropdown">
                                                        <a data-bs-toggle="dropdown" href="#" class="base-font mx-30"><i class="ti-more-alt text-muted"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                          <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                          <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                          <div class="dropdown-divider"></div>
                                                          <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end py-10">
                                                <div>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Details</a>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light">Contact Patient</a>
                                                </div>
                                                <div>
                                                    <a href="#" class="waves-effect waves-light btn btn-sm btn-primary-light"><i class="fa fa-check"></i> Archive</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">                       
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Overal appointment</h4>
                                </div>
                                <div class="box-body">                                      
                                    <div id="appointment_overview"></div>                           
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">                       
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Patients Pace</h4>
                                </div>
                                <div class="box-body">                                      
                                    <div id="patients_pace"></div>                          
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">                       
                            <div class="box">
                                <div class="box-header no-border">
                                    <h4 class="box-title">Recent questions</h4>
                                </div>
                                <div class="box-body p-0">
                                    <div class="px-20 py-10 bg-gray-100">
                                        <div class="d-flex align-items-center justify-content-end">
                                            <button type="button" class="waves-effect waves-light btn btn-sm btn-success-light">All</button>
                                            <button type="button" class="waves-effect waves-light mx-10 btn btn-sm btn-success">Unread</button>
                                            <button type="button" class="waves-effect waves-light btn btn-sm btn-success-light">New</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="inner-user-div3">
                                        <div class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade">14 Jun 2021 <span class="mx-10">/</span> 01:05PM</p>                                                                 <h4>Addiction blood bank bone marrow contagious disinfectants?</h4>                                             
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-success-light">Read more</button>
                                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-success-light">Reply</button>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-lg"><i class="fa fa-comments"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade">17 Jun 2021 <span class="mx-10">/</span> 02:05PM</p>                                                                 <h4>Triggered asthma anesthesia blood type bone marrow cartilage?</h4>                                              
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-success-light">Read more</button>
                                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-success-light">Reply</button>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-lg"><i class="fa fa-comments"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pb-20 mb-10 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade">14 Jun 2021 <span class="mx-10">/</span> 01:05PM</p>                                                                 <h4>Addiction blood bank bone marrow contagious disinfectants?</h4>                                             
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-success-light">Read more</button>
                                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-success-light">Reply</button>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-lg"><i class="fa fa-comments"></i></a>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center pb-20 bb-dashed border-bottom">
                                            <div class="pe-20">
                                                <p class="fs-12 text-fade">17 Jun 2021 <span class="mx-10">/</span> 02:05PM</p>                                                                 <h4>Triggered asthma anesthesia blood type bone marrow cartilage?</h4>                                              
                                                <div class="d-flex align-items-center">
                                                    <button type="button" class="waves-effect waves-light btn me-10 btn-xs btn-success-light">Read more</button>
                                                    <button type="button" class="waves-effect waves-light btn btn-xs btn-success-light">Reply</button>
                                                </div>
                                            </div>
                                            <div>
                                                <a href="#" class="waves-effect waves-circle btn btn-circle btn-success-light btn-lg"><i class="fa fa-comments"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">                       
                            <div class="box">       
                                <div class="box-header">
                                    <h4 class="box-title">Confirmed Diagnoses</h4>
                                </div>
                                <div class="box-body">
                                    <div class="inner-user-div2">
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>648 of 751</h5><h5>Cold</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>215 of 651</h5><h5>Fracture</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100" style="width: 24%">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>84 of 120</h5><h5>Concussion</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>846 of 804</h5><h5>Hepatitis</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>458 of 901</h5><h5>Dermatitis</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>548 of 720</h5><h5>Heart</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100" style="width: 91%">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>154 of 480</h5><h5>Covid</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                                </div>
                                             </div>
                                        </div>
                                        <div class="mb-30">
                                             <div class="d-flex align-items-center justify-content-between mb-5"><h5>98 of 650</h5><h5>Hematoma</h5></div>
                                             <div class="progress  progress-xs">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                                </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
                <div class="col-xl-4 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Upcoming Appointments</h4>
                        </div>
                        <div class="box-body">
                            <div id="paginator1"></div>
                        </div>
                        <div class="box-body">
                            <div class="inner-user-div4">
                                <div>
                                    <div class="d-flex align-items-center mb-10">
                                        <div class="me-15">
                                            <img src="{{asset('images/avatar-1.png')}}" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <p class="hover-primary text-fade mb-1 fs-14">Shawn Hampton</p>
                                            <span class="text-dark fs-16">Emergency appointment</span>
                                        </div>
                                        <div>
                                            <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                        <div>
                                            <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:00 <span class="mx-20">$ 30</span></p>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-10">
                                        <div class="me-15">
                                            <img src="{{asset('images/avatar-2.png')}}" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <p class="hover-primary text-fade mb-1 fs-14">Polly Paul</p>
                                            <span class="text-dark fs-16">USG + Consultation</span>
                                        </div>
                                        <div>
                                            <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                        <div>
                                            <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 10:30 <span class="mx-20">$ 50</span></p>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-10">
                                        <div class="me-15">
                                            <img src="{{asset('images/avatar-3.png')}}" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <p class="hover-primary text-fade mb-1 fs-14">Johen Doe</p>
                                            <span class="text-dark fs-16">Laboratory screening</span>
                                        </div>
                                        <div>
                                            <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                        <div>
                                            <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:00 <span class="mx-20">$ 70</span></p>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-10">
                                        <div class="me-15">
                                            <img src="{{asset('images/avatar-4.png')}}" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <p class="hover-primary text-fade mb-1 fs-14">Harmani Doe</p>
                                            <span class="text-dark fs-16">Keeping pregnant</span>
                                        </div>
                                        <div>
                                            <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                        <div>
                                            <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 11:30 </p>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-10">
                                        <div class="me-15">
                                            <img src="{{asset('images/avatar-5.png')}}" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <p class="hover-primary text-fade mb-1 fs-14">Mark Wood</p>
                                            <span class="text-dark fs-16">Primary doctor consultation</span>
                                        </div>
                                        <div>
                                            <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                        <div>
                                            <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 12:00 <span class="mx-20">$ 30</span></p>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center mb-10">
                                        <div class="me-15">
                                            <img src="{{asset('images/avatar-6.png')}}" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                        </div>
                                        <div class="d-flex flex-column flex-grow-1 fw-500">
                                            <p class="hover-primary text-fade mb-1 fs-14">Shawn Marsh</p>
                                            <span class="text-dark fs-16">Emergency appointment</span>
                                        </div>
                                        <div>
                                            <a href="#" class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i class="fa fa-phone"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                        <div>
                                            <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> 13:00 <span class="mx-20">$ 90</span></p>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i class="ti-more-alt text-muted"></i></a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                  <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                                                  <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                                                  <div class="dropdown-divider"></div>
                                                  <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">       
                        <div class="box-header no-border">
                            <h4 class="box-title">Appointments Overview</h4>
                        </div>
                        <div class="box-body">  
                            <div id="chart432"></div>
                        </div>                                                                      
                    </div>
                </div>              
            </div>          
        </section>
        <!-- /.content -->
      </div>
  </div>
  <!-- /.content-wrapper -->    
@endsection
