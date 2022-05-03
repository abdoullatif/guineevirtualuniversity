<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendriers extends Model
{
    use HasFactory;

    protected $fillable = [
        'jours',
        'heurs',
        'matieres_id',
        'universite_id'
    ];
    
}
