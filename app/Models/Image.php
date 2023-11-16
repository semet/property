<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'property_id',
        'url',
        'alt'
    ];

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }
}
