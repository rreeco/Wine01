<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Post;
use App\Models\Event;
use App\Models\Wine;

class Seller extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'born',
        'email',
        'password',
        'phone',
        'vat',
        'city',
        'country',
        'address',
        'postal_code',
        'image_path'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'postal_code' => 'integer'
    ];
    
    
    public function caso_key() {
        return $this->hasMany(caso_key::class);
    }

    public function isAdmin() {
        return $this->caso_key()->where("role", "admin")->exists();
    }
    public function isWinery() {
        return $this->caso_key()->where("role", "winery")->exists();
    }
    public function isSeller() {
        return $this->caso_key()->where("role", "seller")->exists();
    }
    public function isGuide() {
        return $this->caso_key()->where("role", "local_guide")->exists();
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }


    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function wines()
    {
        return $this->hasMany(Wine::class);
    }   
}
