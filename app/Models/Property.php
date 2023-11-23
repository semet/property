<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'type',
        'location',
        'agent_id',
        'property_id',
        'slug',
        'name',
        'status',
        'price',
        'room',
        'bedroom',
        'bathroom',
        'garage',
        'built_year',
        'area',
        'description',
        'is_available'
    ];

    public function relatedType(): BelongsTo
    {
        return $this->belongsTo(
            related: Type::class,
            foreignKey: 'type',
            ownerKey: 'slug'
        );
    }

    public function relatedLocation(): BelongsTo
    {
        return $this->belongsTo(
            related: Location::class,
            foreignKey: 'location',
            ownerKey: 'slug'
        );
    }

    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }
}
