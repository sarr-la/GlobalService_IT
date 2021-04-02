<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Devi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        



        Schema::create('devis', function(Blueprint $table)
    {   

        $table->increments('id');
        $table->string('type');
        $table->string('adresse');
        $table->string('nom');
        $table->string('objet');
        $table->string('email');
        $table->string('numero_de_telephone');
        $table->string('votre_message');
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
        //
    }
}
