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
                            <span class="d-block m-t-5">This table displays all user requests with their current
                                status.</span>
                        </div>
                        <div class="card-block table-border-style">
                            <table class="table table-striped table-hover align-middle datatable nowrap" style="width:100%">
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
                                        <tr data-id="{{ $model->id }}">

                                            <th scope="row">{{ $index + 1 }}</th>
                                            <td>
                                                <!-- <img src="{{ $model->assetUrl('profile_image', 'https://via.placeholder.com/40') }}"
                                                    class="img-radius" width="40" alt="User"> -->
                                                <span class="ml-2">{{ $model->name }}</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-info">{{ $model->status }}</span>
                                            </td>
                                            <td>
                                                <div class="row">
                                                    <button class="btn btn-sm btn-primary view-btn" data-id="{{ $model->id }}"
                                                        data-toggle="modal" data-target="#viewRequestModal">
                                                        <i class="feather icon-eye"></i> View
                                                    </button>
                                                    @include('dashboard.components.status-dropdown', ['model' => $model])
                                                </div>
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

        <script src="{{ asset('Admin/assets/js/model/status-dropdown.js') }}"></script>
        <script src="{{ asset('Admin/assets/js/model/view-model-modal.js') }}"></script>

    @endpush


@endsection