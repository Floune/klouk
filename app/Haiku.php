<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Haiku extends Model
{
    protected $fillable = ["text", "part"];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
