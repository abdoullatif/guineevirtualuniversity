<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cours;
use App\Models\Classes;
use App\Models\Filieres;
use App\Models\Matieres;
use App\Models\Programmes;
use App\Models\Departements;
use Illuminate\Http\Request;

class UniversiteController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        $universites = User::where('rolePersonne', 'universite')->get();
        return view('universite.universite', compact('universites'));
    }

    //
    public function formUniversite() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        return view('universite.create-universite');
    }

    //
    public function storeUniversite(Request $request) {
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
            'email' => 'required',
            'password' => 'required',
            'image' => 'required',
        ]);

        //move image to storage
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/universite/');
        $image->move($destinationPath, $imageName);

        //
        $universite = new User;
        $universite->nomPersonne = $request->input('nom');
        $universite->prenomPersonne = $request->input('prenom');
        $universite->adressePersonne = $request->input('adresse');
        $universite->genrePersonne = $request->input('genre');
        $universite->telephonePersonne = $request->input('telephone');
        $universite->rolePersonne = 'universite';
        $universite->statutPersonne = 'actif';
        $universite->imagePersonne = $imageName;
        $universite->universite_id = null;
        $universite->dateInscriptionPersonne = date('Y-m-d');
        $universite->email = $request->input('email');
        $universite->password = bcrypt($request->input('password'));
        $universite->save();
        //
        return redirect('/universite')->with('success', 'Université ajoutée avec succès');
        //return view('universite.universite');
    }

    //Administration Controle 

    //index
    public function indexDepartement() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        $departements = Departements::where('universite_id', auth()->user()->id)->get();
        return view('universite.departement',compact('departements'));
    }

    //store
    public function storeDepartement(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $this->validate($request, [
            'departement' => 'required',
        ]);

        $departement = new Departements;
        $departement->nomDepartement = $request->departement;
        $departement->universite_id = auth()->user()->id;
        $departement->save();
        //
        return redirect('/departement')->with('success', 'Departement ajouté avec succès');
    }

    //index
    public function indexFiliere() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        $filieres = Filieres::where('filieres.universite_id', auth()->user()->id)
        ->join('departements', 'filieres.departements_id', '=', 'departements.id')
        ->get();
        //$filieres = Filieres::all();
        $departements = Departements::where('universite_id', auth()->user()->id)->get();
        return view('universite.filiere',compact('departements','filieres'));
    }

    //store
    public function storeFiliere(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $this->validate($request, [
            'departement_id' => 'required',
            'filiere' => 'required',
        ]);

        //
        $filiere = new Filieres;
        $filiere->departements_id = $request->departement_id;
        $filiere->nomFiliere = $request->filiere;
        $filiere->universite_id = auth()->user()->id;
        $filiere->save();
        //
        return redirect('/filiere')->with('success', 'Filiere ajoutée avec succès');

        //return view('universite.filiere');
    }

    //index
    public function indexMatiere() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        $matieres = Matieres::where('universite_id', auth()->user()->id)->get();
        return view('universite.matiere',compact('matieres'));
    }

    //store
    public function storeMatiere(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $this->validate($request, [
            'matiere' => 'required',
        ]);

        //
        $matiere = new Matieres;
        $matiere->nomMatiere = $request->matiere;
        $matiere->universite_id = auth()->user()->id;
        $matiere->save();
        //
        return redirect('/matiere')->with('success', 'Matiere ajoutée avec succès');
    }

    //classe
    public function indexClasse() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        $classes = Classes::where('classes.universite_id', auth()->user()->id)
        ->join('filieres', 'classes.filieres_id', '=', 'filieres.id')
        ->get();
        $filieres = Filieres::where('filieres.universite_id', auth()->user()->id)->get();
        //->join('departements', 'filieres.departements_id', '=', 'departements.id')
        
        return view('universite.classe',compact('classes','filieres'));
        //return view('universite.classe');
    }

    //classe store
    public function storeClasse(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $this->validate($request, [
            'filiere_id' => 'required',
            'classe' => 'required',
        ]);

        //
        $classe = new Classes;
        $classe->nomClasse = $request->classe;
        $classe->filieres_id = $request->filiere_id;
        $classe->universite_id = auth()->user()->id;
        $classe->save();
        //
        return redirect('/classe')->with('success', 'Classe ajoutée avec succès');
        //return view('cours.cours');
    }

    //programme
    public function indexProgramme() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $programmes = Programmes::where('programmes.universite_id', auth()->user()->id)
        ->join('classes', 'programmes.classes_id', '=', 'classes.id')
        ->join('filieres', 'classes.filieres_id', '=', 'filieres.id')
        ->join('departements', 'filieres.departements_id', '=', 'departements.id')
        ->join('matieres', 'programmes.matieres_id', '=', 'matieres.id')
        ->join('users', 'programmes.users_id', '=', 'users.id')
        ->get();

        //filiere
        $filieres = Filieres::where('universite_id', auth()->user()->id)->get();

        $classes = Classes::where('classes.universite_id', auth()->user()->id)
        ->join('filieres', 'classes.filieres_id', '=', 'filieres.id')
        ->get(['classes.id as classe_id','classes.*','filieres.*']);

        $matieres = Matieres::where('universite_id', auth()->user()->id)->get();
        $professeurs = User::where('universite_id', auth()->user()->id)
        ->where('rolePersonne', 'professeur')
        ->get();
        return view('universite.programme',compact('programmes','filieres','classes','matieres','professeurs'));

        //return view('cours.cours');
    }

    //programme store
    public function storeProgramme(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $this->validate($request, [
            'classe_id' => 'required',
            'matiere_id' => 'required',
            'users_id' => 'required',
        ]);

        //
        $programme = new Programmes;
        $programme->users_id = $request->users_id;
        $programme->classes_id = $request->classe_id;
        $programme->matieres_id = $request->matiere_id;
        $programme->universite_id = auth()->user()->id;
        $programme->save();
        //
        return redirect('/programme')->with('success', 'Programme ajouté avec succès');

        //return view('cours.cours');
    }

    //index
    public function indexCours() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $cours = Cours::where('cours.universite_id', auth()->user()->id)
        ->join('matieres', 'cours.matieres_id', '=', 'matieres.id')
        ->get();
        $matieres = Matieres::where('universite_id', auth()->user()->id)->get();
        //$filieres = Filieres::where('universite_id', auth()->user()->id)->get();
        return view('universite.cours',compact('matieres','cours'));

        //return view('universite.cours');
    }

    //store
    public function storeCours(Request $request) {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        //
        $this->validate($request, [
            'titre' => 'required',
            'type' => 'required',
            'contenue' => 'required',
            'matiere_id' => 'required',
            
        ]);

        //move contenue to storage
        $contenue = $request->file('contenue');
        $contenueName = time().'.'.$contenue->getClientOriginalExtension();
        $destinationPath = public_path('/uploads/cours/');
        $contenue->move($destinationPath, $contenueName);

        //
        $cours = new Cours;
        $cours->matieres_id = $request->matiere_id;
        $cours->titre = $request->titre;
        $cours->type = $request->type;
        $cours->contenue = $contenueName;
        $cours->date = date('Y-m-d');
        $cours->date_affichage = date('Y-m-d');
        $cours->universite_id = auth()->user()->id;
        $cours->save();
        //
        return redirect('/cours')->with('success', 'Cours ajouté avec succès');
        //return view('universite.cours');
    }
    

}
