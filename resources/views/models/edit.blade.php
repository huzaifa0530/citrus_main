@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="fw-bold text-primary mb-4">
        <i class="bi bi-pencil-square me-2"></i> Edit Model
    </h2>

    <form method="POST" action="{{ route('models.update', $model) }}" enctype="multipart/form-data" class="card p-4 shadow-sm border-0 rounded-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-semibold">Name</label>
            <input type="text" name="name" value="{{ old('name', $model->name) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Email</label>
            <input type="email" name="email" value="{{ old('email', $model->email) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $model->phone) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Date of Birth</label>
            <input type="date" name="dob" value="{{ old('dob', $model->dob) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Gender</label>
            <input type="text" name="gender" value="{{ old('gender', $model->gender) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Address</label>
            <textarea name="address" class="form-control">{{ old('address', $model->address) }}</textarea>
        </div>

        <h5 class="mt-4 fw-bold">Assets</h5>
        @foreach(['close_up_image','full_body_image','half_body_image','side_body_image','signature_image','video'] as $field)
            <div class="mb-3">
                <label class="form-label fw-semibold">{{ ucwords(str_replace('_',' ', $field)) }}</label>
                <input type="file" name="{{ $field }}" class="form-control">
                @if($asset = $model->assets->where('name',$field)->first())
                    <div class="mt-2">
                        @if($asset->type === 'image')
                            <img src="{{ $asset->url }}" alt="preview" class="img-thumbnail" width="150">
                        @else
                            <video src="{{ $asset->url }}" width="200" controls></video>
                        @endif
                    </div>
                @endif
            </div>
        @endforeach

        <button type="submit" class="btn btn-success mt-3">Update</button>
        <a href="{{ route('models.index') }}" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
@endsection
