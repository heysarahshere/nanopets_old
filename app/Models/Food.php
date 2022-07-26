<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'magic',
        'strength',
        'defense',
        'health',
        'breedableStat', // STRING: stat this food will effect when breeding
        'breedableStatChance', // INT: % chance of the breedableStat being closer to the higher parent's stat
        'cost'
    ];
}
