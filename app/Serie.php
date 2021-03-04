<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function series()
    {
        return $this->belongsToMany(Author::class);
    }
}
