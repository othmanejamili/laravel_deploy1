<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreateAbsenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('create_absence', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('CodeDiplome');
            $table->string('date_absences');
            $table->string('heur_absence');
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
        Schema::dropIfExists('create_absence');
    }
}
