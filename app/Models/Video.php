<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Video extends Model implements HasMedia {

    use HasFactory, InteractsWithMedia;

    public const STATUS_DRAFT    = 'draft';
    public const STATUS_REVIEW   = 'review';
    public const STATUS_SCHEDULE = 'scheduled';
    public const STATUS_PUB      = 'published';
    public const STATUS_ARCH     = 'archived';



    protected $fillable = [
        'title','slug','description','provider','provider_ref','duration','status','published_at'
    ];

    protected $casts = ['published_at' => 'datetime'];

    public function tags() { return $this->morphToMany(Tag::class, 'taggable'); }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('thumb')->singleFile();
    }
}
