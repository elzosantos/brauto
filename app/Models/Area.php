<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany; 

class Area extends Model
{
    use HasFactory; 
    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $createdAt) => Carbon::make($createdAt)->format('d/m/Y H:i')

        );
    }

    public function items(): HasMany 
    {
        return $this->hasMany(Item::class);
    }

    public function subgroups(): BelongsTo
    {
        return $this->belongsTo(Subgroup::class);
    }
}
