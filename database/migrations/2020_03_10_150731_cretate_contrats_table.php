<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->Increments('id');
            $table->date('DateDepart')->nullable();
            $table->date('DateRetourPrevu')->nullable();
            $table->date('dateRetour')->nullable();
            $table->integer('MontantJournalier')->nullable();
            $table->integer('MontantAcompte')->nullable();
            $table->integer('km_depart')->nullable();




            
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
        Schema::drop('contrats');
    }
}
