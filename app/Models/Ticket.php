<?php

namespace App\Models;

use Coderflex\LaravelTicket\Models\Ticket as Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Parallax\FilamentComments\Models\Traits\HasFilamentComments;

class Ticket extends Model
{
    use HasFilamentComments;

    //* INFO Missing geolocation
    protected $fillable = [
        // Ticket location
        // 'user_id',
        // 'address',
        // 'latitud',
        // 'longitud',
        // // Technical Visit
        // 'scheduled_at',
        // 'started_at',
        // 'finished_at',
        // // Product type
        // 'product_sku',
        // 'product_name',
        // // Diagnosis
        // 'diagnosis',
        // 'services',
        // 'requieres_parts',
        // 'part_list',
        // 'is_approved',
        // 'store_branch',
    ];

    /**
     * Get Visits RelationShip
     */
    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }

    /**
     * Get Categories RelationShip
     */
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class
        );
    }

    /**
     * Get Labels RelationShip
     */
    public function labels(): BelongsToMany
    {

        return $this->belongsToMany(
            Label::class,
        );
    }
}
