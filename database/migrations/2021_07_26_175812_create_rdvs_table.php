<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->string('prenom');
            $table->string('nom');
            $table->integer('age');
            $table->string('sexe');
            $table->string('email');
            $table->integer('telephone');
            $table->string('maladie');
            $table->string('region');
            $table->string('departement');
            $table->string('vaccin');
            $table->LongText('motif');
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rdvs');
    }
}
