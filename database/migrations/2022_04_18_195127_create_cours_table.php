<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('type');
            $table->string('contenue');
            $table->string('date_affichage');
            $table->string('date');
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
        schema::table('cours', function (Blueprint $table){
            $table->dropConstrainedForeignId('matieres_id');
        });
        Schema::dropIfExists('cours');
    }
}
