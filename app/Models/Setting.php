<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'header_text',
        'about',
        'phone',
        'phone_secondary',
        'whatsapp',
        'email',
        'email_secondary',
        'facebook_link',
        'country',
        'city',
        'location',
        'location_link'
    ];
}
