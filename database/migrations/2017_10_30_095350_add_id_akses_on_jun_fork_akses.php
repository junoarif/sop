<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdAksesOnJunForkAkses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jun_fork_akses', function (Blueprint $table) {
            $table->unsignedInteger('id_akses')->after('id_user');
            $table->foreign('id_akses')
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
        Schema::table('jun_fork_akses', function (Blueprint $table) {
            $table->dropForeign(['id_akses']);
            $table->dropColumn('id_akses');
        });
    }
}
