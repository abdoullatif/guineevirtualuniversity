<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendriers', function (Blueprint $table) {
            $table->id();
            $table->string('joursCalendriers'); //lundi ...
            $table->string('heursCalendriers'); //22:30
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
        schema::table('calendriers', function (Blueprint $table){
            $table->dropConstrainedForeignId('matieres_id');
        });
        Schema::dropIfExists('calendriers');
    }
}
