<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Event extends Model implements HasMedia {
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title','slug','kind','description','start_at','end_at','timezone','venue',
        'address_line1','city','country','lat','lon','is_online','stream_url','registration_url',
        'status','published_at'
    ];

    protected $casts = ['start_at'=>'datetime','end_at'=>'datetime','published_at'=>'datetime','is_online'=>'boolean','lat'=>'float','lon'=>'float'];

    public function speakers() { return $this->hasMany(EventSpeaker::class); }
    public function tags()     { return $this->morphToMany(Tag::class, 'taggable'); }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('banner')->singleFile();
        $this->addMediaCollection('cover')->singleFile();
        $this->addMediaCollection('gallery'); // multiples
    }
}
