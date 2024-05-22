<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'date',
        'category',
        'description',
        'price', 
        'citta',
        'regione',
        'via',
        'image_path',
        'seller_id',
    ];

    protected $casts = [
        'date' => 'datetime',
        'price' => 'float',
        'seller_id' => 'integer'
    ];
}
