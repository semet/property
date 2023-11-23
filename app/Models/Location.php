<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'slug',
        'name',
        'address'
    ];

    public function properties(): HasMany
    {
        return $this->hasMany(
            related: Property::class,
            foreignKey: 'location',
            localKey: 'slug'
        );
    }

    public function agents(): HasMany
    {
        return $this->hasMany(Agent::class);
    }
}
