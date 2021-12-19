<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom', 255)->nullable();
            $table->string('email', 355)->nullable();
            $table->string('adr', 500)->nullable();
            $table->string('contenu',500)->nullable();
          
        
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
        Schema::dropIfExists('entreprise');
    }
}
