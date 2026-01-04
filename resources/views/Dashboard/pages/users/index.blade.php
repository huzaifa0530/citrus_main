@extends('layouts.app')

@section('title', 'Users')

@section('content')

<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Users</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">All</a></li>
                </ul>
            </div>
        
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->

<div class="main-body">
    <div class="page-wrapper">
        <div class="row">
            <div class="col-xl-12">

                @php
                    $tabs = [
                        'all' => [
                            'title' => 'All Users',
                            'content' => view('Dashboard.Pages.users.partials._user_table', ['users' => $allUsers])->render()
                        ],
                        'admins' => [
                            'title' => 'Admins',
                            'content' => view('Dashboard.Pages.users.partials._admins_table', ['users' => $admins])->render()
                        ],
                        'brands' => [
                            'title' => 'Brands',
                            'content' => view('Dashboard.Pages.users.partials._brands_table', ['users' => $brands])->render()
                        ],
                    ];
                @endphp

                @include('Dashboard.components.tabs', ['id' => 'usersTableTab', 'tabs' => $tabs])

            </div>
        </div>
    </div>
</div>
@endsection
