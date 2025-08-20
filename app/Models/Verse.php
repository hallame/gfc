<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Verse extends Model {

    protected $fillable = ['reference','content','version'];
    public function meditations() { return $this->hasMany(Meditation::class); }
}
