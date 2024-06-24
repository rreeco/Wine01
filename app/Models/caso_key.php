<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class caso_key extends Model
{
    use HasFactory;

    protected $fillable = [
        "seller_id",
        "role"
    ];
    
    public $timestamps = false;
}
