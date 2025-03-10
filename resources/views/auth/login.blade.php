
@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center">Login</div>

                <div class="card-body">
                    <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email" required autofocus>
                    </div>

                    <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>            

    <!-- Display errors -->
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
@endsection