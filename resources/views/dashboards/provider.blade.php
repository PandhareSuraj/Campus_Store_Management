@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Trust Head Dashboard</h2>
    <p>Welcome {{ auth()->user()->name }}</p>

    <div class="card mt-3">
        <div class="card-body">
            <h5>Financial Monitoring</h5>
            <p>View financial reports and expenditures.</p>
        </div>
    </div>
</div>
@endsection