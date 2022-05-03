<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade'); //etudiant
            $table->foreignId('classes_id')->constrained('classes')->onDelete('cascade');
            $table->string('annee_scolaire');
            $table->string('universite_id');
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
        schema::table('etudiants', function (Blueprint $table){
            $table->dropConstrainedForeignId('users_id');
            $table->dropConstrainedForeignId('classes_id');
        });
        Schema::dropIfExists('etudiants');
    }
}
