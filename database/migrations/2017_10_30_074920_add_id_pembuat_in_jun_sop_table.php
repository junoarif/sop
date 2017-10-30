<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdPembuatInJunSopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jun_sop', function (Blueprint $table) {
            $table->unsignedInteger('id_pembuat')->after('aktif');
            $table->foreign('id_pembuat')
            ->references('id')->on('users')
            ->onDelete('cascade');
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
            $table->dropForeign(['id_pembuat']);
            $table->dropColumn('id_pembuat');

        });
    }
}
