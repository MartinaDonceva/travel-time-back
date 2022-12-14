<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'paragraph', 'image'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Lecture::class);
    }
}
