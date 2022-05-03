<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', // Etudiant
        'classes_id',
        'annee_scolaire',
        'universite_id'
    ];
}
