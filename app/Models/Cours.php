<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'type',
        'contenue',
        'date_affichage',
        'date',
        'matieres_id', // Matiere and classe
        'universite_id'
    ];
}
