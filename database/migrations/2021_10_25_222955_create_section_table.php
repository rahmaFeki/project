<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->id();
            $table->string('titre', 300)->nullable();
            $table->string('description', 300)->nullable();
            $table->string('image', 300)->nullable();
            $table->integer('entreprise_id')->unsigned()->index();
            $table->foreign('entreprise_id')->references('id')->on('entrep')->onDelete('cascade');
           
         
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
        Schema::dropIfExists('section');
    }
}
