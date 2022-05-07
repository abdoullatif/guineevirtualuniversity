<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->text('bodyCommentaire');
            $table->foreignId('cours_id')->constrained('cours')->onDelete('cascade'); 
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade'); 
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
        schema::table('commentaires', function (Blueprint $table){
            $table->dropConstrainedForeignId('cours_id');
            $table->dropConstrainedForeignId('users_id');
        });
        Schema::dropIfExists('commentaires');
    }
}
