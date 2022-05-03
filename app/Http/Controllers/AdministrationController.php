<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    //
    public function index() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        $administrateurs = User::where('rolePersonne', 'admin')->get();
        return view('administration.admin', compact('administrateurs'));
    }

    //
    public function formAdministrateur() {
        if( auth()->check() ){}
        else{
            return redirect("/")->withErrors('Session Deconnecter, Veuillez vous connecter');
        }
        return view('administration.create-admin');
    }

    //
    public function storeAdministrateur(Request $request) {
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
        $universite->rolePersonne = 'admin';
        $universite->statutPersonne = 'actif';
        $universite->imagePersonne = $imageName;
        $universite->universite_id = null;
        $universite->dateInscriptionPersonne = date('Y-m-d');
        $universite->email = $request->input('email');
        $universite->password = bcrypt($request->input('password'));
        $universite->save();
        //
        return redirect('/administrateur')->with('success', 'Administrateur ajoutée avec succès');

    }


    
}
