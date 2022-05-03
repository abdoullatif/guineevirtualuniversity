<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nomPersonne');
            $table->string('prenomPersonne');
            $table->string('adressePersonne');
            $table->string('genrePersonne'); // Personne Morale
            $table->string('telephonePersonne');
            $table->string('rolePersonne');
            $table->string('statutPersonne');
            $table->string('imagePersonne');
            $table->string('universite_id')->nullable();
            $table->string('dateInscriptionPersonne');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
