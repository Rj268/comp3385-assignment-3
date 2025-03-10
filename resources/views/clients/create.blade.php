@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Client</h1>

    <form action="{{ url('/clients') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label class="form-label">Name *</label>
            <input type="text" class="form-control" name="name" required>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Email *</label>
            <input type="email" class="form-control" name="email" required>
            @error('email')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Phone *</label>
            <input type="tel" class="form-control" name="telephone" placeholder="xxx-xxx-xxxx" required>
            @error('telephone')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Address *</label>
            <input type="text" class="form-control" name="address" required>
            @error('address')<span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Company Logo *</label>
            <input type="file" class="form-control" name="company_logo" accept="image/*">
            @error('company_logo')<span class="text-danger">{{ $message }}</span>@enderror
            <p>Only image files (e.g. jpg, png) are allowed and files must be less than 2MB</p>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection
