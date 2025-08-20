<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = ['full_name','email','subject','message','meta_json','handled_at'];
    protected $casts = ['meta_json'=>'array','handled_at'=>'datetime'];
}
