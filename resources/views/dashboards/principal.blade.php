@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Principal Dashboard</h2>
    <p>Welcome {{ auth()->user()->name }}</p>

    <div class="card mt-3">
        <div class="card-body">
            <h5>Final Approval Section</h5>
            <p>Manage overall campus store approvals.</p>
        </div>
    </div>
</div>
@endsection