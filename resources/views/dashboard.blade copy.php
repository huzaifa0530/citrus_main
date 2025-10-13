@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-primary mb-4">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
    </h2>

    <div class="row g-4">
        <!-- Total Models -->
<div class="col-md-3">
    <a href="{{ route('models.index') }}" class="text-decoration-none">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-body text-center">
                <i class="bi bi-person-badge-fill text-info fs-1 mb-3"></i>
                <h5 class="fw-bold text-dark">Total Models</h5>
                <p class="fs-3 fw-semibold text-dark">{{ $totalModels }}</p>
            </div>
        </div>
    </a>
</div>

        <!-- Total Users -->
<div class="col-md-3">
    <a href="{{ route('users.index') }}" class="text-decoration-none">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-body text-center">
                <i class="bi bi-people-fill text-primary fs-1 mb-3"></i>
                <h5 class="fw-bold text-dark">Total Users</h5>
                <p class="fs-3 fw-semibold text-dark">{{ $totalUsers }}</p>
            </div>
        </div>
    </a>
</div>

<!-- Total Roles -->
<div class="col-md-3">
    <a href="{{ route('roles.index') }}" class="text-decoration-none">
        <div class="card shadow-sm border-0 rounded-3 h-100">
            <div class="card-body text-center">
                <i class="bi bi-shield-lock-fill text-success fs-1 mb-3"></i>
                <h5 class="fw-bold text-dark">Total Roles</h5>
                <p class="fs-3 fw-semibold text-dark">{{ $totalRoles }}</p>
            </div>
        </div>
    </a>
</div>


        <!-- Total Permissions -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body text-center">
                    <i class="bi bi-key-fill text-warning fs-1 mb-3"></i>
                    <h5 class="fw-bold">Total Permissions</h5>
                    <p class="fs-3 fw-semibold text-dark">{{ $totalPermissions }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
