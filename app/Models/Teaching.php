<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Teaching extends Model implements HasMedia {


    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title','slug','summary','content','kind','serie_id',
        'seo_title','seo_description','status','published_at',
        'duration','video_url', 'description'
    ];


    public const KIND_DOCTRINE   = 'doctrine';
    public const KIND_PREDIC     = 'predication';
    public const KIND_ETUDE      = 'etude';

    public const STATUS_DRAFT    = 'draft';
    public const STATUS_REVIEW   = 'review';
    public const STATUS_SCHEDULE = 'scheduled';
    public const STATUS_PUB      = 'published';
    public const STATUS_ARCH     = 'archived';

    protected $attributes = [
        'kind' => self::KIND_DOCTRINE,
        'status' => self::STATUS_DRAFT,
    ];

    protected $casts = [
        'published_at' => 'datetime',
    ];

    public function series() { return $this->belongsTo(Serie::class); }
    public function tags()   { return $this->morphToMany(Tag::class, 'taggable'); }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('cover')->singleFile();
        $this->addMediaCollection('audio')->singleFile();
        $this->addMediaCollection('pdf')->singleFile();
    }


}
