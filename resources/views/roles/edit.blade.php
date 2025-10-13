@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Edit Role</h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('roles.update', $role->id) }}">
                        @csrf
                        @method('PUT')

                        <!-- Role Name -->
                        <div class="mb-3">
                            <label for="name" class="form-label">Role Name</label>
                            <input 
                                type="text" 
                                name="name" 
                                id="name"
                                class="form-control @error('name') is-invalid @enderror" 
                                value="{{ old('name', $role->name) }}" 
                                placeholder="Enter role name"
                                required
                            >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Permissions -->
                        <div class="mb-3">
                            <label class="form-label">Permissions</label>
                            <div class="row">
                                @foreach($permissions as $permission)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input 
                                                class="form-check-input"
                                                type="checkbox" 
                                                name="permissions[]" 
                                                id="perm_{{ $permission->id }}"
                                                value="{{ $permission->name }}"
                                                {{ in_array($permission->id, $role->permissions->pluck('id')->toArray()) ? 'checked' : '' }}
                                            >
                                            <label class="form-check-label" for="perm_{{ $permission->id }}">
                                                {{ ucfirst($permission->name) }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Submit -->
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-primary">Update Role</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
