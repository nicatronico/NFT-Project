<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    use HasFactory;

    public function user():BelongsTo{
        return $this->belongsTo(User::Class);
    }

    public function likeable(): MorphTo
    {
        return $this->morphTo();
    }
}
