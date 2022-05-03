<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classes;
use App\Models\Filieres;
use App\Models\Matieres;
use App\Models\Departements;
use App\Models\Etudiants;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $universite = User::where('rolePersonne', 'universite')
        ->where('id', auth()->user()->universite_id)
        ->first();

        $infoEtude = Etudiants::where('etudiants.users_id', auth()->user()->id)
        ->join('classes', 'classes.id', '=', 'etudiants.classes_id')
        ->join('filieres', 'filieres.id', '=', 'classes.filieres_id')
        ->join('departements', 'departements.id', '=', 'filieres.departements_id')
        ->first();

        $filieres = Filieres::where('universite_id', auth()->user()->id)->get();

        $classes = Classes::where('universite_id', auth()->user()->id)->get();
        

        $matieres = Etudiants::where('etudiants.users_id', auth()->user()->id)
        ->join('programmes', 'programmes.classes_id', '=', 'etudiants.classes_id')
        ->join('matieres', 'matieres.id', '=', 'programmes.matieres_id')
        ->get();

        //cours
        $cours = Etudiants::where('etudiants.users_id', auth()->user()->id)
        ->join('programmes', 'programmes.classes_id', '=', 'etudiants.classes_id')
        ->join('matieres', 'matieres.id', '=', 'programmes.matieres_id')
        ->join('cours', 'cours.matieres_id', '=', 'matieres.id')
        ->get(['cours.id as cours_id','cours.*', 'matieres.*', 'programmes.*', 'etudiants.*']);

        return view('home.home', compact('universite','infoEtude','filieres','classes','matieres','cours'));

        //->join('cours', 'cours.classes_id', '=', 'classes.id')
        //return view('etudiant.etudiant', compact('universites','departements','filieres','classes','matieres','etudiants'));

        /*
        ->where('rolePersonne', 'etudiant')
        ->join('etudiants', 'users.id', '=', 'etudiants.users_id')
        ->join('classes', 'classes.id', '=', 'etudiants.classes_id')
        ->join('filieres', 'filieres.id', '=', 'classes.filieres_id')
        ->join('departements', 'departements.id', '=', 'filieres.departements_id')
        ->select('users.*', 'etudiants.*', 'classes.*', 'filieres.*', 'departements.*')
        ->get();*/

        //return view('home.home', compact('universites','departements','filieres','classes','matieres','etudiants','courses'));

    }

    //
    public function dashboard() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        return view('home.dashboard');
    }

    
}
