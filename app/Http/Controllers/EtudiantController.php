<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Classes;
use App\Models\Filieres;
use App\Models\Matieres;
use App\Models\Etudiants;
use App\Models\Departements;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $universites = User::where('rolePersonne', 'universite')->get();
        $departements = Departements::where('universite_id', auth()->user()->id)->get();
        $filieres = Filieres::where('universite_id', auth()->user()->id)->get();
        $classes = Classes::where('universite_id', auth()->user()->id)->get();
        //$matieres = Matieres::where('universite_id', auth()->user()->id)->get();
        $etudiants = User::where('users.universite_id', auth()->user()->id)
        ->where('rolePersonne', 'etudiant')
        ->join('etudiants', 'users.id', '=', 'etudiants.users_id')
        ->join('classes', 'classes.id', '=', 'etudiants.classes_id')
        ->join('filieres', 'filieres.id', '=', 'classes.filieres_id')
        ->join('departements', 'departements.id', '=', 'filieres.departements_id')
        ->select('users.*', 'etudiants.*', 'classes.*', 'filieres.*', 'departements.*')
        ->get();
        return view('etudiant.etudiant', compact('universites','departements','filieres','classes','etudiants'));
        //return view('etudiant.etudiant');
    }

    //
    public function formEtudiant() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $universites = User::where('rolePersonne', 'universite')->get();
        $departements = Departements::where('universite_id', auth()->user()->id)->get();
        $filieres = Filieres::where('universite_id', auth()->user()->id)->get();
        $classes = Classes::where('universite_id', auth()->user()->id)->get();
        $matieres = Matieres::where('universite_id', auth()->user()->id)->get();
        $etudiants = User::where('universite_id', auth()->user()->id)
        ->where('rolePersonne', 'etudiant')
        ->get();
        return view('etudiant.create-etudiant', compact('universites','departements','filieres','classes','matieres','etudiants'));
        //return view('etudiant.create-etudiant');
    }

    //
    public function storeEtudiant(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'adresse' => 'required',
            'genre' => 'required',
            'telephone' => 'required',
            'departement' => 'required',
            'filiere' => 'required',
            'classe' => 'required',
            'annee' => 'required',
            'email' => 'required',
            'password' => 'required',
            //'image' => 'required',
        ]);

        $imageName = "avatar.png";

        //if image exist
        if($request->hasFile('image')){
            //move image
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }
        

        //
        $etudiant = new User();
        $etudiant->nomPersonne = $request->input('nom');
        $etudiant->prenomPersonne = $request->input('prenom');
        $etudiant->adressePersonne = $request->input('adresse');
        $etudiant->genrePersonne = $request->input('genre');
        $etudiant->telephonePersonne = $request->input('telephone');
        $etudiant->rolePersonne = 'etudiant';
        $etudiant->statutPersonne = 'actif';
        $etudiant->imagePersonne = $imageName;
        $etudiant->universite_id = auth()->user()->id;
        $etudiant->dateInscriptionPersonne = date('Y-m-d');
        $etudiant->email = $request->input('email');
        $etudiant->password = bcrypt($request->input('password'));
        $etudiant->save();
        
        //$request->session()->flash('success', 'Etudiant ajouter avec succes');

        //Etudiant
        $etude = new Etudiants();
        $etude->users_id = $etudiant->id;
        $etude->classes_id = $request->input('classe');
        $etude->annee_scolaire = $request->input('annee');
        $etude->universite_id = auth()->user()->id;
        $etude->save();
        //

        return redirect('/etudiant')->with('success', 'Etudiant ajouter avec succes');
    }


    //filiere
    public function getFiliere($departement_id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $filieres = Filieres::where('universite_id', auth()->user()->id)
        ->where('departements_id', $departement_id)
        ->pluck("nomFiliere", "id");
        //->get();
        return response()->json($filieres);
    }


    //classe
    public function getClasse($filiere_id) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $classes = Classes::where('universite_id', auth()->user()->id)
        ->where('filieres_id', $filiere_id)
        ->pluck("nomClasse", "id");
        //->get();
        return response()->json($classes);
    }




}
