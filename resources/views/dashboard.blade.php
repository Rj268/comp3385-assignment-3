@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome to your dashboard. Here you can manage your account, your clients, and much more.</p>

    <a href="{{ url('/clients/add') }}" class="btn btn-primary">+ Create Client</a>

    <div class="row mt-4">
        @foreach ($clients as $client)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if ($client->company_logo)
                        <img src="{{ asset('storage/' . $client->company_logo) }}" class="card-img-top" alt="Logo">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $client->name }}</h5>
                        <p class="card-text">
                            {{ $client->email }}<br>
                            {{ $client->telephone }}<br>
                            {{ $client->address }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
