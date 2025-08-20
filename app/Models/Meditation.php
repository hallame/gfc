<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Meditation extends Model implements HasMedia {
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['verse_id','content'];

    public function verse() { return $this->belongsTo(Verse::class); }

    public function registerMediaCollections(): void {
        $this->addMediaCollection('flyer')->singleFile();
    }
}
