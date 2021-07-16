<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSaliments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Saliments', function (Blueprint $table) {
            $table->id();
            $table->string('designation')->unique();
            $table->integer('prixTTC')->nullable();
            $table->integer('quantite')->nullable();
            $table->integer('total')->nullable();
            $table->integer('aliment_id')->nullable();
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
        Schema::dropIfExists('Saliments');
    }
}
