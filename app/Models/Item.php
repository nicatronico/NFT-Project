<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Item extends Model
{
    use HasFactory;

    public function author():BelongsTo{
        return $this->belongsTo(Author::Class);
    }

    public function category():BelongsTo{
        return $this->belongsTo(Category::Class);
    }

    public function status():BelongsTo{
        return $this->belongsTo(Status::Class);
    }

    public function collection():BelongsTo{
        return $this->belongsTo(Collection::Class);
    }

    public function sale():BelongsTo{
        return $this->belongsTo(Sale::Class);
    }

    public function likes(): MorphMany
    {
        return $this->morphMany(Like::class, 'likeable');
    }
}
