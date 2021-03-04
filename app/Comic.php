<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }
    public function series()
    {
        return $this->belongsToMany(Serie::class);
    }
}
