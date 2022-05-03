<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->id();
            $table->string('nomFiliere');
            $table->foreignId('departements_id')->constrained('departements')->onDelete('cascade');
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
        schema::table('filieres', function (Blueprint $table){
            $table->dropConstrainedForeignId('departements_id');
        });
        Schema::dropIfExists('filieres');
    }
}
