<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stationery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'quantity'];

    public function requests()
    {
        return $this->hasMany(StationeryRequest::class);
    }
}