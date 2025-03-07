<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPrenomToCvFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cv_files', function (Blueprint $table) {
            $table->string('prenom')->after('nom'); // Add 'filier' column after 'file_path'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cv_files', function (Blueprint $table) {
            $table->dropColumn('prenom'); // Drop 'filier' column if migration is rolled back
        });
    }
}
