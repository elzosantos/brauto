<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report_evaluation extends Model
{
    use HasFactory;

    public function reports(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }

    public function evaluations(): BelongsTo
    {
        return $this->belongsTo(Evaluation::class);
    }
}
