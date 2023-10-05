<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const SUPER_ADMIM = 0;
    const BOOTH = 1;
    const INTERVIEWS = 2;
    const DIRECTOR_GENERAL = 3;
    const USG_FOR_AC = 4;
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'category_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
