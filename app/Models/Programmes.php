<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programmes extends Model
{
    use HasFactory;

    protected $fillable = [
        'classes_id',
        'users_id', // Professeur
        'matieres_id',
        'universite_id'
    ];
}
