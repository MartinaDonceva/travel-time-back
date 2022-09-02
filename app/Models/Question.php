<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['text'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function question_answers(): HasMany
    {
        return $this->hasMany(QuestionAnswer::class);
    }
}
