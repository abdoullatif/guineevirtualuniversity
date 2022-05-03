<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfesseurController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        $professeurs = User::where('rolePersonne', 'professeur')
        ->where('universite_id', auth()->user()->id)
        ->get();
        return view('professeur.professeur', compact('professeurs'));
        //return view('professeur.professeur');
    }

    //
    public function formProfesseur() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        return view('professeur.create-professeur');
    }

    //
    public function storeProfesseur(Request $request) {
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
        $destinationPath = public_path('/uploads/professeur/');
        $image->move($destinationPath, $imageName);

        //
        $professeur = new User;
        $professeur->nomPersonne = $request->input('nom');
        $professeur->prenomPersonne = $request->input('prenom');
        $professeur->adressePersonne = $request->input('adresse');
        $professeur->genrePersonne = $request->input('genre');
        $professeur->telephonePersonne = $request->input('telephone');
        $professeur->rolePersonne = 'professeur';
        $professeur->statutPersonne = 'actif';
        $professeur->imagePersonne = $imageName;
        $professeur->universite_id = auth()->user()->id;
        $professeur->dateInscriptionPersonne = date('Y-m-d');
        $professeur->email = $request->input('email');
        $professeur->password = bcrypt($request->input('password'));
        $professeur->save();
        //
        return redirect('/professeur')->with('success', 'Professeur ajouté avec succès');
        //return view('professeur.professeur');
    }



    
}
