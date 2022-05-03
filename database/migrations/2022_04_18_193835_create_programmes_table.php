<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programmes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('classes_id')->constrained('classes')->onDelete('cascade');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade'); //prof
            $table->foreignId('matieres_id')->constrained('matieres')->onDelete('cascade');
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
        schema::table('programmes', function (Blueprint $table){
            $table->dropConstrainedForeignId('classes_id');
            $table->dropConstrainedForeignId('users_id');
            $table->dropConstrainedForeignId('matieres_id');
        });
        Schema::dropIfExists('programmes');
    }
}
