<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartenaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partenaire', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login')->unique()->nullable(false);
            $table->string('cin')->unique()->nullable(false);
            $table->string('nom')     ->nullable(false);
            $table->string('prenom')  ->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('tel')     ->nullable(false);
            $table->string('email')   ->nullable(false);
            $table->string('chemin_image');
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
        Schema::dropIfExists('partenaire');
    }
}
