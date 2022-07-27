<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'image',
        'element',
        'description',
        'health',
        'stamina',
        'mojo',
        'magic',
        'strength',
        'defense',
        'level',
        'owner_id',
    ];


}
