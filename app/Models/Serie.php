<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Serie extends Model implements HasMedia {
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title','slug','description'];

    public function teachings() { return $this->hasMany(Teaching::class); }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('cover')->singleFile();
    }
}
