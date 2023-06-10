<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Sale extends Model
{
    use HasFactory;

    public function user():BelongsTo{
        return $this->belongsTo(User::Class);
    }

    public function item():HasOne{
        return $this->hasOne(item::Class);
    }
}
