<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defav extends Model
{
    protected $fillable = ['key', 'text'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
