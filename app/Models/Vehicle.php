<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    use HasFactory, HasUuids;
    protected $with = ['exemplar'];


    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn (string $createdAt) => Carbon::make($createdAt)->format('d/m/Y H:i')

        );
    }
    public function exemplar(): BelongsTo
    {
        return $this->belongsTo(Exemplar::class);
    }
}
