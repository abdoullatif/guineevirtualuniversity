<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function index() {
        $universites = User::where('rolePersonne', 'universite')->get();
        return view('login.universite', compact('universites'));
    }

    //
    public function login($universite_id) {
        return view('login.login', compact('universite_id'));
    }

    //
    public function customLogin(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // check statutPersonnel
            if(Auth::user()->statutPersonne == 'actif') {
                // check role
                if(Auth::user()->rolePersonne == 'universite') {
                    if(Auth::user()->universite_id == null) {
                        return redirect()->route('dashboard');
                    } else {
                        Auth::logout();
                        return redirect()->route('login',['id'=> $request->universite_id])->withErrors('Un problemme est survenue veuillez recommencer');
                    }
                } elseif(Auth::user()->rolePersonne == 'professeur') {
                    if(Auth::user()->universite_id == $request->universite_id) {
                        return redirect()->route('home');
                    } else {
                        Auth::logout();
                        return redirect()->route('login',['id'=> $request->universite_id])->withErrors('Un problemme est survenue veuillez recommencer');
                    }
                    //return redirect('/professeur');
                } elseif(Auth::user()->rolePersonne == 'etudiant') {
                    if(Auth::user()->universite_id == $request->universite_id) {
                        return redirect()->route('home');
                    } else {
                        Auth::logout();
                        return redirect()->route('login',['id'=> $request->universite_id])->withErrors('Un problemme est survenue veuillez recommencer');
                    }
                    //return redirect('/etudiant');
                } elseif(Auth::user()->rolePersonne == 'superadmin' || Auth::user()->rolePersonne == 'admin') {
                    return redirect()->route('home');
                    //return redirect('/etudiant');
                }
                //return redirect()->route('home');
            }
            else {
                Auth::logout();
                return redirect()->route('login',['id'=> $request->universite_id])->withErrors('Votre compte est désactivé, veuillez contacter l\'administrateur');
            }
            // Authentication passed...
            //return redirect()->intended('home'); //->withSuccess('Signed in')
        }
  
        return redirect()->route('login',['id'=> $request->universite_id])->withErrors('L\'adresse email ou le mot de passe est incorrecte');

    }

    //
    public function tryLoginGet(){

        if( auth()->check() ){
            // check statutPersonnel
            if(Auth::user()->statutPersonne == 'actif') {
                // check role
                if(Auth::user()->rolePersonne == 'universite') {
                    if(Auth::user()->universite_id == null) {
                        return redirect()->route('home');
                    } else {
                        Auth::logout();
                        return redirect()->route('login',['id'=> $request->universite_id])->withErrors('Un problemme est survenue veuillez recommencer');
                    }
                } elseif(Auth::user()->rolePersonne == 'professeur') {
                    if(Auth::user()->universite_id == $request->universite_id) {
                        return redirect()->route('home');
                    } else {
                        Auth::logout();
                        return redirect()->route('login',['id'=> $request->universite_id])->withErrors('Un problemme est survenue veuillez recommencer');
                    }
                    //return redirect('/professeur');
                } elseif(Auth::user()->rolePersonne == 'etudiant') {
                    if(Auth::user()->universite_id == $request->universite_id) {
                        return redirect()->route('home');
                    } else {
                        Auth::logout();
                        return redirect()->route('login',['id'=> $request->universite_id])->withErrors('Un problemme est survenue veuillez recommencer');
                    }
                    //return redirect('/etudiant');
                }
                //return redirect()->route('home');
            }
        }
        else{
            return redirect("/")->withErrors('Veuillez reessayer !');
        }

    }

    //
    public function signOut() {
        //Deconnection
        Session::flush();
        Auth::logout();

        return redirect("/");
    }
}
