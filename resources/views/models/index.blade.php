@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">Model Profiles</h1>
        <a href="{{ route('models.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle me-1"></i> Add New Model
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($models->count())
        <div class="row">
            @foreach($models as $model)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 h-100">
                        @php
                            // pick first asset (close_up_image) if available
                            $thumbnail = $model->assets->where('name', 'close_up_image')->first();
                        @endphp
                        
                        @if($thumbnail && $thumbnail->type === 'image')
                            <img src="{{ $thumbnail->url }}" 
                                 class="card-img-top" 
                                 alt="Thumbnail of {{ $model->name }}"
                                 style="object-fit: cover; height: 250px;">
                        @else
                            <div class="bg-light d-flex align-items-center justify-content-center" style="height:250px;">
                                <i class="bi bi-person-circle text-secondary fs-1"></i>
                            </div>
                        @endif

                        <div class="card-body">
                            <h5 class="card-title">{{ $model->name }}</h5>
                            <p class="card-text mb-1"><strong>Gender:</strong> {{ $model->gender ?? '-' }}</p>
                            <p class="card-text mb-1"><strong>Age:</strong> {{ $model->age ?? '-' }}</p>
                            <p class="card-text"><strong>Email:</strong> {{ $model->email ?? '-' }}</p>

                            <div class="d-flex justify-content-between mt-3">
                                <a href="{{ route('models.show', $model) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <a href="{{ route('models.edit', $model) }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('models.destroy', $model) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Delete this model?')">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="card-footer text-muted small">
                            Created: {{ $model->created_at->format('d M Y') }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $models->links('pagination::bootstrap-5') }}
        </div>
    @else
        <div class="alert alert-info">No models found.</div>
    @endif
</div>
@endsection
