<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Movie extends Model
{
    protected $fillable = [
        'title'
    ];

    public function tags(): BelongsToMany {
        return $this->belongsToMany(Tag::class);
    }
}
