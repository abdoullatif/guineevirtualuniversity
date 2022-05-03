<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Etudiants;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        return view('cours.cours');
    }

    //
    public function matter() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }

        //
        $matieres = Etudiants::where('etudiants.users_id', auth()->user()->id)
        ->join('programmes', 'programmes.classes_id', '=', 'etudiants.classes_id')
        ->join('matieres', 'matieres.id', '=', 'programmes.matieres_id')
        ->get(['matieres.*', 'programmes.*', 'etudiants.*', 'matieres.id as matiere_id']);
        
        return view('cours.matter',compact('matieres'));
    }

    //
    public function allCours($id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $course = Etudiants::where('etudiants.users_id', auth()->user()->id)
        ->join('programmes', 'programmes.classes_id', '=', 'etudiants.classes_id')
        ->join('matieres', 'matieres.id', '=', 'programmes.matieres_id')
        ->join('cours', 'cours.matieres_id', '=', 'matieres.id')
        ->get();

        //cours whwere matiere_id = $id
        $courses = Etudiants::where('etudiants.users_id', auth()->user()->id)
        ->join('programmes', 'programmes.classes_id', '=', 'etudiants.classes_id')
        ->join('matieres', 'matieres.id', '=', 'programmes.matieres_id')
        ->join('cours', 'cours.matieres_id', '=', 'matieres.id')
        ->where('cours.matieres_id', $id)
        ->get(['cours.*', 'cours.id as cours_id', 'matieres.*', 'matieres.id as matiere_id', 'programmes.*', 'programmes.id as programme_id', 'etudiants.*', 'etudiants.id as etudiant_id']);

        return view('cours.all_cours',compact('courses'));
    }

    //
    //cour video
    public function viewCoursVideo($id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }

        //cours
        $cours = Cours::where('cours.id', $id)
        ->join('matieres', 'cours.matieres_id', '=', 'matieres.id')
        ->first();

        //$matieres = Matieres::where('universite_id', auth()->user()->id)->get();
        //$filieres = Filieres::where('universite_id', auth()->user()->id)->get();

        return view('cours.cours-video',compact('cours'));
        //return view('cours.cours-video');
    }

    //cour pdf
    public function viewCoursPdf($id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $cours = Cours::where('cours.id', $id)
        ->join('matieres', 'cours.matieres_id', '=', 'matieres.id')
        ->first();

        return view('cours.cours-pdf',compact('cours'));
    }


}
