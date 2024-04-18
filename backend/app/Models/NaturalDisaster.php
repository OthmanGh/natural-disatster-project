<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NaturalDisaster extends Model
{
    protected $fillable = ['name'];

    public function dangerZones()
    {
        return $this->hasMany(DangerZone::class);
    }
}