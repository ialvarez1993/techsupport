<?php

namespace App\Models;

use Coderflex\LaravelTicket\Models\Ticket as Model;

class Ticket extends Model
{
    //* INFO Missing geolocation
    protected $fillable = [
        // Ticket location
        'address',
        'latitud',
        'longitud',
        // Technical Visit
        'scheduled_at',
        'started_at',
        'finished_at',
        // Product type
        'product_sku',
        'product_name',
        // Diagnosis
        'diagnosis',
    ];
}
