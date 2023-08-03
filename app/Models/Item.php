<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Item extends Model
{
    use HasFactory;

    public function evaluations(): HasMany
    {
        return $this->hasMany(Evaluation::class);
    }

    public function areas(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
