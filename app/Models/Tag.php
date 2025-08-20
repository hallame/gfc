<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {
    protected $fillable = ['name','slug','kind'];
    public function teachings() { return $this->morphedByMany(Teaching::class, 'taggable'); }
    public function posts()     { return $this->morphedByMany(Post::class, 'taggable'); }
    public function videos()    { return $this->morphedByMany(Video::class, 'taggable'); }
    public function events()    { return $this->morphedByMany(Event::class, 'taggable'); }
}
