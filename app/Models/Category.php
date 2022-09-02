<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function lectures(): HasMany
    {
        return $this->hasMany(Lecture::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }
}
