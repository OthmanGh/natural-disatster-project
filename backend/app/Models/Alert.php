<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    protected $fillable = ['content', 'guest_id', 'is_read'];

    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
}