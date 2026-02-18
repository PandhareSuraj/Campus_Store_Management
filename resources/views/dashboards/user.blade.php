@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>User Dashboard</h2>
    <p>Welcome {{ auth()->user()->name }}</p>

    <div class="card mt-3">
        <div class="card-body">
            <h5>Place Store Request</h5>
            <p>Request products from campus store.</p>
        </div>
    </div>
</div>
@endsection