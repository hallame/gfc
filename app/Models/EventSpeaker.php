<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventSpeaker extends Model {


    protected $fillable = ['event_id','name','title'];
    public function event(){ return $this->belongsTo(Event::class); }

    
}
