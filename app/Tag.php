<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

// this table refers to the scenarios that a user may select  for each tags (options)
class Tag extends Model
{
    protected $fillable = [
        'feeling',
        'language',
        'occasion'
    ];

    public function movies(): BelongsToMany {
        return $this->belongsToMany(Movie::class);
    }
}
