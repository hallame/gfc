<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Post extends Model implements HasMedia {

    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title','slug','excerpt','content','category',
        'status','published_at','seo_title','seo_description'
    ];

    protected $casts = ['published_at' => 'datetime'];

    public function tags() { return $this->morphToMany(Tag::class, 'taggable'); }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('cover')->singleFile();
    }

}
