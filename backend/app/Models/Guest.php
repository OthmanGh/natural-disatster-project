<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['location_id', 'unique_identifier', 'email'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function alerts()
    {
        return $this->hasMany(Alert::class);
    }
}