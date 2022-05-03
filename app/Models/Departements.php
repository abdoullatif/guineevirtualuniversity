<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departements extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomDepartement',
        'universite_id'
    ];
}
