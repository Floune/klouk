<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    protected $fillable = ['key', 'score'];

    public function haikus() {
        return $this->belongsToMany(Haiku::class);
    }

    public function getTextAttribute() {
        $parts = [];
        $ids = explode('_', $this->key);
        $parts[] = Haiku::find($ids[0])->text;
        $parts[] = Haiku::find($ids[1])->text;
        $parts[] = Haiku::find($ids[2])->text;
        return join(', ', $parts);
    }

    public function Users() {
        return $this->belongsToMany(User::class);
    }

}
