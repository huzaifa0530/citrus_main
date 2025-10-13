@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Roles</h2>
        <a href="{{ route('roles.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Create Role
        </a>
    </div>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Permissions</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td class="fw-semibold">{{ $role->name }}</td>
                                <td>
                                    @if($role->permissions->count())
                                        <span class="badge bg-info text-dark">
                                            {{ $role->permissions->pluck('name')->join(', ') }}
                                        </span>
                                    @else
                                        <span class="text-muted">No permissions</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <a href="{{ route('roles.edit',$role) }}" class="btn btn-sm btn-outline-primary me-2">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>

                                    <form action="{{ route('roles.destroy',$role) }}" method="POST" class="d-inline">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Are you sure you want to delete this role?')">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No roles found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $roles->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
