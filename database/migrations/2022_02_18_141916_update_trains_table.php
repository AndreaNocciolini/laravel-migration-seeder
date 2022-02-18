<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {

            $table->string('Azienda', 100);
            $table->string('Stazione_di_partenza', 100);
            $table->string('Stazione_di_arrivo', 100);
            $table->date('Data');
            $table->time('Orario_di_partenza');
            $table->time('Orario_di_arrivo');
            $table->string('Codice_treno', 20);
            $table->tinyInteger('Numero_carrozze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            //
        });
    }
}
