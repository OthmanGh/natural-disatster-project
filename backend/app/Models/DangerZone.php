<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DangerZone extends Model
{
    protected $fillable = ['location_id', 'radius', 'risk_level', 'natural_disaster_id'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function naturalDisaster()
    {
        return $this->belongsTo(NaturalDisaster::class);
    }
}