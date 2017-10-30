<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPokjaPemilik extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jun_sop', function (Blueprint $table) {
          $table->unsignedInteger('pokja_pemilik')->after('id_pembuat')->nullable();
          $table->unsignedInteger('unit_pemilik')->after('pokja_pemilik')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jun_sop', function (Blueprint $table) {
            $table->dropColumn('pokja_pemilik');
            $table->dropColumn('unit_pemilik');
        });
    }
}
