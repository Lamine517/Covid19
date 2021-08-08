<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('departements', function (Blueprint $table) {
            $table->foreign('region_id')
                  ->references('id')
                  ->on('regions')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
        Schema::table('centres', function (Blueprint $table) {
            $table->foreign('departement_id')
                ->references('id')
                ->on('departements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('vaccins', function (Blueprint $table) {
            $table->foreign('centre_id')
                ->references('id')
                ->on('centres')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('departements', function(Blueprint $table) {
            $table->dropForeign('departements_region_id_foreign');
        });
        Schema::table('centres', function(Blueprint $table) {
            $table->dropForeign('centres_departement_id_foreign');
        });
        Schema::table('vaccins', function(Blueprint $table) {
            $table->dropForeign('vaccins_centre_id_foreign');
        });
    }
}
