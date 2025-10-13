@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-primary">
            <i class="bi bi-people-fill me-2"></i> Users
        </h2>

        @can('users.create')
            <a href="{{ route('users.create') }}" class="btn btn-primary">
                <i class="bi bi-person-plus-fill me-1"></i> Create User
            </a>
        @endcan
    </div>

    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover table-striped mb-0 align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Roles</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="fw-semibold">{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if($user->roles->isNotEmpty())
                                        <span class="badge bg-info text-dark">
                                            {{ $user->roles->pluck('name')->join(', ') }}
                                        </span>
                                    @else
                                        <span class="badge bg-secondary">No Role</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        @can('users.edit')
                                            <a href="{{ route('users.edit',$user) }}" 
                                               class="btn btn-sm btn-warning text-dark">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>
                                        @endcan

                                        @can('users.delete')
                                            <form action="{{ route('users.destroy',$user) }}" 
                                                  method="POST" 
                                                  onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="bi bi-trash-fill"></i> Delete
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-3">
                                    <i class="bi bi-exclamation-circle me-1"></i> No users found.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $users->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
