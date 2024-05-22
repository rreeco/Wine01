<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'uvaggio',
        'annata',
        'descrizione',
        'categoria',
        'storia',
        'image_path',
        'prezzo',
        'listino',
        'cantina_id',
    ];

    protected $hidden = [
        'prezzo'
    ];

    protected $casts = [
        'annata' => 'integer',
        'prezzo' => 'float',
        'listino' => 'float'       
    ];

}
