<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Gallery extends Model {
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title','slug','description'];

    public function registerMediaCollections(): void {
        $this->addMediaCollection('images');                // images multiples
        $this->addMediaCollection('cover')->singleFile();   // visuel de couverture
    }
}
