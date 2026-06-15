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
        'location',
        'email_contactpersoon',
    ];
}
