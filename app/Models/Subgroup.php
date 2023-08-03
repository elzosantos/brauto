<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subgroup extends Model
{
    use HasFactory;

    public function areas(): HasMany
    {
        return $this->hasMany(Area::class);
    }

    public function groups(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}
