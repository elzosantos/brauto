<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Area extends Model
{
    use HasFactory; 

    public function items(): HasMany 
    {
        return $this->hasMany(Item::class);
    }

    public function subgroups(): BelongsTo
    {
        return $this->belongsTo(Subgroup::class);
    }
}
