@extends('layouts.app')

@section('title', 'Approved Request')

@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Approved Requests</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Requests</a></li>
                        <li class="breadcrumb-item"><a href="javascript:">Approved Requests</a></li>
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
                            <h5>All Approved Requests</h5>
                            <span class="d-block m-t-5">This table displays all user requests with their
                                current status.</span>
                        </div>
                        <div class="card-block table-border-style">

                            <table class="table table-striped table-hover  datatable nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>User</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($models as $index => $model)
                                        <tr>
                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>
                                                <!-- <img src="https://randomuser.me/api/portraits/men/32.jpg" class="img-radius"
                                                    width="40" alt="User"> -->
                                                <span class="ml-2">{{ $model->name }}</span>

                                            </td>
                                            <td>
                                                <div class="btn-group" role="group">


                                                    <!-- 
                                                                    <button class="btn btn-sm btn-outline-primary btn-icon" title="Print"
                                                                        onclick="window.print()">
                                                                        <i class="feather icon-printer"></i>
                                                                    </button> -->



                                                    <a href="{{ route('requests.download-pdf', $model->id) }}"
                                                        class="btn btn-sm btn-outline-primary btn-icon" title="Download PDF">
                                                        <i class="feather icon-printer"></i>
                                                    </a>

                                                </div>
                                            </td>

                                            <td>

                                                <button class="btn btn-sm btn-primary view-btn" data-id="{{ $model->id }}"
                                                    data-toggle="modal" data-target="#viewRequestModal">
                                                    <i class="feather icon-eye"></i> View
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>


                            </table>

                        </div>
                    </div>

                </div>

                @include('dashboard.components.modal')

                <!-- [ stiped-table ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    @push('scripts')

        <script src="{{ asset('Admin/assets/js/model/view-model-modal.js') }}"></script>

    @endpush
    <!-- [ Main Content ] end -->

@endsection