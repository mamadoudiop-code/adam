<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVentes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->id('ventes_id');
            $table->integer('nbvente')->nullable();
            $table->integer('restants')->nullable();
            $table->integer('quantite')->nullable();
            $table->foreignId('agent_id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('pains_id')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('ventes');
    }
}
