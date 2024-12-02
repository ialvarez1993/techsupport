<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visit extends Model
{
    protected $fillable = [
        //
        'ticket_id',
        'address',
        'longitud',
        'latitud',
        'started_at',
        'finished_at',
    ];

    /**
     * Get User RelationShip
     */
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
