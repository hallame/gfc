<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable {
    use HasFactory, Notifiable, InteractsWithMedia; // , HasRoles;

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'phone',
        'avatar',
        'address',
        'city',
        'country',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Pratique : nom complet
    public function getFullNameAttribute(): string {
        return "{$this->firstname} {$this->lastname}";
    }


    public function registerMediaCollections(): void {
        $this->addMediaCollection('avatar')->singleFile()->useDisk(config('filesystems.default'));
    }
}




