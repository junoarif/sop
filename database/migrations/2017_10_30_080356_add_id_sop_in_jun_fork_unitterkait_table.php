<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdSopInJunForkUnitterkaitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jun_fork_unitterkait', function (Blueprint $table) {
            $table->unsignedInteger('id_sop')->after('id');
            $table->foreign('id_sop')
            ->references('id')->on('jun_sop')
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
        Schema::table('jun_fork_unitterkait', function (Blueprint $table) {
            $table->dropForeign(['id_sop']);
            $table->dropColumn('id_sop');
        });
    }
}
