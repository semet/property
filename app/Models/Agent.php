<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    use HasFactory, HasUlids;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'photo'
    ];

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
