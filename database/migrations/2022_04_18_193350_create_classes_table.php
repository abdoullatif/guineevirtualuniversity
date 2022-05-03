<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('nomClasse');
            $table->foreignId('filieres_id')->constrained('filieres')->onDelete('cascade');
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
        schema::table('classes', function (Blueprint $table){
            $table->dropConstrainedForeignId('filieres_id');
        });
        Schema::dropIfExists('classes');
    }
}
