<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
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
}
