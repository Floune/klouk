<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fav extends Model
{
    protected $fillable = ["text"];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
