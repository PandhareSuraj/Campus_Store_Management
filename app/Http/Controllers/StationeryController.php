<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StationeryController extends Controller
{
    public function create()
    {
        $items = Stationery::where('quantity', '>', 0)->get();
        return view('stationery.request', compact('items'));
    }

    public function store(Request $request)
    {
        StationeryRequest::create([
            'user_id' => auth()->id(),
            'stationery_id' => $request->stationery_id,
            'requested_quantity' => $request->quantity,
        ]);

        return back()->with('success', 'Request Sent Successfully');
    }

    // HOD Approval
    public function hodRequests()
    {
        $requests = StationeryRequest::where('hod_status', 'pending')->get();
        return view('hod.requests', compact('requests'));
    }

    public function hodApprove($id)
    {
        $req = StationeryRequest::find($id);
        $req->hod_status = 'approved';
        $req->save();

        return back();
    }

    // Principal Approval
    public function principalApprove($id)
    {
        $req = StationeryRequest::find($id);
        $req->principal_status = 'approved';
        $req->save();

        return back();
    }

    // Trust Approval
    public function trustApprove($id)
    {
        $req = StationeryRequest::find($id);
        $req->trust_status = 'approved';

        // If all approved → Send to Provider
        if (
            $req->hod_status == 'approved' &&
            $req->principal_status == 'approved'
        ) {
            $req->provider_status = 'sent';
        }

        $req->save();

        return back();
    }
}