<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'organization',
        'description',
        'tijdstip',
        'location_id',
        'email_contactpersoon',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
