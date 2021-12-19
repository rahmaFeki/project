<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mission', function (Blueprint $table) {
            $table->id();
            $table->string('num', 255)->nullable();
            $table->string('lib', 255)->nullable();
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
        Schema::dropIfExists('mission');
    }
}
