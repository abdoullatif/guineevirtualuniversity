<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("users")->insert([
            [
                "nomPersonne"=>"Super",
                "prenomPersonne"=>"Admin",
                "adressePersonne"=>"kaloum",
                "genrePersonne"=>"Masculin",
                "telephonePersonne"=>"00224627928920",
                "rolePersonne"=>"superadmin",
                "statutPersonne"=>"actif",
                "imagePersonne"=>"avatar.png",
                "dateInscriptionPersonne"=>now(),
                "email"=>"root@gmail.com",
                "password"=>bcrypt("gvu@2020"),
            ],
        ]);
    }
}
