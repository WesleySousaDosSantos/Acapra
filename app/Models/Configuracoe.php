<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracoe extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'orgName',
        'orgEmail',
        'orgPhone',
        'orgWhatsapp',
        'orgAddress',
        'socialFacebook',
        'socialInstagram',
        'socialTwitter',
        'socialWhatsapp',
        'logo',
        'created_at',
        'updated_at',
    ];
}
