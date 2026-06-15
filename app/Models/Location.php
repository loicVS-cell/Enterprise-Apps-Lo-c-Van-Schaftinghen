<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name',
        'address',
        'capacity',
    ];

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
