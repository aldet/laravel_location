<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CretateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NumPassport')->nullable();
            $table->string('NumPermis')->nullable();
            $table->string('cin')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('email')->unique();
            $table->integer('telephone')->nullable();
            $table->boolean('in_blackList')->nullable()->default(false);
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
        Schema::drop('clients');
    }
}
