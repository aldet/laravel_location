<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretateVoituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voitures', function (Blueprint $table) {
            $table->string('matriculation')->primary();
            $table->string('marque')->nullable();
            $table->string('couleur')->nullable();
            $table->boolean('disponibilite')->nullable();
            $table->integer('puissance')->nullable();
            $table->date('DateDebutAssurance')->nullable();
            $table->date('DateFinAssurance')->nullable();
            $table->boolean('climatisation')->nullable()->default(false);
            $table->boolean('automatique')->nullable()->default(false);


            
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
        Schema::drop('voitures');
    }
}
