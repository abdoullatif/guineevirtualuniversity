<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\UniversiteController;
use App\Http\Controllers\AdministrationController;

/*
|--------------------------------------------------------------------------
| Web Routes Login
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Connecte universite
Route::get('/', [AuthController::class, 'index']); //->name('universite');

//Login portal
Route::get('/login/{id}', [AuthController::class, 'login'])->name('login');

//Login connection
Route::post('/login/connection', [AuthController::class, 'customLogin'])->name('connection');

//Login
Route::get('/logout', [AuthController::class, 'signOut'])->name('logout');

/*
|--------------------------------------------------------------------------
| Web Routes Home
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home
Route::get('/home', [HomeController::class, 'index'])->name('home');

//home Get
//Route::get('/home', [HomeController::class, 'index']); //->name('home')


/*
|--------------------------------------------------------------------------
| Web Routes Cours
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Cours
Route::get('/cours', [CoursController::class, 'index'])->name('cours');

//All Cours
Route::get('/cours/all/{id}', [CoursController::class, 'allCours'])->name('all_cours');

//Matieres
Route::get('/matter', [CoursController::class, 'matter'])->name('matter');

//View Cours
Route::get('/cours/view/{id}', [CoursController::class, 'viewCoursVideo'])->name('cours.view');

//View Cours pdg
Route::get('/cours/pdf/{id}', [CoursController::class, 'viewCoursPdf'])->name('cours.view.pdf');

/*
|--------------------------------------------------------------------------
| Web Routes Chat
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Chat
Route::get('/discussion', [ChatController::class, 'index'])->name('discussions'); 

/*
|--------------------------------------------------------------------------
| Web Routes Calendrier
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Calendrier
Route::get('/calendrier', [CalendrierController::class, 'index'])->name('calendrier');

/*
|--------------------------------------------------------------------------
| Web Routes Administration HOME
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Dashboard
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');


/*
|--------------------------------------------------------------------------
| Web Routes Universite
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//universite
Route::get('/universite', [UniversiteController::class, 'index'])->name('universite');

//form universite
Route::get('/form/universite', [UniversiteController::class, 'formUniversite'])->name('universite.form');

//add universite
Route::post('/add/universite', [UniversiteController::class, 'storeUniversite'])->name('universite.store');

//Departemet
Route::get('/departement', [UniversiteController::class, 'indexDepartement'])->name('departement');

//Departemet store
Route::post('/add/departement', [UniversiteController::class, 'storeDepartement'])->name('departement.store');

//filiere
Route::get('/filiere', [UniversiteController::class, 'indexFiliere'])->name('filiere');

//filiere store
Route::post('/add/filiere', [UniversiteController::class, 'storeFiliere'])->name('filiere.store');

//matiere
Route::get('/matiere', [UniversiteController::class, 'indexMatiere'])->name('matiere');

//matiere store
Route::post('/add/matiere', [UniversiteController::class, 'storeMatiere'])->name('matiere.store');

//Classe 
Route::get('/classe', [UniversiteController::class, 'indexClasse'])->name('classe');

//Classe store
Route::post('/add/classe', [UniversiteController::class, 'storeClasse'])->name('classe.store');

//Programme
Route::get('/programme', [UniversiteController::class, 'indexProgramme'])->name('programme');

//Programme
Route::post('/add/programme', [UniversiteController::class, 'storeProgramme'])->name('programme.store');

//Cours
Route::get('/cours', [UniversiteController::class, 'indexCours'])->name('cours');

//Cours store
Route::post('/add/cours', [UniversiteController::class, 'storeCours'])->name('cours.store');



/*
|--------------------------------------------------------------------------
| Web Routes Professeur
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//professeur
Route::get('/professeur', [ProfesseurController::class, 'index'])->name('professeur');

//form professeur
Route::get('/form/professeur', [ProfesseurController::class, 'formProfesseur'])->name('professeur.form');

//add professeur
Route::post('/add/professeur', [ProfesseurController::class, 'storeProfesseur'])->name('professeur.store');


/*
|--------------------------------------------------------------------------
| Web Routes Etudiant
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Etudiant
Route::get('/etudiant', [EtudiantController::class, 'index'])->name('etudiant');

//form etudiant
Route::get('/form/etudiant', [EtudiantController::class, 'formEtudiant'])->name('etudiant.form');

//add etudiant
Route::post('/add/etudiant', [EtudiantController::class, 'storeEtudiant'])->name('etudiant.store');

//get filiere
Route::get('get/filiere/{id}', [EtudiantController::class, 'getFiliere'])->name('etudiant.getFiliere');

//get classe
Route::get('get/classe/{id}', [EtudiantController::class, 'getClasse'])->name('etudiant.getClasse');


/*
|--------------------------------------------------------------------------
| Web Routes Administrateur
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//universite
Route::get('/administrateur', [AdministrationController::class, 'index'])->name('administrateur');

//form universite
Route::get('/form/administrateur', [AdministrationController::class, 'formAdministrateur'])->name('administrateur.form');

//add universite
Route::post('/add/administrateur', [AdministrationController::class, 'storeAdministrateur'])->name('administrateur.store');





