<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['latitude', 'longitude'];

    public function guests()
    {
        return $this->hasMany(Guest::class);
    }

    public function shelters()
    {
        return $this->hasMany(Shelter::class);
    }

    public function dangerZones()
    {
        return $this->hasMany(DangerZone::class);
    }
}