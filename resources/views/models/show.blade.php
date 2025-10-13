@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="fw-bold">{{ $model->name }}</h1>
        <a href="{{ route('models.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Back to Models
        </a>
    </div>

    <div class="row">
        <!-- Profile Info -->
        <div class="col-md-5">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Profile Information</h5>
                    <p><strong>Name:</strong> {{ $model->name }}</p>
                    <p><strong>Email:</strong> {{ $model->email ?? '-' }}</p>
                    <p><strong>Gender:</strong> {{ $model->gender ?? '-' }}</p>
                    <p><strong>Age:</strong> {{ $model->age ?? '-' }}</p>
                    <p><strong>Phone:</strong> {{ $model->phone ?? '-' }}</p>
                    <p><strong>Address:</strong> {{ $model->address ?? '-' }}</p>
                    <p><strong>Created:</strong> {{ $model->created_at->format('d M Y, H:i') }}</p>
                </div>
            </div>
        </div>

        <!-- Assets Gallery -->
        <div class="col-md-7">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">Assets</h5>
                    @if($model->assets->count())
                        <div class="row g-3">
                            @foreach($model->assets as $asset)
                                <div class="col-md-6">
                                    <div class="border rounded p-2 text-center bg-light">
                                        @if($asset->type === 'image')
                                            <img src="{{ $asset->url }}" 
                                                 class="img-fluid rounded mb-2" 
                                                 alt="{{ $asset->name }}"
                                                 style="max-height:250px; object-fit:cover;">
                                        @elseif($asset->type === 'video')
                                            <video class="w-100 rounded mb-2" 
                                                   controls 
                                                   style="max-height:250px; object-fit:cover;">
                                                <source src="{{ $asset->url }}" type="{{ $asset->mime_type }}">
                                                Your browser does not support the video tag.
                                            </video>
                                        @endif
                                        <p class="small text-muted mb-0">{{ ucfirst(str_replace('_',' ',$asset->name)) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">No assets uploaded.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Actions -->
    <div class="d-flex justify-content-end gap-2 mt-3">
        <a href="{{ route('models.edit', $model) }}" class="btn btn-outline-primary">
            <i class="bi bi-pencil"></i> Edit
        </a>
        <form action="{{ route('models.destroy', $model) }}" method="POST" class="d-inline">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-outline-danger"
                    onclick="return confirm('Delete this model?')">
                <i class="bi bi-trash"></i> Delete
            </button>
        </form>
    </div>
</div>
@endsection
