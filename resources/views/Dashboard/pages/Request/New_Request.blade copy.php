@extends('layouts.app')

@section('title', 'New Request')

@section('content')
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">New Requests</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Requests</a></li>
                        <li class="breadcrumb-item"><a href="javascript:">New Requests</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- [ Main Content ] start -->
            <div class="row">


                <!-- [ stiped-table ] start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>All New Requests</h5>
                            <span class="d-block m-t-5">This table displays all user requests with their
                                current status.</span>
                        </div>
                        <div class="card-block table-border-style">

                            <table class="table table-striped table-hover align-middle  datatable nowrap"
                                style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Status</th>

                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>
                                            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="img-radius"
                                                width="40" alt="User">
                                            <span class="ml-2">John Doe</span>
                                        </td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                        <td>
                                            <div class="row">
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#viewRequestModal">
                                                    <i class="feather icon-eye"></i> View
                                                </button>

                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light btn-icon" type="button"
                                                        id="actionMenu1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="feather icon-more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right shadow"
                                                        aria-labelledby="actionMenu1">
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-check mr-2 text-muted"></i>
                                                            Approve
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-pause mr-2 text-muted"></i>
                                                            On Hold
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-x mr-2 text-muted"></i>
                                                            Reject
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-dark" href="javascript:window.print()">
                                                            <i class="feather icon-printer mr-2 text-muted"></i>
                                                            Print
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">2</th>
                                        <td>
                                            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="img-radius"
                                                width="40" alt="User">
                                            <span class="ml-2">Sara Smith</span>
                                        </td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                        <td>
                                            <div class="row">
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#viewRequestModal">
                                                    <i class="feather icon-eye"></i> View
                                                </button>

                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light btn-icon" type="button"
                                                        id="actionMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="feather icon-more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right shadow"
                                                        aria-labelledby="actionMenu2">
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-check mr-2 text-muted"></i>
                                                            Approve
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-pause mr-2 text-muted"></i>
                                                            On Hold
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-x mr-2 text-muted"></i>
                                                            Reject
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-dark" href="javascript:window.print()">
                                                            <i class="feather icon-printer mr-2 text-muted"></i>
                                                            Print
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">3</th>
                                        <td>
                                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="img-radius"
                                                width="40" alt="User">
                                            <span class="ml-2">Ali Khan</span>
                                        </td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                        <td>
                                            <div class="row">
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#viewRequestModal">
                                                    <i class="feather icon-eye"></i> View
                                                </button>

                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light btn-icon" type="button"
                                                        id="actionMenu3" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="feather icon-more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right shadow"
                                                        aria-labelledby="actionMenu3">
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-check mr-2 text-muted"></i>
                                                            Approve
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-pause mr-2 text-muted"></i>
                                                            On Hold
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-x mr-2 text-muted"></i>
                                                            Reject
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-dark" href="javascript:window.print()">
                                                            <i class="feather icon-printer mr-2 text-muted"></i>
                                                            Print
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row">4</th>
                                        <td>
                                            <img src="https://randomuser.me/api/portraits/women/65.jpg" class="img-radius"
                                                width="40" alt="User">
                                            <span class="ml-2">Maria Garcia</span>
                                        </td>
                                        <td><span class="badge badge-info">Pending</span></td>
                                        <td>
                                            <div class="row">
                                                <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#viewRequestModal">
                                                    <i class="feather icon-eye"></i> View
                                                </button>

                                                <div class="dropdown">
                                                    <button class="btn btn-sm btn-light btn-icon" type="button"
                                                        id="actionMenu4" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="feather icon-more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right shadow"
                                                        aria-labelledby="actionMenu4">
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-check mr-2 text-muted"></i>
                                                            Approve
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-pause mr-2 text-muted"></i>
                                                            On Hold
                                                        </a>
                                                        <a class="dropdown-item text-dark" href="#">
                                                            <i class="feather icon-x mr-2 text-muted"></i>
                                                            Reject
                                                        </a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-dark" href="javascript:window.print()">
                                                            <i class="feather icon-printer mr-2 text-muted"></i>
                                                            Print
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>


                            </table>

                        </div>
                    </div>

                </div>
                <!-- [ stiped-table ] end -->
            </div>

            <div class="modal fade" id="viewRequestModal" tabindex="-1" role="dialog"
                aria-labelledby="viewRequestModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content shadow-lg border-0 rounded">
                        <div class="modal-header text-white">
                            <h5 class="modal-title" id="viewRequestModalLabel">
                                <i class="feather icon-user mr-2"></i> Registration Details
                            </h5>
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">

                            <!-- User Info -->
                            <h6 class="mb-3">Personal Information</h6>
                            <div class="row">
                                <div class="col-sm-6"><strong>Full Name:</strong> John Doe</div>
                                <div class="col-sm-6"><strong>Date of Birth:</strong> 12/03/1998</div>
                                <div class="col-sm-6"><strong>Age:</strong> 27</div>
                                <div class="col-sm-6"><strong>Gender:</strong> Male</div>
                                <div class="col-sm-6"><strong>Occupation:</strong> Student</div>
                                <div class="col-sm-6"><strong>Nationality:</strong> Pakistani</div>
                            </div>

                            <hr>
                            <h6 class="mb-3">Contact Information</h6>
                            <div class="row">
                                <div class="col-sm-6"><strong>Mobile:</strong> +92-300-1234567</div>
                                <div class="col-sm-6"><strong>Email:</strong> johndoe@email.com</div>
                                <div class="col-sm-12"><strong>Address:</strong> Karachi, Pakistan</div>
                            </div>

                            <hr>
                            <h6 class="mb-3">Social Media</h6>
                            <div class="row">
                                <div class="col-sm-4"><strong>Facebook:</strong> johndoe.fb</div>
                                <div class="col-sm-4"><strong>Instagram:</strong> @johndoe</div>
                                <div class="col-sm-4"><strong>Snapchat:</strong> johndoe_snap</div>
                                <div class="col-sm-4"><strong>TikTok:</strong> @johndoe123</div>
                                <div class="col-sm-4"><strong>YouTube:</strong> JohnDoeYT</div>
                            </div>

                            <hr>
                            <h6 class="mb-3">Measurements</h6>
                            <div class="row">
                                <div class="col-sm-4"><strong>Height:</strong> 5'11"</div>
                                <div class="col-sm-4"><strong>Hair Color:</strong> Black</div>
                                <div class="col-sm-4"><strong>Eye Color:</strong> Brown</div>
                                <div class="col-sm-4"><strong>Bust/Chest:</strong> 38</div>
                                <div class="col-sm-4"><strong>Waist:</strong> 32</div>
                                <div class="col-sm-4"><strong>Hip:</strong> 40</div>
                                <div class="col-sm-4"><strong>Shoe Size:</strong> 9</div>
                                <div class="col-sm-4"><strong>Dress/Suit:</strong> M</div>
                            </div>

                            <hr>
                            <h6 class="mb-3">NIC Images</h6>
                            <div class="row text-center">
                                <div class="col-md-6 col-12 mb-3">
                                    <strong>Front Side:</strong>
                                    <img src="{{ asset('storage/nic_images/front_sample.jpg') }}"
                                        class="img-fluid rounded shadow mt-2 border" alt="NIC Front Image"
                                        style="max-height: 200px; object-fit: cover;">
                                </div>
                                <div class="col-md-6 col-12 mb-3">
                                    <strong>Back Side:</strong>
                                    <img src="{{ asset('storage/nic_images/back_sample.jpg') }}"
                                        class="img-fluid rounded shadow mt-2 border" alt="NIC Back Image"
                                        style="max-height: 200px; object-fit: cover;">
                                </div>
                            </div>

                            <!-- 4 Images in a row -->
                            <h6 class="mb-3">Gallery</h6>
                            <div class="row text-center">
                                <div class="col-md-3 col-6 mb-3">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg"
                                        class="img-fluid rounded shadow" alt="Gallery Image 1">
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg"
                                        class="img-fluid rounded shadow" alt="Gallery Image 2">
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <img src="https://randomuser.me/api/portraits/men/65.jpg"
                                        class="img-fluid rounded shadow" alt="Gallery Image 3">
                                </div>
                                <div class="col-md-3 col-6 mb-3">
                                    <img src="https://randomuser.me/api/portraits/women/12.jpg"
                                        class="img-fluid rounded shadow" alt="Gallery Image 4">
                                </div>
                            </div>

                            <hr>
                            <!-- Video Button -->
                            <div class="text-center">
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"
                                    class="btn btn-outline-primary">
                                    <i class="feather icon-video"></i> Watch Video
                                </a>
                            </div>

                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <!-- <button type="button" class="btn btn-success">Approve</button>
                                    <button type="button" class="btn btn-warning">On Hold</button>
                                    <button type="button" class="btn btn-danger">Reject</button> -->
                            <button type="button" class="btn btn-primary" onclick="window.print()">
                                <i class="feather icon-printer"></i> Print
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ Main Content ] end -->
        </div>
    </div>

@endsection