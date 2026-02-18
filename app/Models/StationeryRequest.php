<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StationeryRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stationery_id',
        'requested_quantity',
        'hod_status',
        'principal_status',
        'trust_status',
        'provider_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stationery()
    {
        return $this->belongsTo(Stationery::class);
    }
}