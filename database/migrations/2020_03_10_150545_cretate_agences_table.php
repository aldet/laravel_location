<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretateAgencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NomAgence');
            $table->string('ville')->nullable()->default('text');
            $table->string('pays')->nullable();
            $table->string('AdresseAgence')->nullable();
            $table->integer('CodePostalAgence')->unsigned()->nullable();
            $table->string('tarification')->nullable();

            
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
        Schema::drop('agences');
    }
}
