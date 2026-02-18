@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Principal Dashboard</h2>
    <p>Welcome {{ auth()->user()->name }}</p>

    <div class="card mt-3">
        <div class="card-body">
            <h5>Approve Store Requests</h5>
            <p>View and approve department purchase requests.</p>
        </div>
    </div>
</div>
@endsection